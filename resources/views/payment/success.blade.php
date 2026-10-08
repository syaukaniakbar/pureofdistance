<x-layouts.main>

    <x-slot:title>
        Payment Success | Pureofdistance Run 2026
    </x-slot:title>


    <section
        class="relative min-h-screen bg-white pt-28 sm:pt-32 lg:pt-36 pb-20 px-4 sm:px-6 lg:px-8 selection:bg-yellow-400 selection:text-slate-950"
    >

        <div class="max-w-4xl mx-auto">


            {{-- =========================================================
                EVENT BRAND
            ========================================================== --}}
            <div class="flex items-center justify-center gap-3 mb-10">

                <span class="w-8 h-px bg-yellow-400"></span>

                <span
                    class="text-[11px] sm:text-xs font-bold tracking-[0.22em] uppercase text-slate-500"
                >
                    Pureofdistance Run 2026
                </span>

                <span class="w-8 h-px bg-yellow-400"></span>

            </div>


            {{-- =========================================================
                MAIN CARD
            ========================================================== --}}
            <div
                class="bg-white border border-slate-200 rounded-[2rem] shadow-[0_12px_50px_rgba(15,23,42,0.07)] overflow-hidden"
            >


                {{-- =================================================
                    SUCCESS HEADER
                ================================================== --}}
                <div
                    class="relative px-6 sm:px-10 lg:px-14 pt-12 sm:pt-14 pb-10 text-center border-b border-slate-100"
                >

                    {{-- Decorative background --}}
                    <div
                        class="absolute top-0 left-1/2 -translate-x-1/2 w-40 h-40 bg-yellow-300/20 blur-3xl rounded-full pointer-events-none"
                    ></div>


                    {{-- Success Icon --}}
                    <div class="relative flex justify-center">

                        <div
                            class="w-20 h-20 sm:w-24 sm:h-24 rounded-full bg-yellow-50 border border-yellow-200 flex items-center justify-center"
                        >

                            <div
                                class="w-14 h-14 sm:w-16 sm:h-16 rounded-full bg-yellow-400 flex items-center justify-center shadow-[0_8px_25px_rgba(250,204,21,0.35)]"
                            >

                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-7 h-7 sm:w-8 sm:h-8 text-slate-950"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="2.5"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M5 13l4 4L19 7"
                                    />
                                </svg>

                            </div>

                        </div>

                    </div>


                    {{-- Status --}}
                    <div class="relative mt-7">

                        <p
                            class="text-[11px] sm:text-xs font-bold tracking-[0.2em] uppercase text-yellow-600 mb-3"
                        >
                            Payment Confirmed
                        </p>

                        <h1
                            class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight text-slate-950"
                        >
                            Payment Successful
                        </h1>

                        <p
                            class="mt-4 max-w-xl mx-auto text-sm sm:text-base leading-relaxed text-slate-500"
                        >
                            Thank you for registering for
                            <span class="font-semibold text-slate-800">
                                Pureofdistance Run 2026
                            </span>.
                            Your registration has been successfully confirmed.
                        </p>

                    </div>

                </div>


                {{-- =================================================
                    CONTENT
                ================================================== --}}
                <div class="px-6 sm:px-10 lg:px-14 py-10">


                    {{-- =================================================
                        REGISTRATION INFORMATION
                    ================================================== --}}
                    <div>

                        <div class="flex items-center justify-between gap-4 mb-6">

                            <div>

                                <p
                                    class="text-[10px] font-bold tracking-[0.18em] uppercase text-yellow-600 mb-1"
                                >
                                    Runner Profile
                                </p>

                                <h2
                                    class="text-xl sm:text-2xl font-black text-slate-950"
                                >
                                    Registration Information
                                </h2>

                            </div>


                            {{-- Confirmed Badge --}}
                            <div
                                class="hidden sm:flex items-center gap-2 px-3 py-1.5 rounded-full bg-yellow-50 border border-yellow-100"
                            >

                                <span
                                    class="w-1.5 h-1.5 rounded-full bg-yellow-500"
                                ></span>

                                <span
                                    class="text-[10px] font-bold tracking-wider uppercase text-yellow-700"
                                >
                                    Confirmed
                                </span>

                            </div>

                        </div>


                        <div
                            class="grid sm:grid-cols-2 gap-x-8 gap-y-6 p-6 sm:p-7 rounded-2xl bg-slate-50 border border-slate-100"
                        >

                            {{-- Full Name --}}
                            <div>

                                <p
                                    class="text-[10px] font-bold tracking-[0.15em] uppercase text-slate-400 mb-2"
                                >
                                    Full Name
                                </p>

                                <p
                                    class="text-sm sm:text-base font-bold text-slate-900"
                                >
                                    {{ $order->registration->nama }}
                                </p>

                            </div>


                            {{-- Email --}}
                            <div>

                                <p
                                    class="text-[10px] font-bold tracking-[0.15em] uppercase text-slate-400 mb-2"
                                >
                                    Email
                                </p>

                                <p
                                    class="text-sm sm:text-base font-bold text-slate-900 break-all"
                                >
                                    {{ $order->registration->email }}
                                </p>

                            </div>


                            {{-- Phone --}}
                            <div>

                                <p
                                    class="text-[10px] font-bold tracking-[0.15em] uppercase text-slate-400 mb-2"
                                >
                                    Phone
                                </p>

                                <p
                                    class="text-sm sm:text-base font-bold text-slate-900"
                                >
                                    {{ $order->registration->handphone }}
                                </p>

                            </div>


                            {{-- Category --}}
                            <div>

                                <p
                                    class="text-[10px] font-bold tracking-[0.15em] uppercase text-slate-400 mb-2"
                                >
                                    Race Category
                                </p>

                                <p
                                    class="text-sm sm:text-base font-bold text-slate-900"
                                >
                                    {{ $order->registration->kategori }}
                                </p>

                            </div>


                            {{-- Jersey --}}
                            <div>

                                <p
                                    class="text-[10px] font-bold tracking-[0.15em] uppercase text-slate-400 mb-2"
                                >
                                    Jersey Size
                                </p>

                                <p
                                    class="text-sm sm:text-base font-bold text-slate-900"
                                >
                                    {{ $order->registration->ukuranJersey }}
                                </p>

                            </div>


                            {{-- Bib --}}
                            <div>

                                <p
                                    class="text-[10px] font-bold tracking-[0.15em] uppercase text-slate-400 mb-2"
                                >
                                    Bib Name
                                </p>

                                <p
                                    class="text-sm sm:text-base font-bold text-slate-900"
                                >
                                    {{ $order->registration->namaBib }}
                                </p>

                            </div>

                        </div>

                    </div>


                    {{-- Divider --}}
                    <div class="my-10 border-t border-slate-100"></div>


                    {{-- =================================================
                        PAYMENT INFORMATION
                    ================================================== --}}
                    <div>

                        <div class="mb-6">

                            <p
                                class="text-[10px] font-bold tracking-[0.18em] uppercase text-yellow-600 mb-1"
                            >
                                Transaction
                            </p>

                            <h2
                                class="text-xl sm:text-2xl font-black text-slate-950"
                            >
                                Payment Details
                            </h2>

                        </div>


                        <div
                            class="rounded-2xl border border-slate-200 overflow-hidden"
                        >

                            {{-- Order ID --}}
                            <div
                                class="px-5 sm:px-6 py-5 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2 border-b border-slate-100"
                            >

                                <span class="text-sm text-slate-500">
                                    Order ID
                                </span>

                                <span
                                    class="font-mono text-sm font-bold text-slate-900 break-all sm:text-right"
                                >
                                    {{ $order->order_id }}
                                </span>

                            </div>


                            {{-- Transaction ID --}}
                            <div
                                class="px-5 sm:px-6 py-5 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2 border-b border-slate-100"
                            >

                                <span class="text-sm text-slate-500">
                                    Transaction ID
                                </span>

                                <span
                                    class="font-mono text-sm font-bold text-slate-900 break-all sm:text-right"
                                >
                                    {{ $order->transaction_id ?? '-' }}
                                </span>

                            </div>


                            {{-- Payment Method --}}
                            <div
                                class="px-5 sm:px-6 py-5 flex items-center justify-between gap-6 border-b border-slate-100"
                            >

                                <span class="text-sm text-slate-500">
                                    Payment Method
                                </span>

                                <span
                                    class="text-sm font-bold text-slate-900 uppercase text-right"
                                >
                                    {{ $order->payment_type ?? '-' }}
                                </span>

                            </div>


                            {{-- Amount --}}
                            <div
                                class="px-5 sm:px-6 py-5 flex items-center justify-between gap-6 border-b border-slate-100"
                            >

                                <span class="text-sm text-slate-500">
                                    Amount
                                </span>

                                <span
                                    class="text-sm sm:text-base font-black text-slate-950 text-right"
                                >
                                    Rp {{ number_format($order->gross_amount, 0, ',', '.') }}
                                </span>

                            </div>


                            {{-- Status --}}
                            <div
                                class="px-5 sm:px-6 py-5 flex items-center justify-between gap-6 border-b border-slate-100"
                            >

                                <span class="text-sm text-slate-500">
                                    Status
                                </span>

                                <span
                                    class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-yellow-50 border border-yellow-100 text-yellow-700 text-[11px] font-extrabold tracking-wider uppercase"
                                >

                                    <span
                                        class="w-1.5 h-1.5 rounded-full bg-yellow-500"
                                    ></span>

                                    Paid

                                </span>

                            </div>


                            {{-- Paid At --}}
                            <div
                                class="px-5 sm:px-6 py-5 flex items-center justify-between gap-6"
                            >

                                <span class="text-sm text-slate-500">
                                    Paid At
                                </span>

                                <span
                                    class="text-sm font-bold text-slate-900 text-right"
                                >
                                    {{ optional($order->paid_at)->format('d M Y H:i') ?? '-' }}
                                </span>

                            </div>

                        </div>

                    </div>


                    {{-- =================================================
                        EMAIL NOTICE
                    ================================================== --}}
                    <div
                        class="mt-8 p-5 sm:p-6 rounded-2xl bg-yellow-50 border border-yellow-100"
                    >

                        <div class="flex items-start gap-4">

                            <div
                                class="flex-shrink-0 w-10 h-10 rounded-xl bg-yellow-400 flex items-center justify-center"
                            >

                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5 text-slate-950"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M3 8l9 6 9-6M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                                    />
                                </svg>

                            </div>


                            <div class="min-w-0">

                                <p
                                    class="text-sm font-bold text-slate-900"
                                >
                                    Confirmation email sent
                                </p>

                                <p
                                    class="mt-1 text-sm text-slate-600 leading-relaxed"
                                >
                                    Your payment confirmation and race
                                    information have been sent to
                                    <span class="font-semibold text-slate-900 break-all">
                                        {{ $order->registration->email }}
                                    </span>.
                                </p>

                            </div>

                        </div>

                    </div>


                    {{-- =================================================
                        CTA
                    ================================================== --}}
                    <div class="mt-8 text-center">

                        <a
                            href="{{ route('home') }}"
                            class="group inline-flex items-center justify-center gap-3 w-full sm:w-auto min-w-[220px] bg-yellow-400 hover:bg-yellow-300 active:bg-yellow-500 text-slate-950 font-extrabold text-sm uppercase tracking-[0.12em] py-4 px-8 rounded-2xl transition-all duration-200 shadow-sm hover:shadow-lg hover:-translate-y-0.5"
                        >

                            <span>
                                Back to Home
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
                        SECURE PAYMENT
                    ================================================== --}}
                    <div
                        class="mt-6 flex items-center justify-center gap-2"
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
                            Payment securely processed by
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