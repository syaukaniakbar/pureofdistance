
<x-layouts.main>
    <x-slot:title>About Us</x-slot>

    {{-- =========================================================
        ABOUT HERO
    ========================================================== --}}
    <section class="relative overflow-hidden bg-black text-white">

        {{-- Decorative Elements --}}
        <div
            aria-hidden="true"
            class="pointer-events-none absolute -right-20 -top-20 h-72 w-72 rounded-full border-[40px] border-[#F5C400]/10"
        ></div>

        <div
            aria-hidden="true"
            class="pointer-events-none absolute -bottom-32 -left-24 h-80 w-80 rounded-full border-[48px] border-white/5"
        ></div>

        <div class="relative mx-auto max-w-[1312px] px-6 pb-20 pt-32 md:px-16 md:pb-28 md:pt-40">

            <div class="max-w-4xl">

                <div class="flex items-center gap-3">
                    <span class="h-2 w-2 rounded-full bg-[#F5C400]"></span>

                    <span class="text-xs font-black uppercase tracking-[0.25em] text-[#F5C400]">
                        About P.O.D
                    </span>
                </div>

                <h1
                    class="mt-6 text-4xl font-black leading-[0.95] tracking-tight sm:text-5xl md:text-7xl"
                >
                    Discover the Joy of
                    <span class="block text-[#F5C400]">
                        Running Together.
                    </span>
                </h1>

                <p class="mt-8 max-w-2xl text-base leading-relaxed text-white/65 md:text-lg">
                    POD brings people together through movement, community,
                    and the simple joy of running.
                </p>

            </div>

        </div>
    </section>


    {{-- =========================================================
        ABOUT INTRO
    ========================================================== --}}
    <section class="bg-white">

        <div class="mx-auto max-w-[1312px] px-6 py-16 md:px-16 md:py-24">

            <div class="grid gap-12 lg:grid-cols-[0.9fr_1.1fr] lg:items-center lg:gap-24">

                {{-- Heading --}}
                <div>

                    <div class="flex items-center gap-3">
                        <span class="h-2 w-2 rounded-full bg-neutral-950"></span>

                        <span class="text-xs font-black uppercase tracking-[0.2em]">
                            The Event
                        </span>
                    </div>

                    <h2 class="mt-6 text-3xl font-black leading-tight tracking-tight md:text-5xl">
                        One route.
                        <span class="block">
                            One community.
                        </span>
                        <span class="block text-[#F5C400]">
                            One shared experience.
                        </span>
                    </h2>

                </div>


                {{-- Description --}}
                <div class="space-y-6 text-base leading-relaxed text-neutral-600 md:text-lg">

                    <p>
                        POD Run is a community running event created around
                        the joy of moving together.
                    </p>

                    <p>
                        Whether you're an experienced runner or simply looking
                        for an active morning, the event offers a simple
                        <strong class="text-neutral-950">5K route</strong>
                        where everyone can enjoy the atmosphere and experience
                        the energy of running together.
                    </p>

                    <p class="font-semibold text-neutral-950">
                        Come for the run. Stay for the community.
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
        EVENT IMAGE
    ========================================================== --}}
    <section class="bg-neutral-100">

        <div class="mx-auto max-w-[1312px] px-6 py-8 md:px-16 md:py-12">

            <div class="relative overflow-hidden rounded-2xl">

                <img
                    src="{{ asset('gallery/image_6.jpeg') }}"
                    alt="People running together"
                    class="h-[320px] w-full object-cover sm:h-[420px] md:h-[560px]"
                >

                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent"
                ></div>

                <div class="absolute bottom-0 left-0 p-6 md:p-10">

                    <p class="text-xs font-black uppercase tracking-[0.2em] text-[#F5C400]">
                        Running Together
                    </p>

                    <p class="mt-2 max-w-2xl text-2xl font-black leading-tight text-white md:text-4xl">
                        More than a route.
                        It's a shared experience.
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
        EVENT DETAILS
    ========================================================== --}}
    <section class="bg-white">

        <div class="mx-auto max-w-[1312px] px-6 py-16 md:px-16 md:py-24">

            <div class="mb-10">

                <div class="flex items-center gap-3">
                    <span class="h-2 w-2 rounded-full bg-[#F5C400]"></span>

                    <span class="text-xs font-black uppercase tracking-[0.2em]">
                        Event Details
                    </span>
                </div>

                <h2 class="mt-5 text-3xl font-black tracking-tight md:text-5xl">
                    Everything you need to know.
                </h2>

            </div>


            <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">

                {{-- Date --}}
                <div
                    class="rounded-2xl border border-neutral-200 p-6 transition-all duration-200 hover:-translate-y-1 hover:border-[#F5C400] hover:shadow-lg"
                >

                    <div class="flex h-12 w-12 items-center justify-center rounded-full bg-[#F5C400]">

                        <svg
                            class="h-5 w-5"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                            />
                        </svg>

                    </div>

                    <p class="mt-6 text-[10px] font-black uppercase tracking-[0.2em] text-neutral-400">
                        Date
                    </p>

                    <p class="mt-2 text-lg font-black">
                        Saturday
                    </p>

                    <p class="text-sm text-neutral-500">
                        16 August 2025
                    </p>

                </div>


                {{-- Time --}}
                <div
                    class="rounded-2xl border border-neutral-200 p-6 transition-all duration-200 hover:-translate-y-1 hover:border-[#F5C400] hover:shadow-lg"
                >

                    <div class="flex h-12 w-12 items-center justify-center rounded-full bg-[#F5C400]">

                        <svg
                            class="h-5 w-5"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"
                            />
                        </svg>

                    </div>

                    <p class="mt-6 text-[10px] font-black uppercase tracking-[0.2em] text-neutral-400">
                        Start Time
                    </p>

                    <p class="mt-2 text-lg font-black">
                        6:00 AM
                    </p>

                    <p class="text-sm text-neutral-500">
                        Start Your Run
                    </p>

                </div>


                {{-- Route --}}
                <div
                    class="rounded-2xl border border-neutral-200 p-6 transition-all duration-200 hover:-translate-y-1 hover:border-[#F5C400] hover:shadow-lg"
                >

                    <div class="flex h-12 w-12 items-center justify-center rounded-full bg-[#F5C400]">

                        <svg
                            class="h-5 w-5"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"
                            />
                        </svg>

                    </div>

                    <p class="mt-6 text-[10px] font-black uppercase tracking-[0.2em] text-neutral-400">
                        Route
                    </p>

                    <p class="mt-2 text-lg font-black">
                        5K Route
                    </p>

                    <p class="text-sm text-neutral-500">
                        Community Run
                    </p>

                </div>


                {{-- Location --}}
                <div
                    class="rounded-2xl border border-neutral-200 p-6 transition-all duration-200 hover:-translate-y-1 hover:border-[#F5C400] hover:shadow-lg"
                >

                    <div class="flex h-12 w-12 items-center justify-center rounded-full bg-[#F5C400]">

                        <svg
                            class="h-5 w-5"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.243-4.243a8 8 0 1111.314 0z"
                            />

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"
                            />
                        </svg>

                    </div>

                    <p class="mt-6 text-[10px] font-black uppercase tracking-[0.2em] text-neutral-400">
                        Location
                    </p>

                    <p class="mt-2 text-lg font-black">
                        POD Village - Tigris
                    </p>

                    <p class="text-sm text-neutral-500">
                        Samarinda 75117
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
        ROUTE SECTION
    ========================================================== --}}
    <section class="bg-neutral-100">

        <div class="mx-auto max-w-[1312px] px-6 py-16 md:px-16 md:py-24">

            <div class="grid gap-10 lg:grid-cols-[0.7fr_1.3fr] lg:items-center lg:gap-20">

                <div>

                    <div class="flex items-center gap-3">
                        <span class="h-2 w-2 rounded-full bg-neutral-950"></span>

                        <span class="text-xs font-black uppercase tracking-[0.2em]">
                            5K Route
                        </span>
                    </div>

                    <h2 class="mt-5 text-3xl font-black leading-tight md:text-5xl">
                        Know the route.
                        <span class="block text-[#F5C400]">
                            Enjoy the run.
                        </span>
                    </h2>

                    <p class="mt-6 leading-relaxed text-neutral-600">
                        Take a look at the POD Run route and get familiar with
                        the course before the event.
                    </p>

                    <a
                        href="https://maps.google.com/?q=POD+Village+Tigris+Samarinda+75117"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="mt-8 inline-flex items-center gap-3 rounded-lg bg-black px-5 py-3 text-sm font-black text-white transition-colors hover:bg-neutral-800 focus:outline-none focus:ring-2 focus:ring-[#F5C400] focus:ring-offset-2"
                    >
                        Get Directions

                        <span aria-hidden="true">
                            →
                        </span>
                    </a>

                </div>


                <div class="overflow-hidden rounded-2xl border border-neutral-200 bg-white p-2 shadow-sm">

                    <img
                        src="{{ asset('images/Rute-POD.png') }}"
                        alt="POD Run 5K route"
                        class="h-auto w-full rounded-xl object-contain"
                    >

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
        RUNNER INFORMATION
    ========================================================== --}}
    <section class="bg-white">

        <div class="mx-auto max-w-[1312px] px-6 py-16 md:px-16 md:py-24">

            <div class="grid gap-12 lg:grid-cols-2 lg:items-center">

                <div>

                    <div class="flex items-center gap-3">
                        <span class="h-2 w-2 rounded-full bg-[#F5C400]"></span>

                        <span class="text-xs font-black uppercase tracking-[0.2em]">
                            Runner Info
                        </span>
                    </div>

                    <h2 class="mt-5 text-3xl font-black leading-tight md:text-5xl">
                        Come ready to run.
                    </h2>

                    <p class="mt-6 max-w-xl leading-relaxed text-neutral-600">
                        POD Run keeps things simple. Get ready, show up,
                        and enjoy the experience with fellow runners.
                    </p>

                </div>


                <div class="grid gap-4 sm:grid-cols-2">

                    {{-- Free Registration --}}
                    <div class="rounded-2xl bg-black p-6 text-white">

                        <p class="text-xs font-black uppercase tracking-[0.2em] text-[#F5C400]">
                            Registration
                        </p>

                        <p class="mt-4 text-xl font-black">
                            Free For All Runners
                        </p>

                    </div>


                    {{-- Jersey --}}
                    <div class="rounded-2xl border border-neutral-200 p-6">

                        <p class="text-xs font-black uppercase tracking-[0.2em] text-neutral-400">
                            Jersey Code
                        </p>

                        <p class="mt-4 text-xl font-black">
                            PA.CE
                        </p>

                        <p class="mt-1 text-sm text-neutral-500">
                            Black / White
                        </p>

                    </div>


                    {{-- Distance --}}
                    <div class="rounded-2xl border border-neutral-200 p-6">

                        <p class="text-xs font-black uppercase tracking-[0.2em] text-neutral-400">
                            Distance
                        </p>

                        <p class="mt-4 text-xl font-black">
                            5 KM
                        </p>

                        <p class="mt-1 text-sm text-neutral-500">
                            Community Route
                        </p>

                    </div>


                    {{-- Location --}}
                    <div class="rounded-2xl border border-neutral-200 p-6">

                        <p class="text-xs font-black uppercase tracking-[0.2em] text-neutral-400">
                            Venue
                        </p>

                        <p class="mt-4 text-xl font-black">
                            POD Village
                        </p>

                        <p class="mt-1 text-sm text-neutral-500">
                            Tigris · Samarinda
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
    CONTACT CTA
