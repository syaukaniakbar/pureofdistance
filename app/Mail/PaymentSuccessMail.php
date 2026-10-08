<?php

namespace App\Mail;

use App\Models\Payment;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PaymentSuccessMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public Payment $payment,
        public string $qrImagePath,
    ) {
        //
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: '[Pureofdistance Run 2026] Pendaftaran Berhasil! – ' . $this->payment->order_id,
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.payment-success',
        );
    }

    public function attachments(): array
    {
        return [
            Attachment::fromPath($this->qrImagePath)
                ->as('tiket-qr-' . $this->payment->order_id . '.png')
                ->withMime('image/png'),
        ];
    }
}
