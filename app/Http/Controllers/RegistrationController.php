<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegistrationRequest;
use Illuminate\Http\Request;
use Midtrans\Config;
use Illuminate\Support\Facades\Log;
use Laravolt\Indonesia\Models\Province;
use App\Services\RegistrationService;
use App\Models\Registration;
use App\Models\Payment;



class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $provinces = Province::orderBy('name')->get();
        return view('pages.registration', compact('provinces'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRegistrationRequest $request, RegistrationService $registrationService)
    {
        try {

            $result = $registrationService->create(
                $request->validated()
            );

            return redirect()
                ->route(
                    'checkout.show',
                    $result['payment']->order_id
                )
                ->with(
                    'snapToken',
                    $result['snapToken']
                );

        } catch (\Exception $e) {

            Log::error('Failed to create registration', [
                'message' => $e->getMessage(),
            ]);

            return back()
                ->withInput()
                ->with(
                    'error',
                    'Failed to create registration. Please try again.'
                );
        }
    }

    public function checkout(string $orderId)
    {
        $payment = Payment::where('order_id', $orderId)
            ->with('registration')
            ->firstOrFail();

        return view('pages.checkout', [
            'payment' => $payment,
            'snapToken' => session('snapToken'),
        ]);
    }

    public function callback(Request $request)
    {
        Config::$serverKey = config('midtrans.serverKey');
        Config::$isProduction = config('midtrans.isProduction');

        Log::info('Midtrans Callback Received', [
            'data' => $request->all()
        ]);

        // Verify Signature Key
        $signature = hash(
            'sha512',
            $request->order_id .
            $request->status_code .
            $request->gross_amount .
            Config::$serverKey
        );

        if ($signature !== $request->signature_key) {

            Log::warning('Invalid Midtrans Signature', [
                'order_id' => $request->order_id
            ]);

            return response()->json([
                'message' => 'Invalid signature'
            ], 403);
        }

        // Find Payment
        $payment = Payment::where(
            'order_id',
            $request->order_id
        )->first();

        if (!$payment) {

            Log::warning('Payment Not Found', [
                'order_id' => $request->order_id
            ]);

            return response()->json([
                'message' => 'Payment not found'
            ], 404);
        }

        switch ($request->transaction_status) {

            /**
             * Credit Card Success
             */
            case 'capture':

                if ($request->fraud_status === 'accept') {

                    $payment->update([
                        'payment_status' => 'paid',
                        'transaction_id' => $request->transaction_id,
                        'payment_type' => $request->payment_type,
                        'paid_at' => now(),
                    ]);
                }

                break;

            /**
             * QRIS
             * Bank Transfer
             * E-Wallet
             */
            case 'settlement':

                $payment->update([
                    'payment_status' => 'paid',
                    'transaction_id' => $request->transaction_id,
                    'payment_type' => $request->payment_type,
                    'paid_at' => now(),
                ]);

                break;

            /**
             * Waiting Payment
             */
            case 'pending':

                $payment->update([
                    'payment_status' => 'pending',
                    'transaction_id' => $request->transaction_id,
                    'payment_type' => $request->payment_type,
                    'expired_at' => $request->expiry_time,
                ]);

                break;

            /**
             * Expired
             */
            case 'expire':

                $payment->update([
                    'payment_status' => 'expired',
                    'expired_at' => now(),
                ]);

                break;

            /**
             * Failed Payment
             */
            case 'cancel':
            case 'deny':

                $payment->update([
                    'payment_status' => 'failed',
                    'transaction_id' => $request->transaction_id,
                    'payment_type' => $request->payment_type,
                ]);

                break;

            /**
             * Refund
             */
            case 'refund':

                $payment->update([
                    'payment_status' => 'refunded',
                    'transaction_id' => $request->transaction_id,
                    'payment_type' => $request->payment_type,
                ]);

                break;
        }

        Log::info('Payment Updated Successfully', [
            'order_id' => $request->order_id,
            'payment_status' => $payment->fresh()->payment_status
        ]);

        return response()->json([
            'message' => 'OK'
        ], 200);
    }




public function paymentStatus(string $orderId)
{
    $order = Payment::where('order_id', $orderId)
        ->firstOrFail();

    switch ($order->payment_status) {

        case 'paid':
            return view('payment.success', compact('order'));


        case 'pending':
        case 'unpaid':
            return view('payment.pending', compact('order'));


        case 'expired':
        case 'failed':
            return view('payment.failed', compact('order'));


        case 'refunded':
            return view('payment.refunded', compact('order'));


        default:
            return view('payment.processing', compact('order'));
    }
}

}
