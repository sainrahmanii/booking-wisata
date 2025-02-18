<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookingTransaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'phone_number',
        'email',
        'proof',
        'total_amount',
        'total_participant',
        'started_at',
        'ticket_id',
        'is_paid',
        'booking_trx_id',
    ];

    public static function generateUniqueTrxId()
    {
        $prefix = 'WSTL';
        do {
            $randomString = $prefix . mt_rand(1000, 9999);
        } while (self::where('booking_trx_id', $randomString)->exists());

        return $randomString;
    }

    public function ticket(): BelongsTo
    {
        return $this->belongsTo(Ticket::class, 'ticket_id');
    }
}