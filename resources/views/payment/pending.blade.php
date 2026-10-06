<x-layouts.main>

    <x-slot:title>
        Payment Pending | Pureofdistance Run 2026
    </x-slot>


    {{-- =========================================================
        PAYMENT PENDING PAGE
    ========================================================== --}}
    <section
        class="min-h-screen bg-white pt-28 sm:pt-32 lg:pt-36 pb-16 px-4 sm:px-6 lg:px-8 selection:bg-yellow-400 selection:text-slate-950"
    >

        <div class="max-w-2xl mx-auto">


            {{-- =================================================
                EVENT LABEL
            ================================================== --}}
            <div class="flex items-center justify-center gap-3 mb-8">

                <span class="w-8 h-1 bg-yellow-400 rounded-full"></span>

                <span
                    class="text-xs sm:text-sm font-extrabold tracking-[0.18em] text-slate-900 uppercase"
                >
                    Pureofdistance Run 2026
                </span>

                <span class="w-8 h-1 bg-yellow-400 rounded-full"></span>

            </div>


            {{-- =================================================
                MAIN CARD
            ================================================== --}}
            <div
                class="bg-white border border-slate-200 border-t-4 border-t-yellow-400 rounded-2xl shadow-md overflow-hidden"
            >

                {{-- =================================================
                    STATUS HEADER
                ================================================== --}}
                <div class="px-6 sm:px-10 pt-10 pb-8 text-center">

                    {{-- Pending Icon --}}
                    <div
                        class="mx-auto w-16 h-16 sm:w-20 sm:h-20 flex items-center justify-center rounded-2xl bg-yellow-100 text-yellow-600 mb-6"
                    >

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-9 h-9 sm:w-10 sm:h-10"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"
                            />
                        </svg>

                    </div>


                    {{-- Status Label --}}
                    <p
                        class="text-xs font-bold tracking-[0.2em] text-yellow-600 uppercase mb-2"
                    >
                        Payment Status
                    </p>


                    <h1
                        class="text-3xl sm:text-4xl font-black tracking-tight text-slate-950"
                    >
                        Payment Pending
                    </h1>


                    <p
                        class="mt-4 text-sm sm:text-base text-slate-500 leading-relaxed max-w-md mx-auto"
                    >
                        Hi {{ $order->nama }}, your payment is still waiting
                        for confirmation.
                    </p>

                </div>


                {{-- =================================================
                    ORDER INFORMATION
                ================================================== --}}
                <div class="px-6 sm:px-10 pb-8">

                    <div
                        class="bg-slate-50 border border-slate-200 rounded-xl p-5 sm:p-6"
                    >

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
                                    {{ $order->order_id }}
                                </p>

                            </div>


                            {{-- Amount --}}
                            <div
                                class="flex items-center justify-between gap-4"
                            >

                                <span class="text-sm text-slate-500">
                                    Amount
                                </span>

                                <span
                                    class="text-base font-black text-slate-950 text-right"
                                >
                                    Rp {{ number_format($order->gross_amount, 0, ',', '.') }}
                                </span>

                            </div>


                            {{-- Payment Method --}}
                            @if($order->payment_type)
                                <div
                                    class="flex items-center justify-between gap-4"
                                >

                                    <span class="text-sm text-slate-500">
                                        Payment Method
                                    </span>

                                    <span
                                        class="text-sm font-bold text-slate-950 text-right capitalize"
                                    >
                                        {{ $order->payment_type }}
                                    </span>

                                </div>
                            @endif


                            {{-- Expired --}}
                            @if($order->expired_at)

                                <div
                                    class="border-t border-dashed border-slate-200 pt-5"
                                >

                                    <div
                                        class="flex items-center justify-between gap-4"
                                    >

                                        <span class="text-sm text-slate-500">
                                            Payment Expires
                                        </span>

                                        <span
                                            class="text-sm font-bold text-slate-950 text-right"
                                        >
                                            {{ $order->expired_at }}
                                        </span>

                                    </div>

                                </div>

                            @endif


                        </div>

                    </div>


                    {{-- =================================================
                        INFORMATION
                    ================================================== --}}
                    <div
                        class="mt-6 flex items-start gap-3 p-4 rounded-xl bg-yellow-50 border border-yellow-100"
                    >

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5 text-yellow-600 flex-shrink-0 mt-0.5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M13 16h-1v-4h-1m1-4h.01M12 20a8 8 0 100-16 8 8 0 000 16z"
                            />
                        </svg>

                        <p
                            class="text-sm text-slate-600 leading-relaxed"
                        >
                            Please complete your payment if you haven't
                            already. Your payment status will be updated
                            after Midtrans confirms the transaction.
                        </p>

                    </div>


                    {{-- =================================================
                        ACTION
                    ================================================== --}}
                    <div class="mt-8">

                        <a
                            href="{{ route('home') }}"
                            class="w-full inline-flex items-center justify-center gap-2 bg-yellow-400 hover:bg-yellow-300 active:bg-yellow-500 text-slate-950 font-black text-base uppercase tracking-wider py-4 px-6 rounded-xl transition-all duration-200 shadow-sm hover:shadow-md"
                        >

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-5 h-5"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0h6"
                                />
                            </svg>

                            Back Home

                        </a>

                    </div>


                    {{-- =================================================
                        SECURITY / FOOTER
                    ================================================== --}}
                    <div
                        class="mt-6 flex items-center justify-center gap-2"
                    >

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-4 h-4 text-slate-400"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"
                            />
                        </svg>

                        <p class="text-xs text-slate-400">
                            Payment secured by
                            <span class="font-bold text-slate-600">
                                Midtrans
                            </span>
                        </p>

                    </div>

                </div>

            </div>


            {{-- =================================================
                FOOTER
            ================================================== --}}
            <div
                class="mt-8 pt-6 border-t border-slate-100"
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

</x-layouts.main>