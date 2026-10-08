<x-layouts.main>

<x-slot:title>
    Payment Pending | Pureofdistance Run 2026
</x-slot>


<section
    class="min-h-screen bg-white pt-28 sm:pt-32 lg:pt-36 pb-20 px-4 sm:px-6 lg:px-8 selection:bg-yellow-400 selection:text-slate-950"
>

    <div class="max-w-xl mx-auto">


        {{-- =========================================================
            EVENT BRAND
        ========================================================== --}}
        <div class="flex items-center justify-center gap-3 mb-10">

            <span class="w-6 h-px bg-yellow-400"></span>

            <span
                class="text-[11px] sm:text-xs font-bold tracking-[0.22em] uppercase text-slate-500"
            >
                Pureofdistance Run 2026
            </span>

            <span class="w-6 h-px bg-yellow-400"></span>

        </div>


        {{-- =========================================================
            MAIN CARD
        ========================================================== --}}
        <div
            class="bg-white border border-slate-200 rounded-3xl shadow-[0_8px_40px_rgba(15,23,42,0.06)] overflow-hidden"
        >


            {{-- =================================================
                STATUS
            ================================================== --}}
            <div
                class="px-6 sm:px-10 pt-10 sm:pt-12 pb-8 text-center"
            >

                {{-- Status Icon --}}
                <div
                    class="mx-auto w-16 h-16 flex items-center justify-center rounded-full bg-yellow-50 border border-yellow-100 text-yellow-600 mb-6"
                >

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="w-8 h-8"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M12 8v4l2.5 2.5m6.5-2.5a9 9 0 11-18 0 9 9 0 0118 0z"
                        />
                    </svg>

                </div>


                {{-- Eyebrow --}}
                <p
                    class="text-[11px] font-bold tracking-[0.2em] uppercase text-yellow-600 mb-3"
                >
                    Payment Status
                </p>


                <h1
                    class="text-3xl sm:text-4xl font-black tracking-tight text-slate-950"
                >
                    Payment Pending
                </h1>


                <p
                    class="mt-4 max-w-md mx-auto text-sm sm:text-base leading-relaxed text-slate-500"
                >
                    Hi {{ $order->nama }}, your payment hasn't been
                    completed yet. Continue your payment to secure your
                    registration.
                </p>

            </div>


            {{-- =================================================
                ORDER SUMMARY
            ================================================== --}}
            <div class="px-6 sm:px-10 pb-8">

                <div
                    class="rounded-2xl border border-slate-200 overflow-hidden"
                >

                    {{-- Order ID --}}
                    <div
                        class="px-5 sm:px-6 py-5 border-b border-slate-100"
                    >

                        <p
                            class="text-[10px] font-bold tracking-[0.16em] uppercase text-slate-400 mb-2"
                        >
                            Order ID
                        </p>

                        <p
                            class="font-mono text-sm font-semibold text-slate-800 break-all"
                        >
                            {{ $order->order_id }}
                        </p>

                    </div>


                    {{-- Amount --}}
                    <div
                        class="px-5 sm:px-6 py-5 flex items-center justify-between gap-6 border-b border-slate-100"
                    >

                        <span class="text-sm text-slate-500">
                            Amount
                        </span>

                        <span
                            class="text-lg font-black text-slate-950 text-right"
                        >
                            Rp {{ number_format($order->gross_amount, 0, ',', '.') }}
                        </span>

                    </div>


                    {{-- Payment Method --}}
                    @if($order->payment_type)

                        <div
                            class="px-5 sm:px-6 py-5 flex items-center justify-between gap-6 border-b border-slate-100"
                        >

                            <span class="text-sm text-slate-500">
                                Payment Method
                            </span>

                            <span
                                class="text-sm font-bold text-slate-900 text-right capitalize"
                            >
                                {{ $order->payment_type }}
                            </span>

                        </div>

                    @endif


                    {{-- Expiration --}}
                    @if($order->expired_at)

                        <div
                            class="px-5 sm:px-6 py-5 flex items-center justify-between gap-6"
                        >

                            <span class="text-sm text-slate-500">
                                Payment Expires
                            </span>

                            <span
                                class="text-sm font-semibold text-slate-900 text-right"
                            >
                                {{ $order->expired_at }}
                            </span>

                        </div>

                    @endif

                </div>


                {{-- =================================================
                    PAYMENT NOTICE
                ================================================== --}}
                <div
                    class="mt-6 flex items-start gap-3"
                >

                    <div
                        class="flex-shrink-0 mt-0.5 text-yellow-500"
                    >

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.8"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 9v3m0 4h.01M10.29 3.86l-8.02 14A2 2 0 003.99 21h16.02a2 2 0 001.72-3.14l-8.02-14a2 2 0 00-3.42 0z"
                            />
                        </svg>

                    </div>

                    <p
                        class="text-xs sm:text-sm text-slate-500 leading-relaxed"
                    >
                        Your registration will remain pending until
                        Midtrans confirms the payment. Please complete
                        the payment before it expires.
                    </p>

                </div>


                {{-- =================================================
                    PRIMARY CTA
                ================================================== --}}
                <div class="mt-8">

                    <a
                        href="{{ route('checkout.show', ['orderId' => $order->order_id]) }}"
                        class="group w-full inline-flex items-center justify-center gap-3 bg-yellow-400 hover:bg-yellow-300 active:bg-yellow-500 text-slate-950 font-extrabold text-sm sm:text-base uppercase tracking-[0.12em] py-4 px-6 rounded-2xl transition-all duration-200 shadow-sm hover:shadow-lg hover:-translate-y-0.5"
                    >

                        <span>
                            Continue Payment
                        </span>

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5 transition-transform duration-200 group-hover:translate-x-1"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.8"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M5 12h14m-6-6l6 6-6 6"
                            />
                        </svg>

                    </a>

                </div>


                {{-- =================================================
                    SECONDARY CTA
                ================================================== --}}
                <div class="mt-3">

                    <a
                        href="{{ route('home') }}"
                        class="w-full inline-flex items-center justify-center text-sm font-semibold text-slate-500 hover:text-slate-950 py-3 rounded-xl transition-colors duration-200"
                    >
                        Back to Home
                    </a>

                </div>


                {{-- =================================================
                    SECURE PAYMENT
                ================================================== --}}
                <div
                    class="mt-5 flex items-center justify-center gap-2"
                >

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="w-3.5 h-3.5 text-slate-400"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"
                        />
                    </svg>

                    <p class="text-[11px] text-slate-400">
                        Secure payment powered by
                        <span class="font-semibold text-slate-600">
                            Midtrans
                        </span>
                    </p>

                </div>

            </div>

        </div>


        {{-- =========================================================
            PAGE FOOTER
        ========================================================== --}}
        <div class="mt-8 text-center">

            <p
                class="text-[11px] font-semibold tracking-[0.16em] uppercase text-slate-400"
            >
                Run your distance. Own your race.
            </p>

        </div>

    </div>

</section>

</x-layouts.main>
