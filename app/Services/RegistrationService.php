<?php

namespace App\Services;

use App\Models\Registration;
use App\Models\Payment;
use Illuminate\Support\Facades\DB;

class RegistrationService
{
    public function create(array $data) 
    {
        return DB::transaction(function () use ($data) {

            $price = match ($data['kategori']) {
                '5K' => 150000,
                '10K' => 350000,
                '21K' => 500000,
            };

            $registration = Registration::create($data);

            $orderId = 'RUN-' .
                now()->format('YmdHis') .
                '-' .
                random_int(1000, 9999);

            $payment = Payment::create([
                'registration_id' => $registration->id,
                'order_id' => $orderId,
                'gross_amount' => $price,
                'payment_status' => 'pending',
            ]);

            $nameParts = explode(' ', trim($registration->nama));
            $firstName = $nameParts[0];
            $lastName = implode(' ', array_slice($nameParts, 1));

            $params = array(
                'transaction_details' => array(
                    'order_id' => $orderId,
                    'gross_amount' => $price,
                ),
                'customer_details' => array(
                    'first_name' => $firstName,
                    'last_name' => $lastName,
                    'email' => $registration->email,
                    'phone' => $registration->handphone,
                ),
            );

            $snapToken = \Midtrans\Snap::getSnapToken($params);

            $payment->update(['snap_token' => $snapToken]);

            return [
                'payment' => $payment,
            ];
        });
    }
}
