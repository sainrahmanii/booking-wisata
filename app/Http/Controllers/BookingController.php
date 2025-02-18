<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\StoreCheckBookingRequest;
use App\Models\BookingTransaction;
use App\Models\Ticket;
use App\Services\BookingService;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Midtrans;

class BookingController extends Controller
{
    protected $bookingService;

    public function __construct(BookingService $bookingService)
    {
        $this->bookingService = $bookingService;

        Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        Midtrans\Config::$isProduction = env('MIDTRANS_IS_PRODUCTION');
        Midtrans\Config::$isSanitized = env('MIDTRANS_IS_SANITIZED');
        Midtrans\Config::$is3ds = env('MIDTRANS_IS_3DS');
    }

    public function checkBooking()
    {
        return view('front.check_booking');
    }

    public function checkBookingDetails(StoreCheckBookingRequest $request)
    {
        $validated = $request->validated();

        $bookingDetails = $this->bookingService->getBookingDetails($validated);

        // dd($bookingDetails);
        // ngambil data pada hari ini
        $today = Carbon::now();
        $start_date = Carbon::parse($bookingDetails->started_at);

        $dateStart = Carbon::parse($bookingDetails->started_at)->isoFormat('dddd, D MMMM Y');

        dd($today, $start_date, $dateStart);

        if ($bookingDetails) {
            return view('front.check_booking_details', compact('bookingDetails', 'dateStart', 'today', 'start_date'));
        }

        return redirect()->route('front.check_booking')->withErrors(['error' => 'Transaction not found']);
    }

    public function booking(Ticket $ticket)
    {
        return view('front.booking', compact('ticket'));
    }

    public function bookingStore(Ticket $ticket, StoreBookingRequest $request)
    {
        $validated = $request->validated();

        $totals = $this->bookingService->calculateTotals($ticket->id, $validated['total_participant']);
        $this->bookingService->storeBookingInSession($ticket, $validated, $totals);

        return redirect()->route('front.payment');
    }

    public function payment()
    {
        $data = $this->bookingService->payment();
        return view('front.payment', $data);
    }

    public function getSnapRedirect(BookingTransaction $bookingTransaction)
    {
        $bookingCode = Str::random(5);
        $bookingTransaction->midtrans_booking_code = $bookingCode;

        $transaction_details = [
            'order_id' => $bookingCode,
            'gross_amount' => $bookingTransaction->total_amount,
        ];

        $item_details = [
            'id' => $bookingCode,
            'price' => $bookingTransaction->ticket->price,
            'quantity' => $bookingTransaction->total_participant,
            'name' => $bookingTransaction->ticket->name,
        ];

        $user_data = [
            'first_name' => $bookingTransaction->name,
            'last_name' => "",
            'email' => $bookingTransaction->email,
            'phone' => $bookingTransaction->phone_number,
            'address' => "",
            'city' => "",
            'postal_code' => "",
            'country_code' => "IDN",
        ];

        $customer_details = [
            'first_name' => $bookingTransaction->name,
            'last_name' => "",
            'email' => $bookingTransaction->email,
            'phone' => $bookingTransaction->phone_number,
            'billing_address' => $user_data,
            'shipping_address' => $user_data, 
        ];

        $midtransParams = [
            'transaction_details' => $transaction_details,
            'item_details' => $item_details ,
            'customer_details' => $customer_details,
        ];

        try {
            $payment_url = \Midtrans\Snap::createTransaction($midtransParams)->redirect_url;
            $bookingTransaction->midtrans_url = $payment_url;
            $bookingTransaction->save();
        } catch (Exception $e) {
            return false;
        }
    }

    public function midtransCallback(StoreBookingRequest $request)
    {
        $notif = new Midtrans\Notification();

        $transaction_status = $notif->transaction_status;
        $fraud = $notif->fraud_status;

        $checkout_id = $notif->midtrans_booking_code;
        $checkout = BookingTransaction::find($checkout_id);

        if ($transaction_status == 'capture') {
            if ($fraud == 'challenge') {
                $checkout->midtrans_payment_status = 'pending';
            }
            else if ($fraud == 'accept') {
                $checkout->midtrans_payment_status = 'paid';
            }
        }
        else if ($transaction_status == 'cancel') {
            if ($fraud == 'challenge') {
                $checkout->midtrans_payment_status = 'failed';
            }
            else if ($fraud == 'accept') {
                $checkout->midtrans_payment_status = 'failed';
            }
        }
        else if ($transaction_status == 'deny') {
            $checkout->midtrans_payment_status = 'failed';
        }
        else if ($transaction_status == 'settlement') {
            $checkout->midtrans_payment_status = 'paid';
        }
        else if ($transaction_status == 'pending') {
            $checkout->midtrans_payment_status = 'pending';
        }
        else if ($transaction_status == 'expire') {
            $checkout->midtrans_payment_status = 'failed';
        }

        $checkout->save();
        return redirect()->route('front.booking_finished', $checkout);
    }
}
