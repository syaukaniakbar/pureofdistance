<?php

namespace App\Mail;

use App\Models\Payment;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PaymentPendingMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Payment $payment)
    {
        //
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: '[Pureofdistance Run 2026] Selesaikan Pembayaranmu – ' . $this->payment->order_id,
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.payment-pending',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
