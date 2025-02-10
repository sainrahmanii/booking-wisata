<?php

namespace App\Repositories;

use App\Models\BookingTransaction;
use App\Repositories\Contracts\BookingRepositoryInterface;

class BookingRepository implements BookingRepositoryInterface
{
    public function createBooking(array $data)
    {
        return BookingTransaction::create($data);
    }

    public function findByTrxIdAndPhoneNumber($midtransBookingCode, $phoneNumber)
    {
        return BookingTransaction::where('midtrans_booking_code', $midtransBookingCode)
                                    ->where('phone_number', $phoneNumber)
                                    ->first();
    }
}