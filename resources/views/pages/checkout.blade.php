<x-layouts.main>

    <x-slot:title>
        {{ 'Checkout | Pureofdistance Run 2026' }}
    </x-slot>


    {{-- =========================================================
        CHECKOUT PAGE
    ========================================================== --}}
    <section
        class="min-h-screen bg-white pt-28 sm:pt-32 lg:pt-36 pb-16 px-4 sm:px-6 lg:px-8 selection:bg-yellow-400 selection:text-slate-950"
    >

        <div class="max-w-6xl mx-auto">


            {{-- =================================================
                EVENT LABEL
            ================================================== --}}
            <div class="flex items-center gap-3 mb-7">

                <span class="w-8 h-1 bg-yellow-400 rounded-full"></span>

                <span class="text-xs sm:text-sm font-extrabold tracking-[0.18em] text-slate-900 uppercase">
                    Pureofdistance Run 2026
                </span>

            </div>


            {{-- =================================================
                PAGE HEADER
            ================================================== --}}
            <div class="max-w-3xl mb-12 sm:mb-14">

                <div class="flex items-center gap-2 mb-4">

                    <span class="text-xs font-bold tracking-[0.2em] text-yellow-600 uppercase">
                        Run
                    </span>

                    <span class="text-slate-300">
                        •
                    </span>

                    <span class="text-xs font-bold tracking-[0.2em] text-slate-500 uppercase">
                        Register
                    </span>

                    <span class="text-slate-300">
                        •
                    </span>

                    <span class="text-xs font-bold tracking-[0.2em] text-slate-500 uppercase">
                        Race
                    </span>

                </div>


                <h1
                    class="text-4xl sm:text-5xl lg:text-6xl font-black tracking-tight text-slate-950 leading-[0.95]"
                >
                    Complete Your
                    <span class="text-yellow-500">
                        Registration
                    </span>
                </h1>


                <p class="mt-5 text-sm sm:text-base text-slate-500 leading-relaxed max-w-2xl">
                    Review your runner details and order summary before completing
                    your payment.
                </p>

            </div>


            {{-- =================================================
                MAIN CONTENT
            ================================================== --}}
            <div class="grid lg:grid-cols-12 gap-6 lg:gap-8 items-start">


                {{-- =================================================
                    RUNNER INFORMATION
                ================================================== --}}
                <div
                    class="lg:col-span-7 bg-white border border-slate-200 rounded-2xl shadow-sm overflow-hidden"
                >

                    {{-- Card Header --}}
                    <div
                        class="px-6 sm:px-8 py-6 border-b border-slate-100"
                    >

                        <div class="flex items-center justify-between gap-4">

                            <div>

                                <p
                                    class="text-xs font-bold tracking-[0.15em] text-yellow-600 uppercase mb-1"
                                >
                                    Participant Details
                                </p>

                                <h2
                                    class="text-xl sm:text-2xl font-black text-slate-950"
                                >
                                    Runner Information
                                </h2>

                            </div>


                            {{-- Runner Icon --}}
                            <div
                                class="hidden sm:flex w-11 h-11 items-center justify-center rounded-xl bg-yellow-400 text-slate-950"
                            >

                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                                    />
                                </svg>

                            </div>

                        </div>

                    </div>


                    {{-- Runner Details --}}
                    <div class="p-6 sm:p-8">

                        <div
                            class="grid sm:grid-cols-2 gap-x-8 gap-y-8"
                        >


                            {{-- Full Name --}}
                            <div>

                                <p
                                    class="text-xs font-bold tracking-wider text-slate-400 uppercase mb-2"
                                >
                                    Full Name
                                </p>

                                <p
                                    class="text-base font-bold text-slate-950 break-words"
                                >
                                    {{ $payment->registration->nama }}
                                </p>

                            </div>


                            {{-- Email --}}
                            <div>

                                <p
                                    class="text-xs font-bold tracking-wider text-slate-400 uppercase mb-2"
                                >
                                    Email Address
                                </p>

                                <p
                                    class="text-base font-semibold text-slate-800 break-all"
                                >
                                    {{ $payment->registration->email }}
                                </p>

                            </div>


                            {{-- Phone --}}
                            <div>

                                <p
                                    class="text-xs font-bold tracking-wider text-slate-400 uppercase mb-2"
                                >
                                    Phone Number
                                </p>

                                <p
                                    class="text-base font-semibold text-slate-800"
                                >
                                    {{ $payment->registration->handphone }}
                                </p>

                            </div>


                            {{-- Category --}}
                            <div>

                                <p
                                    class="text-xs font-bold tracking-wider text-slate-400 uppercase mb-2"
                                >
                                    Race Category
                                </p>

                                <span
                                    class="inline-flex items-center px-3 py-1.5 rounded-lg bg-yellow-100 text-yellow-800 text-sm font-black"
                                >
                                    {{ $payment->registration->kategori }}
                                </span>

                            </div>


                            {{-- Jersey Size --}}
                            <div>

                                <p
                                    class="text-xs font-bold tracking-wider text-slate-400 uppercase mb-2"
                                >
                                    Jersey Size
                                </p>

                                <p
                                    class="text-base font-bold text-slate-950"
                                >
                                    {{ $payment->registration->ukuranJersey }}
                                </p>

                            </div>


                            {{-- Bib Name --}}
                            <div>

                                <p
                                    class="text-xs font-bold tracking-wider text-slate-400 uppercase mb-2"
                                >
                                    Bib Name
                                </p>

                                <span
                                    class="inline-flex items-center px-3 py-1.5 rounded-lg bg-slate-50 border border-slate-200 text-slate-900 text-sm font-black tracking-wider uppercase"
                                >
                                    {{ $payment->registration->namaBib }}
                                </span>

                            </div>


                        </div>

                    </div>

                </div>


                {{-- =================================================
                    ORDER SUMMARY
                ================================================== --}}
                <div
                    class="lg:col-span-5 bg-white border border-slate-200 border-t-4 border-t-yellow-400 rounded-2xl shadow-md overflow-hidden"
                >

                    {{-- Card Header --}}
                    <div
                        class="px-6 sm:px-8 py-6 border-b border-slate-100"
                    >

                        <div class="flex items-center justify-between gap-4">

                            <div>

                                <p
                                    class="text-xs font-bold tracking-[0.15em] text-yellow-600 uppercase mb-1"
                                >
                                    Payment
                                </p>

                                <h2
                                    class="text-xl sm:text-2xl font-black text-slate-950"
                                >
                                    Order Summary
                                </h2>

                            </div>


                            {{-- Cart Icon --}}
                            <div
                                class="w-10 h-10 flex items-center justify-center rounded-xl bg-yellow-100 text-yellow-700"
                            >

                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M16 11V7a4 4 0 00-8 0v4M5 11h14l1 12H4L5 11z"
                                    />
                                </svg>

                            </div>

                        </div>

                    </div>


                    {{-- Order Details --}}
                    <div class="p-6 sm:p-8">


                        <div class="space-y-5">


                            {{-- Order ID --}}
                            <div>

                                <p
                                    class="text-xs font-bold tracking-wider text-slate-400 uppercase mb-2"
                                >
                                    Order ID
                                </p>

                                <p
                                    class="font-mono text-sm font-bold text-slate-800 break-all"
                                >
                                    {{ $payment->order_id }}
                                </p>

                            </div>


                            {{-- Category --}}
                            <div
                                class="flex items-center justify-between gap-4"
                            >

                                <span class="text-sm text-slate-500">
                                    Race Category
                                </span>

                                <span class="text-sm font-bold text-slate-950">
                                    {{ $payment->registration->kategori }}
                                </span>

                            </div>


                            {{-- Registration Fee --}}
                            <div
                                class="flex items-center justify-between gap-4"
                            >

                                <span class="text-sm text-slate-500">
                                    Registration Fee
                                </span>

                                <span class="text-sm font-bold text-slate-950">
                                    Rp {{ number_format($payment->gross_amount, 0, ',', '.') }}
                                </span>

                            </div>


                            {{-- Divider --}}
                            <div
                                class="border-t border-dashed border-slate-200 pt-5"
                            >

                                <div
                                    class="flex items-end justify-between gap-4"
                                >

                                    <div>

                                        <p
                                            class="text-xs font-bold tracking-wider text-slate-400 uppercase"
                                        >
                                            Total Payment
                                        </p>

                                        <p
                                            class="mt-1 text-sm text-slate-500"
                                        >
                                            Registration fee
                                        </p>

                                    </div>


                                    <p
                                        class="text-2xl sm:text-3xl font-black text-slate-950 tracking-tight text-right"
                                    >
                                        Rp {{ number_format($payment->gross_amount, 0, ',', '.') }}
                                    </p>

                                </div>

                            </div>

                        </div>


                        {{-- =================================================
                            PAY BUTTON
                        ================================================== --}}
                        <div class="mt-8">

                            <button
                                id="pay-button"
                                type="button"
                                class="w-full bg-yellow-400 hover:bg-yellow-300 active:bg-yellow-500 disabled:bg-slate-200 disabled:text-slate-400 disabled:cursor-not-allowed text-slate-950 font-black text-base sm:text-lg uppercase tracking-wider py-4 px-6 rounded-xl transition-all duration-200 flex items-center justify-center gap-3 shadow-sm hover:shadow-md cursor-pointer"
                            >

                                <span id="button-text">
                                    Pay Now
                                </span>


                                {{-- Loading Spinner --}}
                                <svg
                                    id="button-spinner"
                                    class="hidden w-5 h-5 animate-spin"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                >

                                    <circle
                                        class="opacity-25"
                                        cx="12"
                                        cy="12"
                                        r="10"
                                        stroke="currentColor"
                                        stroke-width="4"
                                    ></circle>

                                    <path
                                        class="opacity-75"
                                        fill="currentColor"
                                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
                                    ></path>

                                </svg>

                            </button>

                        </div>


                        {{-- Security --}}
                        <div
                            class="mt-5 flex items-center justify-center gap-2"
                        >

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-4 h-4 text-slate-400"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"
                                />

                            </svg>

                            <p class="text-xs text-slate-400">

                                Secure payment powered by

                                <span class="font-bold text-slate-600">
                                    Midtrans
                                </span>

                            </p>

                        </div>

                    </div>

                </div>

            </div>


            {{-- =================================================
                FOOTER
            ================================================== --}}
            <div
                class="mt-12 pt-6 border-t border-slate-100"
            >

                <div
                    class="flex flex-col sm:flex-row items-center justify-between gap-3"
                >

                    <p
                        class="text-xs font-semibold text-slate-400 uppercase tracking-wider"
                    >
                        Pureofdistance Run 2026
                    </p>

                    <p class="text-xs text-slate-400">
                        Run your distance. Own your race.
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
        MIDTRANS SNAP
    ========================================================== --}}
    <script
        src="{{ config('midtrans.isProduction')
            ? 'https://app.midtrans.com/snap/snap.js'
            : 'https://app.sandbox.midtrans.com/snap/snap.js' }}"
        data-client-key="{{ config('midtrans.clientKey') }}">
    </script>


    {{-- =========================================================
        PAYMENT SCRIPT
    ========================================================== --}}
    <script>

        const paymentStatusUrl = @json(url('/payment/status'));

        const snapToken = @json($snapToken);

        const payButton = document.getElementById('pay-button');

        const buttonText = document.getElementById('button-text');

        const buttonSpinner = document.getElementById('button-spinner');


        /*
        |--------------------------------------------------------------------------
        | Reset Button
        |--------------------------------------------------------------------------
        */

        function resetPayButton() {

            payButton.disabled = false;

            buttonText.textContent = 'Pay Now';

            buttonSpinner.classList.add('hidden');

        }


        /*
        |--------------------------------------------------------------------------
        | Loading Button
        |--------------------------------------------------------------------------
        */

        function setPayButtonLoading() {

            payButton.disabled = true;

            buttonText.textContent = 'Processing...';

            buttonSpinner.classList.remove('hidden');

        }


        /*
        |--------------------------------------------------------------------------
        | Redirect To Payment Status
        |--------------------------------------------------------------------------
        */

        function redirectToStatus(result) {

            if (!result || !result.order_id) {

                resetPayButton();

                alert('Order ID not found.');

                return;

            }


            window.location.href =
                paymentStatusUrl +
                '/' +
                encodeURIComponent(result.order_id);

        }


        /*
        |--------------------------------------------------------------------------
        | Pay Button
        |--------------------------------------------------------------------------
        */

        payButton.addEventListener('click', function () {

            setPayButtonLoading();


            if (!snapToken) {

                resetPayButton();

                alert('Payment token is not available.');

                return;

            }


            snap.pay(snapToken, {

                onSuccess: function (result) {

                    redirectToStatus(result);

                },


                onPending: function (result) {

                    redirectToStatus(result);

                },


                onError: function (result) {

                    redirectToStatus(result);

                },


                onClose: function () {

                    resetPayButton();

                }

            });

        });

    </script>

</x-layouts.main>