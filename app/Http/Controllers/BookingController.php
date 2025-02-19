<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\StoreCheckBookingRequest;
use App\Http\Requests\StorePaymentRequest;
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

        // dd($today, $start_date, $dateStart);

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

        $booking = session('booking');
        // dd($booking);

        return redirect()->route('front.payment');
    }

    public function payment()
    {
        $data = $this->bookingService->payment();
        // dd($data);
        return view('front.payment', $data);
    }

    public function paymentStore(StorePaymentRequest $request)
    {
        $validated = $request->validated();
        $bookingTransactionId = $this->bookingService->paymentStore($validated);

        if ($bookingTransactionId) {
            return redirect()->route('front.booking_finished', $bookingTransactionId);
        }

        return redirect()->route('front.index')->withErrors(['error' => 'Payment failed. Please try again']);
    }

    public function bookingFinished(BookingTransaction $bookingTransaction)
    {
        return view('front.booking_finished', compact('bookingTransaction'));
    }

    //     public function getSnapRedirect(BookingTransaction $bookingTransaction)
    //     {
    //         $bookingTransaction = BookingTransaction::with('ticket')->find($bookingTransaction->id);
    // 
    //         $bookingCode = Str::random(5);
    //         $bookingTransaction['midtrans_booking_code'] = $bookingCode;
    // 
    //         $transaction_details = [
    //             'order_id' => $bookingCode,
    //             'gross_amount' => $bookingTransaction->total_amount,
    //         ];
    // 
    //         $item_details = [
    //             'id' => $bookingCode,
    //             'total-price' => $bookingTransaction->total_amount,
    //             'quantity' => $bookingTransaction->total_participant,
    //             'name' => $bookingTransaction->ticket_id->name,
    //         ];
    // 
    //         $user_data = [
    //             'first_name' => $bookingTransaction->name,
    //             'last_name' => "",
    //             'email' => $bookingTransaction->email,
    //             'phone' => $bookingTransaction->phone_number,
    //             'address' => "",
    //             'city' => "",
    //             'postal_code' => "",
    //             'country_code' => "IDN",
    //         ];
    // 
    //         $customer_details = [
    //             'first_name' => $bookingTransaction->name,
    //             'last_name' => "",
    //             'email' => $bookingTransaction->email,
    //             'phone' => $bookingTransaction->phone_number,
    //             'billing_address' => $user_data,
    //             'shipping_address' => $user_data,
    //         ];
    // 
    //         $midtransParams = [
    //             'transaction_details' => $transaction_details,
    //             'item_details' => $item_details,
    //             'customer_details' => $customer_details,
    //         ];
    // 
    //         dd($midtransParams);
    // 
    //         try {
    //             $payment_url = \Midtrans\Snap::createTransaction($midtransParams)->redirect_url;
    //             $bookingTransaction->midtrans_url = $payment_url;
    //             $bookingTransaction->save();
    //         } catch (Exception $e) {
    //             return false;
    //         }
    //     }
}
