<?php

namespace App\Services;

use App\Repositories\Contracts\BookingRepositoryInterface;
use App\Repositories\Contracts\TicketRepositoryInterface;

class BookingService
{
    protected $ticketRepository;
    protected $bookingRepository;

    public function __construct(TicketRepositoryInterface $ticketRepository, BookingRepositoryInterface $bookingRepository)
    {
        $this->ticketRepository = $ticketRepository;
        $this->bookingRepository = $bookingRepository;
    }

    public function calculateTotals($ticketId, $totalParticipant)
    {
        $ppn = 0.11;
        $price = $this->ticketRepository->getPrice($ticketId);

        $subTotal = $totalParticipant * $price;
        $totalPpn = $ppn * $subTotal;
        $totalAmount = $subTotal + $totalPpn;

        return [
            'sub_total' => $subTotal,
            'total_ppn' => $totalPpn,
            'total_amount' => $totalAmount,
        ];
    }

    public function storeBookingInSession($ticket, $valdatedData, $totals)
    {
        session()->put('booking', [
            'ticket_id' => $ticket->id,
            'name'      => $valdatedData['name'],
            'email'     => $valdatedData['email'],
            'phone_number' => $valdatedData['phone_number'],
            'started_at'   => $valdatedData['started_at'],
            'sub_total' => $totals['sub_total'],
            'total_pp'  => $totals['total_pp'],
            'total_amount' => $totals['total_amount'],
        ]);
    }

    public function paymennt()
    {
        $booking = session('booking');
        $ticket = $this->ticketRepository->find($booking['ticket_id']);

        return compact('booking', 'ticket');
    }
}