========================================================= --}}
<section class="relative overflow-hidden bg-black py-20 md:py-28">

    {{-- Decorative Background --}}
    <div
        aria-hidden="true"
        class="pointer-events-none absolute -right-32 -top-32 h-96 w-96 rounded-full border-[60px] border-[#F5C400]/10"
    ></div>

    <div
        aria-hidden="true"
        class="pointer-events-none absolute -bottom-40 -left-32 h-[28rem] w-[28rem] rounded-full border-[70px] border-white/5"
    ></div>

    <div
        aria-hidden="true"
        class="pointer-events-none absolute right-[20%] top-1/2 h-2 w-2 rounded-full bg-[#F5C400]"
    ></div>


    <div class="relative mx-auto max-w-[1312px] px-6 md:px-16">

        <div
            class="relative overflow-hidden rounded-3xl border border-white/10 bg-neutral-950"
        >

            {{-- Yellow Accent --}}
            <div
                aria-hidden="true"
                class="absolute left-0 top-0 h-full w-1 bg-[#F5C400]"
            ></div>


            <div class="grid lg:grid-cols-[1.3fr_0.7fr]">

                {{-- =================================================
                    MAIN CONTENT
                ================================================== --}}
                <div class="px-7 py-12 sm:px-10 md:px-14 md:py-16 lg:py-20">

                    <div class="flex items-center gap-3">

                        <span class="h-2 w-2 rounded-full bg-[#F5C400]"></span>

                        <span class="text-xs font-black uppercase tracking-[0.25em] text-[#F5C400]">
                            Contact & Support
                        </span>

                    </div>


                    <h2
                        class="mt-6 max-w-2xl text-4xl font-black leading-[0.95] tracking-tight text-white sm:text-5xl md:text-6xl"
                    >
                        Have a question?
                        <span class="block text-[#F5C400]">
                            Let's talk.
                        </span>
                    </h2>


                    <p class="mt-7 max-w-xl text-base leading-relaxed text-white/60 md:text-lg">
                        Got a question or need help with something?
                        Our team is here to assist you with anything
                        related to POD Run.
                    </p>


                    {{-- Contact Buttons --}}
                    <div class="mt-9 flex flex-col gap-3 sm:flex-row">

                        <a
                            href="mailto:uwigama@POD.ac.id"
                            aria-label="Send email to uwigama@POD.ac.id"
                            class="group inline-flex items-center justify-center gap-3 rounded-xl bg-[#F5C400] px-6 py-3.5 text-sm font-black text-black transition-all duration-200 hover:-translate-y-0.5 hover:bg-[#FFD83D] hover:shadow-[0_10px_30px_rgba(245,196,0,0.18)] focus:outline-none focus:ring-2 focus:ring-[#F5C400] focus:ring-offset-2 focus:ring-offset-black"
                        >
                            <span>
                                Email Us
                            </span>

                            <span
                                aria-hidden="true"
                                class="transition-transform duration-200 group-hover:translate-x-1"
                            >
                                →
                            </span>
                        </a>


                        <a
                            href="https://wa.me/6282254361507"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="group inline-flex items-center justify-center gap-3 rounded-xl border border-white/15 bg-white/[0.03] px-6 py-3.5 text-sm font-black text-white transition-all duration-200 hover:-translate-y-0.5 hover:border-white/30 hover:bg-white/[0.08] focus:outline-none focus:ring-2 focus:ring-[#F5C400] focus:ring-offset-2 focus:ring-offset-black"
                        >
                            <span>
                                WhatsApp
                            </span>

                            <span
                                aria-hidden="true"
                                class="transition-transform duration-200 group-hover:translate-x-1"
                            >
                                →
                            </span>
                        </a>

                    </div>

                </div>


                {{-- =================================================
                    CONTACT INFORMATION
                ================================================== --}}
                <div
                    class="border-t border-white/10 bg-white/[0.02] px-7 py-10 sm:px-10 md:px-14 lg:border-l lg:border-t-0 lg:py-14"
                >

                    <p class="text-xs font-black uppercase tracking-[0.2em] text-white/40">
                        Get in touch
                    </p>


                    <div class="mt-8 space-y-7">

                        {{-- Email --}}
                        <div>

                            <p class="text-[10px] font-black uppercase tracking-[0.2em] text-[#F5C400]">
                                Email
                            </p>

                            <a
                                href="mailto:uwigama@POD.ac.id"
                                class="mt-2 block break-all text-sm font-semibold text-white transition-colors hover:text-[#F5C400]"
                            >
                                uwigama@POD.ac.id
                            </a>

                        </div>


                        {{-- WhatsApp --}}
                        <div>

                            <p class="text-[10px] font-black uppercase tracking-[0.2em] text-[#F5C400]">
                                WhatsApp
                            </p>

                            <a
                                href="https://wa.me/6282254361507"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="mt-2 block text-sm font-semibold text-white transition-colors hover:text-[#F5C400]"
                            >
                                0822-5436-1507
                            </a>

                        </div>


                        {{-- Website --}}
                        <div>

                            <p class="text-[10px] font-black uppercase tracking-[0.2em] text-[#F5C400]">
                                Website
                            </p>

                            <a
                                href="https://pureofdistance.com"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="mt-2 block text-sm font-semibold text-white transition-colors hover:text-[#F5C400]"
                            >
                                pureofdistance.com
                            </a>

                        </div>

                    </div>


                    {{-- Small Brand Mark --}}
                    <div class="mt-10 border-t border-white/10 pt-6">

                        <p class="text-xs font-bold text-white/30">
                            Pure of Distance
                            <span class="mx-1 text-[#F5C400]">·</span>
                            Caffeine Power
                            <span class="mx-1 text-[#F5C400]">·</span>
                            Daily Run
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

</x-layouts.main>