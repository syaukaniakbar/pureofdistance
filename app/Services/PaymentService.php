<?php

namespace App\Services;

use App\Mail\PaymentPendingMail;
use App\Mail\PaymentSuccessMail;
use App\Models\Payment;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class PaymentService
{
    public function __construct(protected QrCodeService $qrCodeService)
    {
        //
    }

    /**
     * Send a pending email — only once per payment.
     */
    public function sendPendingEmail(Payment $payment): void
    {
        // Idempotency: do not send again if already sent
        if ($payment->pending_email_sent_at !== null) {
            Log::info('Pending email already sent, skipping.', ['order_id' => $payment->order_id]);
            return;
        }

        $registration = $payment->registration;

        Mail::to($registration->email)
            ->send(new PaymentPendingMail($payment));

        $payment->update(['pending_email_sent_at' => now()]);

        Log::info('Pending email sent', ['order_id' => $payment->order_id]);
    }

    /**
     * Send a success email with QR code — only once per payment.
     */
    public function sendSuccessEmail(Payment $payment): void
    {
        // Idempotency: do not send again if already sent
        if ($payment->success_email_sent_at !== null) {
            Log::info('Success email already sent, skipping.', ['order_id' => $payment->order_id]);
            return;
        }

        // Generate QR if not yet generated
        if ($payment->qr_token === null) {
            $token = $this->qrCodeService->generateForPayment($payment);
            $payment->update(['qr_token' => $token]);
            $payment->refresh();
        }

        $qrImagePath = $this->qrCodeService->imagePath($payment->qr_token);
        $registration = $payment->registration;

        Mail::to($registration->email)
            ->send(new PaymentSuccessMail($payment, $qrImagePath));

        $payment->update(['success_email_sent_at' => now()]);

        Log::info('Success email sent', ['order_id' => $payment->order_id]);
    }
}
