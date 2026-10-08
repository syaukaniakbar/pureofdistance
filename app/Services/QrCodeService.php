<?php

namespace App\Services;

use App\Models\Payment;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;

class QrCodeService
{
    /**
     * Generate a unique QR token and save QR image for the payment.
     * Returns the qr_token string.
     */
    public function generateForPayment(Payment $payment): string
    {
        // Generate unique token
        $token = Str::uuid()->toString();

        // Build the QR code content (not sensitive — just a unique token)
        $qrContent = 'PUREOFDISTANCE-RUN-2026:' . $token;

        // Generate QR code PNG and store it
        $path = 'qrcodes/' . $token . '.png';

        $qrImage = QrCode::format('png')
            ->size(300)
            ->margin(2)
            ->generate($qrContent);

        Storage::disk('public')->put($path, $qrImage);

        Log::info('QR Code generated', [
            'order_id' => $payment->order_id,
            'path'     => $path,
        ]);

        return $token;
    }

    /**
     * Return the absolute storage path of the QR image for a given token.
     */
    public function imagePath(string $token): string
    {
        return storage_path('app/public/qrcodes/' . $token . '.png');
    }
}
