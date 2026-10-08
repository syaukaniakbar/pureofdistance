<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'registration_id',
        'order_id',
        'transaction_id',
        'payment_type',
        'gross_amount',
        'payment_status',
        'paid_at',
        'expired_at',
        'qr_token',
        'pending_email_sent_at',
        'success_email_sent_at',
        'snap_token',
    ];

    protected $casts = [
        'paid_at'                => 'datetime',
        'expired_at'             => 'datetime',
        'pending_email_sent_at'  => 'datetime',
        'success_email_sent_at'  => 'datetime',
    ];

    public function registration()
    {
        return $this->belongsTo(Registration::class);
    }
}
