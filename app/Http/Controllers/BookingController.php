<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\StoreCheckBookingRequest;
use App\Models\Ticket;
use App\Services\BookingService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    protected $bookingService;

    public function __construct(BookingService $bookingService)
    {
        $this->bookingService = $bookingService;
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
        $today = Carbon::now()->isoFormat('dddd, D MMMM Y');
 
        if ($bookingDetails) {
            return view('front.check_booking_details', compact('bookingDetails', 'today'));
        }
 
        return redirect()->route('front.check_booking')->withErrors(['error' => 'Transaction nout found']);
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
}
