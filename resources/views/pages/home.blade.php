<x-layouts.main>
  <x-slot:title>{{ 'Home | Pureofdistance' }}</x-slot>

@props([
    'badge' => 'Registration Open',
    'title' => 'POD – A Sport Activity Movement for All Runners',
    'description' => 'POD is not a running club, but a sport activity movement created for all runners. Born in Borneo, bringing the sweat to every city.',
    'date' => '24 August 2026',
    'location' => 'Samarinda',
    'quota' => 'Limited Slots',
    'socialProof' => 'More than 500 runners have joined',
    'logoUrl' => asset('images/pod_logo_1_white.PNG'),
    'imageUrl' => asset('gallery/image_1.jpeg'),
    'registerUrl' => url('/registration'),
    'detailUrl' => '#event-details',
    'registrationOpen' => true,
])

<section
    id="home"
    aria-labelledby="hero-heading"
    class="relative isolate overflow-hidden bg-white text-neutral-950 pt-16"
>
    {{-- =========================================================
        Decorative Background
    ========================================================== --}}
    <div
        class="pointer-events-none absolute inset-0 -z-20 overflow-hidden"
        aria-hidden="true"
    >
        {{-- Large yellow accent --}}
        <div
            class="absolute -right-40 -top-40 h-[28rem] w-[28rem] rounded-full bg-[#F5C400]/10 blur-3xl"
        ></div>



        {{-- Decorative ring --}}
        <div
            class="absolute -bottom-32 left-[42%] h-72 w-72 rounded-full border-[40px] border-[#F5C400]/[0.08]"
        ></div>

        {{-- Subtle grid --}}
        <div
            class="absolute inset-0 opacity-[0.025]"
            style="
                background-image:
                    linear-gradient(to right, #000 1px, transparent 1px),
                    linear-gradient(to bottom, #000 1px, transparent 1px);
                background-size: 48px 48px;
            "
        ></div>
    </div>

    {{-- =========================================================
        Top Accent Line
    ========================================================== --}}
    <div
        class="pointer-events-none absolute inset-x-0 top-0 h-1 bg-[#F5C400]"
        aria-hidden="true"
    ></div>

    {{-- =========================================================
        Hero Container
    ========================================================== --}}
    <div
        class="mx-auto grid min-h-[calc(100svh-5rem)] w-full max-w-7xl items-center gap-12 px-5 pb-16 pt-28 sm:px-6 sm:pb-20 lg:grid-cols-[0.95fr_1.05fr] lg:gap-16 lg:px-8 lg:py-20 xl:gap-20"
    >

        {{-- =====================================================
            Content
        ====================================================== --}}
        <div class="max-w-2xl">

          
            {{-- Heading --}}
            <h1
                id="hero-heading"
                class="max-w-3xl text-balance text-4xl font-black leading-[0.98] tracking-[-0.035em] text-neutral-950 sm:text-5xl md:text-6xl lg:text-[4.25rem] xl:text-[5rem]"
            >
                {{ $title }}
            </h1>

            {{-- Yellow underline accent --}}
            <div
                class="mt-6 h-1.5 w-20 rounded-full bg-[#F5C400] sm:w-24"
                aria-hidden="true"
            ></div>

            {{-- Description --}}
            <p
                class="mt-6 max-w-xl text-pretty text-base leading-7 text-neutral-600 sm:text-lg sm:leading-8"
            >
                {{ $description }}
            </p>

            {{-- =================================================
                Event Information
            ================================================== --}}
            <dl class="mt-8 grid max-w-xl grid-cols-1 gap-3 sm:grid-cols-3">

                {{-- Date --}}
                <div class="flex items-center gap-3 rounded-xl border border-neutral-200 bg-white p-3.5 shadow-sm">
                    <div
                        class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-[#F5C400]/15 text-neutral-950"
                        aria-hidden="true"
                    >
                        <svg
                            class="h-5 w-5"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M6.75 3v2.25M17.25 3v2.25M3.75 9h16.5M5.25 4.5h13.5a1.5 1.5 0 0 1 1.5 1.5v13.5a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V6a1.5 1.5 0 0 1 1.5-1.5Z"
                            />
                        </svg>
                    </div>

                    <div class="min-w-0">
                        <dt class="text-[10px] font-bold uppercase tracking-[0.12em] text-neutral-400">
                            Date
                        </dt>

                        <dd class="mt-1 truncate text-sm font-bold text-neutral-950">
                            {{ $date }}
                        </dd>
                    </div>
                </div>

                {{-- Location --}}
                <div class="flex items-center gap-3 rounded-xl border border-neutral-200 bg-white p-3.5 shadow-sm">
                    <div
                        class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-[#F5C400]/15 text-neutral-950"
                        aria-hidden="true"
                    >
                        <svg
                            class="h-5 w-5"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 21s6-5.25 6-11.25a6 6 0 1 0-12 0C6 15.75 12 21 12 21Z"
                            />
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 12a2.25 2.25 0 1 0 0-4.5A2.25 2.25 0 0 0 12 12Z"
                            />
                        </svg>
                    </div>

                    <div class="min-w-0">
                        <dt class="text-[10px] font-bold uppercase tracking-[0.12em] text-neutral-400">
                            Location
                        </dt>

                        <dd class="mt-1 truncate text-sm font-bold text-neutral-950">
                            {{ $location }}
                        </dd>
                    </div>
                </div>

                {{-- Capacity --}}
                <div class="flex items-center gap-3 rounded-xl border border-neutral-200 bg-white p-3.5 shadow-sm">
                    <div
                        class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-[#F5C400]/15 text-neutral-950"
                        aria-hidden="true"
                    >
                        <svg
                            class="h-5 w-5"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M15.75 19.5v-1.125c0-1.865-1.762-3.375-3.938-3.375H8.438C6.262 15 4.5 16.51 4.5 18.375V19.5"
                            />
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M10.125 11.625a3.375 3.375 0 1 0 0-6.75 3.375 3.375 0 0 0 0 6.75ZM16.5 11.625a2.625 2.625 0 0 0 0-5.25M17.625 15c1.125.438 1.875 1.5 1.875 2.625V19.5"
                            />
                        </svg>
                    </div>

                    <div class="min-w-0">
                        <dt class="text-[10px] font-bold uppercase tracking-[0.12em] text-neutral-400">
                            Capacity
                        </dt>

                        <dd class="mt-1 truncate text-sm font-bold text-neutral-950">
                            {{ $quota }}
                        </dd>
                    </div>
                </div>

            </dl>

            {{-- =================================================
                CTA
            ================================================== --}}
            <div class="mt-8 flex flex-col gap-3 sm:flex-row">

                @if ($registrationOpen)

                    <a
                        href="{{ $registerUrl }}"
                        class="group inline-flex min-h-12 items-center justify-center gap-2 rounded-xl bg-[#F5C400] px-6 py-3 text-base font-bold text-neutral-950 shadow-lg shadow-[#F5C400]/20 transition-all duration-200 hover:-translate-y-0.5 hover:bg-[#FFD83D] hover:shadow-xl hover:shadow-[#F5C400]/25 focus-visible:outline-none focus-visible:ring-4 focus-visible:ring-[#F5C400]/40 active:translate-y-0 motion-reduce:transform-none motion-reduce:transition-none"
                    >
                        <span>
                            Join Our Movement!
                        </span>

                        <svg
                            class="h-5 w-5 transition-transform duration-200 group-hover:translate-x-0.5 motion-reduce:transition-none"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            aria-hidden="true"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="m9 18 6-6-6-6"
                            />
                        </svg>
                    </a>

                @else

                    <span
                        aria-disabled="true"
                        class="inline-flex min-h-12 cursor-not-allowed items-center justify-center rounded-xl bg-neutral-200 px-6 py-3 text-base font-bold text-neutral-400"
                    >
                        Registration Closed
                    </span>

                @endif

                <a
                    href="{{ $detailUrl }}"
                    class="inline-flex min-h-12 items-center justify-center rounded-xl border border-neutral-300 bg-white px-6 py-3 text-base font-semibold text-neutral-800 transition-all duration-200 hover:border-neutral-950 hover:bg-neutral-950 hover:text-white focus-visible:outline-none focus-visible:ring-4 focus-visible:ring-neutral-950/15 active:bg-neutral-800 motion-reduce:transition-none"
                >
                    View Event Details
                </a>

            </div>

        </div>

        {{-- =====================================================
            Visual Composition
        ====================================================== --}}
        <div
            class="relative mx-auto w-full max-w-xl lg:max-w-none"
        >

            {{-- Background yellow shape --}}
            <div
                class="absolute -right-5 -top-5 h-28 w-28 rounded-3xl bg-[#F5C400] sm:-right-7 sm:-top-7 sm:h-36 sm:w-36"
                aria-hidden="true"
            ></div>

            {{-- Main image --}}
            <div
                class="relative z-10 ml-auto w-[calc(100%-1rem)] overflow-hidden rounded-[2rem] border border-neutral-200 bg-neutral-100 shadow-2xl shadow-neutral-950/10 sm:w-[calc(100%-2rem)]"
            >
                <div class="relative aspect-[4/5] overflow-hidden">

                    <img
                        src="{{ $imageUrl }}"
                        alt="Runners participating in the POD sport movement event"
                        width="960"
                        height="1200"
                        class="h-full w-full object-cover transition-transform duration-700 hover:scale-[1.025] motion-reduce:transform-none motion-reduce:transition-none"
                        loading="eager"
                        fetchpriority="high"
                        decoding="async"
                    >

                    {{-- Image overlay --}}
                    <div
                        class="pointer-events-none absolute inset-0 bg-gradient-to-t from-black/55 via-transparent to-transparent"
                        aria-hidden="true"
                    ></div>

                    {{-- Image label --}}
                    <div class="absolute bottom-5 left-5 right-5 sm:bottom-7 sm:left-7 sm:right-7">
                        <div class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-black/60 px-4 py-2.5 backdrop-blur-md">
                            <span
                                class="h-2 w-2 rounded-full bg-[#F5C400]"
                                aria-hidden="true"
                            ></span>

                            <span class="ml-4 text-xs font-bold uppercase tracking-[0.14em] text-white">
                                Born in Borneo
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Bottom yellow accent --}}
            <div
                class="absolute -bottom-4 left-4 z-20 h-20 w-20 rounded-2xl bg-[#F5C400] sm:left-0 sm:h-24 sm:w-24"
                aria-hidden="true"
            ></div>

            {{-- Floating information card --}}
            <div
                class="absolute -bottom-7 right-0 z-30 hidden rounded-2xl border border-neutral-200 bg-white p-4 shadow-xl sm:block sm:max-w-[220px]"
            >
                <p class="text-[10px] font-bold uppercase tracking-[0.16em] text-neutral-400">
                    Community movement
                </p>

                <p class="mt-1 text-sm font-bold leading-snug text-neutral-950">
                    Run together. Grow together.
                </p>
            </div>

            {{-- Small decorative dots --}}
            <div
                class="absolute -bottom-4 right-10 z-20 hidden gap-2 sm:flex"
                aria-hidden="true"
            >
                <span class="h-2 w-2 rounded-full bg-[#F5C400]"></span>
                <span class="h-2 w-2 rounded-full bg-[#F5C400]/50"></span>
                <span class="h-2 w-2 rounded-full bg-[#F5C400]/25"></span>
            </div>

        </div>

    </div>
</section>

<section
    id="gallery"
    aria-labelledby="gallery-heading"
    class="relative bg-white py-20 sm:py-24 lg:py-28"
>
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        {{-- Header --}}
        <div class="mx-auto mb-12 max-w-2xl text-center sm:mb-16">
            <span
                class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-[0.2em] text-neutral-500"
            >
                <span class="h-2 w-2 rounded-full bg-[#F5C400]"></span>
                Gallery
            </span>

            <h2
                id="gallery-heading"
                class="mt-4 text-3xl font-black uppercase tracking-tight text-neutral-950 sm:text-4xl lg:text-5xl"
            >
                Event Highlights
            </h2>

            <div class="mx-auto mt-5 h-1 w-16 rounded-full bg-[#F5C400]"></div>

            <p class="mt-5 text-sm leading-7 text-neutral-500 sm:text-base">
                Relive the energy, movement, and memorable moments from the run.
            </p>
        </div>

        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-12 lg:gap-5">

            {{-- Featured Image --}}
            <a
                href="{{ asset('gallery/image_3.jpeg') }}"
                data-lightbox="gallery"
                data-title="The Starting Line"
                aria-label="Open The Starting Line in gallery"
                class="
                    group relative block overflow-hidden rounded-2xl
                    bg-neutral-100
                    shadow-sm ring-1 ring-neutral-200
                    transition-all duration-300
                    hover:-translate-y-1 hover:shadow-xl
                    focus:outline-none
                    focus-visible:ring-4 focus-visible:ring-[#F5C400]/40
                    sm:col-span-2
                    lg:col-span-7
                "
            >
                <div class="relative aspect-[4/3] h-full min-h-[320px] overflow-hidden lg:min-h-[600px]">

                    <img
                        src="{{ asset('gallery/image_3.jpeg') }}"
                        alt="The Starting Line"
                        class="
                            h-full w-full object-cover
                            transition-transform duration-700 ease-out
                            group-hover:scale-[1.04]
                        "
                        loading="eager"
                        decoding="async"
                    >

                    <div
                        class="
                            absolute inset-0
                            bg-gradient-to-t
                            from-black/80
                            via-black/10
                            to-transparent
                        "
                    ></div>

                    <div
                        class="
                            absolute inset-0
                            bg-[#F5C400]/10
                            opacity-0
                            transition-opacity duration-300
                            group-hover:opacity-100
                        "
                    ></div>

                    <div class="absolute left-4 top-4 sm:left-5 sm:top-5">
                        <span
                            class="
                                inline-flex items-center gap-2
                                rounded-full
                                bg-[#F5C400]
                                px-3 py-1.5
                                text-[10px] font-black uppercase
                                tracking-[0.15em]
                                text-neutral-950
                                shadow-lg
                            "
                        >
                            <span class="h-1.5 w-1.5 rounded-full bg-neutral-950"></span>
                            Featured Moment
                        </span>
                    </div>

                    <div
                        class="
                            absolute right-4 top-4
                            flex h-10 w-10 items-center justify-center
                            rounded-full
                            bg-white/10
                            text-white
                            opacity-0
                            backdrop-blur-md
                            transition-all duration-300
                            group-hover:bg-[#F5C400]
                            group-hover:text-neutral-950
                            group-hover:opacity-100
                            sm:right-5 sm:top-5
                        "
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="2"
                            stroke="currentColor"
                            class="h-5 w-5"
                            aria-hidden="true"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M13.5 6H18m0 0v4.5M18 6l-6 6"
                            />
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M10.5 18H6m0 0v-4.5M6 18l6-6"
                            />
                        </svg>
                    </div>

                    <div class="absolute inset-x-0 bottom-0 p-4 sm:p-5">
                        <p class="text-sm font-bold tracking-wide text-white sm:text-base">
                            The Starting Line
                        </p>

                        <p
                            class="
                                mt-1 text-xs font-medium uppercase
                                tracking-[0.15em] text-white/60
                            "
                        >
                            Active Festival Samarinda
                        </p>
                    </div>
                </div>
            </a>

            {{-- Right Column --}}
            <div class="grid gap-4 sm:gap-5 lg:col-span-5">

                {{-- Runner in Action --}}
                <a
                    href="{{ asset('gallery/image_2.jpeg') }}"
                    data-lightbox="gallery"
                    data-title="Runners in Action"
                    aria-label="Open Runners in Action in gallery"
                    class="
                        group relative block overflow-hidden rounded-2xl
                        bg-neutral-100
                        shadow-sm ring-1 ring-neutral-200
                        transition-all duration-300
                        hover:-translate-y-1 hover:shadow-xl
                        focus:outline-none
                        focus-visible:ring-4 focus-visible:ring-[#F5C400]/40
                    "
                >
                    <div class="relative aspect-[16/9] overflow-hidden">

                        <img
                            src="{{ asset('gallery/image_2.jpeg') }}"
                            alt="Runners in Action"
                            class="
                                h-full w-full object-cover
                                transition-transform duration-700 ease-out
                                group-hover:scale-[1.04]
                            "
                            loading="lazy"
                            decoding="async"
                        >

                        <div
                            class="
                                absolute inset-0
                                bg-gradient-to-t
                                from-black/80
                                via-black/10
                                to-transparent
                            "
                        ></div>

                        <div
                            class="
                                absolute inset-0
                                bg-[#F5C400]/10
                                opacity-0
                                transition-opacity duration-300
                                group-hover:opacity-100
                            "
                        ></div>

                        <div class="absolute inset-x-0 bottom-0 p-4 sm:p-5">
                            <p class="text-sm font-bold tracking-wide text-white sm:text-base">
                                Runners in Action
                            </p>
                        </div>
                    </div>
                </a>

                {{-- Pacing Forward --}}
                <a
                    href="{{ asset('gallery/image_4.jpeg') }}"
                    data-lightbox="gallery"
                    data-title="Pacing Forward"
                    aria-label="Open Pacing Forward in gallery"
                    class="
                        group relative block overflow-hidden rounded-2xl
                        bg-neutral-100
                        shadow-sm ring-1 ring-neutral-200
                        transition-all duration-300
                        hover:-translate-y-1 hover:shadow-xl
                        focus:outline-none
                        focus-visible:ring-4 focus-visible:ring-[#F5C400]/40
                    "
                >
                    <div class="relative aspect-[16/9] overflow-hidden">

                        <img
                            src="{{ asset('gallery/image_4.jpeg') }}"
                            alt="Pacing Forward"
                            class="
                                h-full w-full object-cover
                                transition-transform duration-700 ease-out
                                group-hover:scale-[1.04]
                            "
                            loading="lazy"
                            decoding="async"
                        >

                        <div
                            class="
                                absolute inset-0
                                bg-gradient-to-t
                                from-black/80
                                via-black/10
                                to-transparent
                            "
                        ></div>

                        <div
                            class="
                                absolute inset-0
                                bg-[#F5C400]/10
                                opacity-0
                                transition-opacity duration-300
                                group-hover:opacity-100
                            "
                        ></div>

                        <div class="absolute inset-x-0 bottom-0 p-4 sm:p-5">
                            <p class="text-sm font-bold tracking-wide text-white sm:text-base">
                                Pacing Forward
                            </p>
                        </div>
                    </div>
                </a>

                {{-- Focus and Determination --}}
                <a
                    href="{{ asset('gallery/image_5.jpeg') }}"
                    data-lightbox="gallery"
                    data-title="Focus and Determination"
                    aria-label="Open Focus and Determination in gallery"
                    class="
                        group relative block overflow-hidden rounded-2xl
                        bg-neutral-100
                        shadow-sm ring-1 ring-neutral-200
                        transition-all duration-300
                        hover:-translate-y-1 hover:shadow-xl
                        focus:outline-none
                        focus-visible:ring-4
                        focus-visible:ring-[#F5C400]/40
                    "
                >
                    <div class="relative aspect-[16/9] overflow-hidden">

                        <img
                            src="{{ asset('gallery/image_5.jpeg') }}"
                            alt="Focus and Determination"
                            class="
                                h-full w-full object-cover
                                transition-transform duration-700 ease-out
                                group-hover:scale-[1.04]
                            "
                            loading="lazy"
                            decoding="async"
                        >

                        <div
                            class="
                                absolute inset-0
                                bg-gradient-to-t
                                from-black/80
                                via-black/10
                                to-transparent
                            "
                        ></div>

                        <div
                            class="
                                absolute inset-0
                                bg-[#F5C400]/10
                                opacity-0
                                transition-opacity duration-300
                                group-hover:opacity-100
                            "
                        ></div>

                        <div class="absolute inset-x-0 bottom-0 p-4 sm:p-5">
                            <p class="text-sm font-bold tracking-wide text-white sm:text-base">
                                Focus and Determination
                            </p>
                        </div>
                    </div>
                </a>

            </div>

            {{-- Remaining Gallery --}}
            @foreach ([
                ['image_6.jpeg', 'Mid-Route Miles'],
                ['image_7.jpeg', 'Pushing the Limit'],
                ['image_8.jpeg', 'Finish Line Joy'],
                ['image_9.jpeg', 'Post-Run Celebration'],
            ] as [$file, $title])

                <a
                    href="{{ asset("gallery/$file") }}"
                    data-lightbox="gallery"
                    data-title="{{ $title }}"
                    aria-label="Open {{ $title }} in gallery"
                    class="
                        group relative block overflow-hidden rounded-2xl
                        bg-neutral-100
                        shadow-sm ring-1 ring-neutral-200
                        transition-all duration-300
                        hover:-translate-y-1 hover:shadow-xl
                        focus:outline-none
                        focus-visible:ring-4
                        focus-visible:ring-[#F5C400]/40
                        sm:col-span-1
                        lg:col-span-3
                    "
                >
                    <div class="relative aspect-[4/3] overflow-hidden">

                        <img
                            src="{{ asset("gallery/$file") }}"
                            alt="{{ $title }}"
                            class="
                                h-full w-full object-cover
                                transition-transform duration-700 ease-out
                                group-hover:scale-[1.04]
                            "
                            loading="lazy"
                            decoding="async"
                        >

                        <div
                            class="
                                absolute inset-0
                                bg-gradient-to-t
                                from-black/80
                                via-black/10
                                to-transparent
                            "
                        ></div>

                        <div
                            class="
                                absolute inset-0
                                bg-[#F5C400]/10
                                opacity-0
                                transition-opacity duration-300
                                group-hover:opacity-100
                            "
                        ></div>

                        <div class="absolute inset-x-0 bottom-0 p-4 sm:p-5">
                            <p class="text-sm font-bold tracking-wide text-white sm:text-base">
                                {{ $title }}
                            </p>
                        </div>
                    </div>
                </a>

            @endforeach

        </div>

        {{-- Bottom Accent --}}
        <div class="mt-8 flex justify-center">
            <div class="h-1 w-20 rounded-full bg-[#F5C400]"></div>
        </div>

    </div>
</section>


<section
    aria-labelledby="limited-slot-heading"
    class="relative isolate bg-neutral-950 py-16 text-white sm:py-20 lg:py-24"
>
    {{-- Background accents --}}
    <div
        aria-hidden="true"
        class="pointer-events-none absolute inset-y-0 left-0 w-px bg-[#F5C400]/70"
    ></div>

    <div
        aria-hidden="true"
        class="pointer-events-none absolute right-0 top-0 h-40 w-40 rounded-full border border-[#F5C400]/10 sm:h-56 sm:w-56"
    ></div>

    <div
        aria-hidden="true"
        class="pointer-events-none absolute bottom-10 left-1/2 hidden h-px w-32 -translate-x-1/2 bg-[#F5C400]/20 sm:block"
    ></div>

    <div class="relative mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">

        {{-- Main Content --}}
        <div class="mx-auto max-w-3xl text-center">

            {{-- Eyebrow --}}
            <div class="mb-5 flex items-center justify-center gap-3">
                <span
                    aria-hidden="true"
                    class="h-px w-8 bg-[#F5C400] sm:w-12"
                ></span>

                <span
                    class="
                        text-[10px] font-black uppercase
                        tracking-[0.24em]
                        text-[#F5C400]
                        sm:text-xs
                    "
                >
                    Registration Open
                </span>

                <span
                    aria-hidden="true"
                    class="h-px w-8 bg-[#F5C400] sm:w-12"
                ></span>
            </div>

            {{-- Heading --}}
            <h2
                id="limited-slot-heading"
                class="
                    text-4xl font-black uppercase
                    leading-[0.95] tracking-[-0.03em]
                    text-white
                    sm:text-5xl
                    lg:text-7xl
                "
            >
                Limited
                <span class="text-[#F5C400]">Slot</span>
            </h2>

            {{-- Accent --}}
            <div
                aria-hidden="true"
                class="mx-auto mt-6 flex items-center justify-center gap-1.5"
            >
                <span class="h-1 w-10 rounded-full bg-[#F5C400]"></span>
                <span class="h-1 w-2 rounded-full bg-[#004122]"></span>
                <span class="h-1 w-2 rounded-full bg-[#004122]"></span>
                <span class="h-1 w-2 rounded-full bg-white/20"></span>
            </div>

            {{-- Description --}}
            <p
                class="
                    mx-auto mt-6 max-w-2xl
                    text-sm leading-7
                    text-neutral-400
                    sm:text-base sm:leading-8
                "
            >
                Unlock the power of synergy, leveraging each other's strengths
                to achieve your goals with greater speed.
                <strong class="font-bold text-white">
                    Pure of Distance
                    <span class="mx-1 text-[#F5C400]">·</span>
                    Caffeine Power
                    <span class="mx-1 text-[#F5C400]">·</span>
                    Daily Run
                </strong>
            </p>

        </div>

        {{-- Countdown --}}
        <div
            class="
                mx-auto mt-10
                grid max-w-4xl grid-cols-2
                gap-3
                sm:mt-12 sm:gap-4
                lg:grid-cols-4 lg:gap-5
            "
            aria-label="Registration countdown"
        >

            {{-- Days --}}
            <div
                class="
                    group relative
                    rounded-2xl
                    border border-white/10
                    bg-white/[0.04]
                    px-3 py-6
                    text-center
                    shadow-[0_12px_40px_rgba(0,0,0,0.2)]
                    backdrop-blur-sm
                    transition-all duration-300
                    hover:-translate-y-1
                    hover:border-[#F5C400]/60
                    hover:bg-white/[0.06]
                    sm:px-5 sm:py-7
                "
            >
                <div
                    aria-hidden="true"
                    class="
                        absolute inset-x-5 top-0
                        h-1 rounded-b-full
                        bg-[#F5C400]
                        transition-all duration-300
                        group-hover:inset-x-3
                    "
                ></div>

                <h3
                    id="days"
                    class="
                        mt-1
                        text-4xl font-black
                        leading-none tracking-tight
                        tabular-nums text-white
                        sm:text-5xl lg:text-6xl
                    "
                >
                    00
                </h3>

                <p
                    class="
                        mt-3 text-[10px] font-bold
                        uppercase tracking-[0.2em]
                        text-neutral-500
                        sm:text-xs
                    "
                >
                    Days
                </p>
            </div>

            {{-- Hours --}}
            <div
                class="
                    group relative
                    rounded-2xl
                    border border-white/10
                    bg-white/[0.04]
                    px-3 py-6
                    text-center
                    shadow-[0_12px_40px_rgba(0,0,0,0.2)]
                    backdrop-blur-sm
                    transition-all duration-300
                    hover:-translate-y-1
                    hover:border-[#F5C400]/60
                    hover:bg-white/[0.06]
                    sm:px-5 sm:py-7
                "
            >
                <div
                    aria-hidden="true"
                    class="
                        absolute inset-x-5 top-0
                        h-1 rounded-b-full
                        bg-[#F5C400]
                        transition-all duration-300
                        group-hover:inset-x-3
                    "
                ></div>

                <h3
                    id="hours"
                    class="
                        mt-1
                        text-4xl font-black
                        leading-none tracking-tight
                        tabular-nums text-white
                        sm:text-5xl lg:text-6xl
                    "
                >
                    00
                </h3>

                <p
                    class="
                        mt-3 text-[10px] font-bold
                        uppercase tracking-[0.2em]
                        text-neutral-500
                        sm:text-xs
                    "
                >
                    Hours
                </p>
            </div>

            {{-- Minutes --}}
            <div
                class="
                    group relative
                    rounded-2xl
                    border border-white/10
                    bg-white/[0.04]
                    px-3 py-6
                    text-center
                    shadow-[0_12px_40px_rgba(0,0,0,0.2)]
                    backdrop-blur-sm
                    transition-all duration-300
                    hover:-translate-y-1
                    hover:border-[#F5C400]/60
                    hover:bg-white/[0.06]
                    sm:px-5 sm:py-7
                "
            >
                <div
                    aria-hidden="true"
                    class="
                        absolute inset-x-5 top-0
                        h-1 rounded-b-full
                        bg-[#F5C400]
                        transition-all duration-300
                        group-hover:inset-x-3
                    "
                ></div>

                <h3
                    id="minutes"
                    class="
                        mt-1
                        text-4xl font-black
                        leading-none tracking-tight
                        tabular-nums text-white
                        sm:text-5xl lg:text-6xl
                    "
                >
                    00
                </h3>

                <p
                    class="
                        mt-3 text-[10px] font-bold
                        uppercase tracking-[0.2em]
                        text-neutral-500
                        sm:text-xs
                    "
                >
                    Minutes
                </p>
            </div>

            {{-- Seconds --}}
            <div
                class="
                    group relative
                    rounded-2xl
                    border border-white/10
                    bg-white/[0.04]
                    px-3 py-6
                    text-center
                    shadow-[0_12px_40px_rgba(0,0,0,0.2)]
                    backdrop-blur-sm
                    transition-all duration-300
                    hover:-translate-y-1
                    hover:border-[#F5C400]/60
                    hover:bg-white/[0.06]
                    sm:px-5 sm:py-7
                "
            >
                <div
                    aria-hidden="true"
                    class="
                        absolute inset-x-5 top-0
                        h-1 rounded-b-full
                        bg-[#F5C400]
                        transition-all duration-300
                        group-hover:inset-x-3
                    "
                ></div>

                <h3
                    id="seconds"
                    class="
                        mt-1
                        text-4xl font-black
                        leading-none tracking-tight
                        tabular-nums text-white
                        sm:text-5xl lg:text-6xl
                    "
                >
                    00
                </h3>

                <p
                    class="
                        mt-3 text-[10px] font-bold
                        uppercase tracking-[0.2em]
                        text-neutral-500
                        sm:text-xs
                    "
                >
                    Seconds
                </p>
            </div>

        </div>

        {{-- Registration CTA --}}
        @if (isset($registerUrl) && $registerUrl)
            <div class="mt-9 flex justify-center sm:mt-10">
                <a
                    href="{{ $registerUrl }}"
                    class="
                        group inline-flex min-h-12
                        items-center justify-center
                        rounded-full
                        bg-[#F5C400]
                        px-7 py-3
                        text-sm font-black
                        uppercase tracking-wide
                        text-neutral-950
                        shadow-[0_8px_24px_rgba(245,196,0,0.16)]
                        transition-all duration-300
                        hover:-translate-y-0.5
                        hover:bg-[#ffd21a]
                        hover:shadow-[0_12px_32px_rgba(245,196,0,0.22)]
                        focus:outline-none
                        focus-visible:ring-4
                        focus-visible:ring-[#F5C400]/30
                        active:translate-y-0
                        sm:px-8
                    "
                >
                    <span>Register Now</span>

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="2"
                        stroke="currentColor"
                        class="ml-2 h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"
                        aria-hidden="true"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"
                        />
                    </svg>
                </a>
            </div>
        @endif
    </div>
</section>
 


<section class="relative overflow-hidden bg-white py-16 md:py-24">
    <div class="mx-auto max-w-[1312px] px-6 md:px-16">

        <div class="grid items-center gap-12 lg:grid-cols-[1.05fr_0.95fr] lg:gap-20">

            {{-- Content --}}
            <div class="relative z-10">

                {{-- Eyebrow --}}
                <div class="mb-5 flex items-center gap-3">
                    <span class="h-px w-10 bg-[#F5C400]"></span>

                    <span class="text-xs font-bold uppercase tracking-[0.2em] text-neutral-500">
                        Active Festival
                    </span>
                </div>

                {{-- Heading --}}
                <h1
                    class="
                        max-w-2xl
                        text-4xl font-black leading-[1.05]
                        tracking-tight text-neutral-950
                        md:text-5xl
                        lg:text-6xl
                    "
                >
                    Discover the Joy of
                    <span class="text-[#F5C400]">Running</span>
                    Together
                </h1>

                {{-- Intro --}}
                <p class="mt-6 max-w-xl text-base leading-7 text-neutral-500 md:text-lg">
                    Move together, meet new people, and experience the energy of
                    running as a community.
                </p>

                {{-- Event Information --}}
                <div class="mt-10 border-t border-neutral-200">

                    {{-- Date --}}
                    <div
                        class="
                            group flex items-center gap-5
                            border-b border-neutral-200
                            py-5
                            transition-colors duration-300
                            hover:border-[#F5C400]
                        "
                    >
                        <div
                            class="
                                flex h-11 w-11 shrink-0
                                items-center justify-center
                                rounded-full
                                bg-[#F5C400]
                                text-neutral-950
                            "
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                aria-hidden="true"
                                class="h-5 w-5"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                                />
                            </svg>
                        </div>

                        <div class="min-w-0">
                            <p class="text-xs font-bold uppercase tracking-[0.15em] text-neutral-400">
                                Date
                            </p>

                            <p class="mt-1 text-base font-semibold text-neutral-950 md:text-lg">
                                Saturday, 16 August 2025
                            </p>
                        </div>
                    </div>

                    {{-- Time --}}
                    <div
                        class="
                            group flex items-center gap-5
                            border-b border-neutral-200
                            py-5
                            transition-colors duration-300
                            hover:border-[#F5C400]
                        "
                    >
                        <div
                            class="
                                flex h-11 w-11 shrink-0
                                items-center justify-center
                                rounded-full
                                bg-[#F5C400]
                                text-neutral-950
                            "
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                aria-hidden="true"
                                class="h-5 w-5"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"
                                />
                            </svg>
                        </div>

                        <div class="min-w-0">
                            <p class="text-xs font-bold uppercase tracking-[0.15em] text-neutral-400">
                                Start Time
                            </p>

                            <p class="mt-1 text-base font-semibold text-neutral-950 md:text-lg">
                                Start Your Run at 6:00 AM
                            </p>
                        </div>
                    </div>

                    {{-- Route --}}
                    <div
                        class="
                            group flex items-center gap-5
                            border-b border-neutral-200
                            py-5
                            transition-colors duration-300
                            hover:border-[#F5C400]
                        "
                    >
                        <div
                            class="
                                flex h-11 w-11 shrink-0
                                items-center justify-center
                                rounded-full
                                bg-[#F5C400]
                                text-neutral-950
                            "
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                aria-hidden="true"
                                class="h-5 w-5"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <polyline
                                    points="22 12 18 12 15 21 9 3 6 12 2 12"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    fill="none"
                                />
                            </svg>
                        </div>

                        <div class="min-w-0">
                            <p class="text-xs font-bold uppercase tracking-[0.15em] text-neutral-400">
                                Route
                            </p>

                            <p class="mt-1 text-base font-semibold text-neutral-950 md:text-lg">
                                5K Route
                            </p>
                        </div>
                    </div>

                    {{-- Location --}}
                    <div
                        class="
                            group flex items-center gap-5
                            border-b border-neutral-200
                            py-5
                            transition-colors duration-300
                            hover:border-[#F5C400]
                        "
                    >
                        <div
                            class="
                                flex h-11 w-11 shrink-0
                                items-center justify-center
                                rounded-full
                                bg-[#F5C400]
                                text-neutral-950
                            "
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                aria-hidden="true"
                                class="h-5 w-5"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M12 21s-6-5.686-6-10a6 6 0 1112 0c0 4.314-6 10-6 10z"
                                />
                                <circle
                                    cx="12"
                                    cy="11"
                                    r="2"
                                />
                            </svg>
                        </div>

                        <div class="min-w-0">
                            <p class="text-xs font-bold uppercase tracking-[0.15em] text-neutral-400">
                                Location
                            </p>

                            <p class="mt-1 text-base font-semibold text-neutral-950 md:text-lg">
                                POD Village - Tigris
                            </p>
                        </div>
                    </div>

                </div>

                {{-- Additional Information --}}
                <div class="mt-7 space-y-3">

                    <p class="text-sm leading-6 text-neutral-500 md:text-base">
                        <span class="font-bold text-neutral-950">
                            Jersey Code:
                        </span>
                        PA.CE jersey black / white
                    </p>

                    <p class="flex items-center gap-2 text-sm font-bold uppercase tracking-wide text-[#004122] md:text-base">
                        <span class="h-2 w-2 rounded-full bg-[#F5C400]"></span>
                        FREE FOR ALL RUNNERS
                    </p>

                    <p class="text-sm leading-6 text-neutral-500 md:text-base">
                        Fueled by Tigris and Fives.
                    </p>

                    <p class="text-sm leading-6 text-neutral-500 md:text-base">
                        Tigris, Samarinda 75117
                    </p>

                </div>

            </div>

            {{-- Image --}}
            <div class="relative z-10">

                {{-- Yellow accent --}}
                <div
                    aria-hidden="true"
                    class="
                        absolute -right-3 -top-3
                        h-20 w-20
                        border-r-4 border-t-4
                        border-[#F5C400]
                        sm:-right-5 sm:-top-5
                    "
                ></div>

                <div
                    class="
                        relative overflow-hidden
                        rounded-2xl
                        bg-neutral-100
                    "
                >
                    <img
                        src="{{ asset('images/pod_runners.jpeg') }}"
                        alt="A group of people running together during a marathon event"
                        loading="lazy"
                        decoding="async"
                        class="
                            aspect-[4/5]
                            w-full
                            object-cover
                            transition-transform duration-700 ease-out
                            hover:scale-[1.02]
                            sm:aspect-[4/3]
                            lg:aspect-[4/5]
                        "
                    />

                    {{-- Image Label --}}
                    <div
                        class="
                            absolute bottom-0 left-0 right-0
                            bg-gradient-to-t from-black/70 to-transparent
                            p-6 pt-16
                        "
                    >
                        <div class="flex items-center gap-3">
                            <span class="h-2 w-2 rounded-full bg-[#F5C400]"></span>

                            <p class="text-xs font-bold uppercase tracking-[0.18em] text-white">
                                Run Together
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Bottom accent --}}
                <div
                    aria-hidden="true"
                    class="absolute -bottom-3 -left-3 h-12 w-12 bg-[#F5C400] sm:-bottom-4 sm:-left-4"
                ></div>

            </div>

        </div>
    </div>
</section>

  <script>
    // Ganti dengan waktu event kamu (format: YYYY-MM-DDTHH:MM:SS)
    const targetDate = new Date("2025-08-16T07:00:00").getTime();

    const updateCountdown = () => {
      const now = new Date().getTime();
      const difference = targetDate - now;

      if (difference < 0) {
        document.getElementById("days").textContent = "00";
        document.getElementById("hours").textContent = "00";
        document.getElementById("minutes").textContent = "00";
        document.getElementById("seconds").textContent = "00";
        return;
      }

      const days = Math.floor(difference / (1000 * 60 * 60 * 24));
      const hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
      const seconds = Math.floor((difference % (1000 * 60)) / 1000);

      document.getElementById("days").textContent = String(days).padStart(2, '0');
      document.getElementById("hours").textContent = String(hours).padStart(2, '0');
      document.getElementById("minutes").textContent = String(minutes).padStart(2, '0');
      document.getElementById("seconds").textContent = String(seconds).padStart(2, '0');
    };

    updateCountdown(); // run once on load
    setInterval(updateCountdown, 1000); // update every second
  </script>

</x-layouts.main>
