<x-layouts.main>
    <x-slot:title>
        {{ 'Check Registration | Pureofdistance Run 2026' }}
    </x-slot>

    <div class="min-h-screen bg-[#FFFDF5]">

        {{-- Hero --}}
        <section class="relative overflow-hidden">
            {{-- Decorative background --}}
            <div class="pointer-events-none absolute -right-32 -top-32 h-96 w-96 rounded-full bg-yellow-300/30 blur-3xl"></div>
            <div class="pointer-events-none absolute -left-32 top-64 h-96 w-96 rounded-full bg-yellow-200/20 blur-3xl"></div>

            <div class="relative mx-auto max-w-7xl px-6 pb-16 pt-16 lg:px-8 lg:pb-24 lg:pt-24">

                {{-- Heading --}}
                <div class="mx-auto max-w-3xl text-center">

                    <div class="mb-6 inline-flex items-center gap-2 rounded-full border border-yellow-200 bg-yellow-50 px-4 py-2 text-sm font-bold text-yellow-800">
                        <span class="relative flex h-2.5 w-2.5">
                            <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-yellow-400 opacity-75"></span>
                            <span class="relative inline-flex h-2.5 w-2.5 rounded-full bg-yellow-500"></span>
                        </span>

                        Pureofdistance Run 2026
                    </div>

                    <h1 class="text-4xl font-black tracking-tight text-slate-950 sm:text-5xl lg:text-6xl">
                        Check Your
                        <span class="text-yellow-500">
                            Registration
                        </span>
                    </h1>

                    <p class="mx-auto mt-6 max-w-2xl text-base leading-7 text-slate-600 sm:text-lg">
                        Check your registration details and make sure
                        everything is ready before race day.
                    </p>

                </div>


                {{-- Registration Card --}}
                <div class="mx-auto mt-12 max-w-2xl">

                    <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-xl shadow-slate-900/5 sm:p-8">

                        {{-- Card Header --}}
                        <div class="mb-8">

                            <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-2xl bg-yellow-400 text-slate-950">

                                <svg
                                    class="h-6 w-6"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M9 12l2 2 4-4"
                                    />

                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M12 3l8 4v5c0 5-3.5 8.5-8 9-4.5-.5-8-4-8-9V7l8-4z"
                                    />
                                </svg>

                            </div>

                            <h2 class="text-xl font-black text-slate-950">
                                Find Your Registration
                            </h2>

                            <p class="mt-1 text-sm text-slate-500">
                                Enter your registration number or email address.
                            </p>

                        </div>


                        {{-- Form --}}
                        <form
                            action="{{ route('check-registration') }}"
                            method="GET"
                            class="space-y-6"
                        >

                            {{-- Registration Number --}}
                            <div>

                                <label
                                    for="registration_number"
                                    class="mb-2 block text-sm font-bold text-slate-800"
                                >
                                    Registration Number
                                </label>

                                <div class="relative">

                                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4">
                                        <svg
                                            class="h-5 w-5 text-slate-400"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M4 7h16M4 11h16M4 15h10"
                                            />
                                        </svg>
                                    </div>

                                    <input
                                        type="text"
                                        id="registration_number"
                                        name="registration_number"
                                        value="{{ request('registration_number') }}"
                                        placeholder="e.g. POR-2026-00125"
                                        autocomplete="off"
                                        class="w-full rounded-2xl border border-slate-200 bg-slate-50 py-3.5 pl-12 pr-4 text-sm font-medium text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-yellow-400 focus:bg-white focus:ring-4 focus:ring-yellow-100"
                                    />

                                </div>

                                <p class="mt-2 text-xs text-slate-500">
                                    You can find this number in your registration confirmation.
                                </p>

                            </div>


                            {{-- Divider --}}
                            <div class="flex items-center gap-4">

                                <div class="h-px flex-1 bg-slate-200"></div>

                                <span class="text-xs font-bold uppercase tracking-wider text-slate-400">
                                    or
                                </span>

                                <div class="h-px flex-1 bg-slate-200"></div>

                            </div>


                            {{-- Email --}}
                            <div>

                                <label
                                    for="email"
                                    class="mb-2 block text-sm font-bold text-slate-800"
                                >
                                    Email Address
                                </label>

                                <div class="relative">

                                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4">
                                        <svg
                                            class="h-5 w-5 text-slate-400"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M3 7l9 6 9-6"
                                            />

                                            <rect
                                                width="18"
                                                height="14"
                                                x="3"
                                                y="5"
                                                rx="2"
                                            />
                                        </svg>
                                    </div>

                                    <input
                                        type="email"
                                        id="email"
                                        name="email"
                                        value="{{ request('email') }}"
                                        placeholder="you@example.com"
                                        autocomplete="email"
                                        class="w-full rounded-2xl border border-slate-200 bg-slate-50 py-3.5 pl-12 pr-4 text-sm font-medium text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-yellow-400 focus:bg-white focus:ring-4 focus:ring-yellow-100"
                                    />

                                </div>

                            </div>


                            {{-- Error --}}
                            @if (session('error'))
                                <div class="flex gap-3 rounded-2xl border border-red-100 bg-red-50 p-4">

                                    <svg
                                        class="h-5 w-5 shrink-0 text-red-500"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        viewBox="0 0 24 24"
                                    >
                                        <circle cx="12" cy="12" r="9" />

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M12 8v4"
                                        />

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M12 16h.01"
                                        />
                                    </svg>

                                    <p class="text-sm font-medium text-red-700">
                                        {{ session('error') }}
                                    </p>

                                </div>
                            @endif


                            {{-- Submit --}}
                            <button
                                type="submit"
                                class="group flex w-full items-center justify-center gap-2 rounded-2xl bg-yellow-400 px-6 py-4 text-sm font-black text-slate-950 shadow-lg shadow-yellow-400/20 transition hover:-translate-y-0.5 hover:bg-yellow-300 hover:shadow-xl active:translate-y-0"
                            >

                                Check My Registration

                                <svg
                                    class="h-5 w-5 transition-transform group-hover:translate-x-1"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M5 12h14"
                                    />

                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M13 6l6 6-6 6"
                                    />
                                </svg>

                            </button>

                        </form>


                        {{-- Help --}}
                        <div class="mt-6 flex items-start gap-3 rounded-2xl bg-slate-50 p-4">

                            <svg
                                class="mt-0.5 h-5 w-5 shrink-0 text-slate-400"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                            >
                                <circle cx="12" cy="12" r="9" />

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M12 11v5"
                                />

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M12 8h.01"
                                />
                            </svg>

                            <p class="text-xs leading-5 text-slate-500">
                                Having trouble finding your registration?
                                Please contact the Pureofdistance Run 2026
                                support team for assistance.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        {{-- Information --}}
        <section class="border-t border-slate-200 bg-white">

            <div class="mx-auto max-w-7xl px-6 py-14 lg:px-8">

                <div class="grid gap-6 md:grid-cols-3">

                    {{-- Status --}}
                    <div class="flex gap-4 rounded-2xl p-5 transition hover:bg-yellow-50">

                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-yellow-100 text-yellow-700">

                            <svg
                                class="h-5 w-5"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M9 12l2 2 4-4"
                                />

                                <circle cx="12" cy="12" r="9" />
                            </svg>

                        </div>

                        <div>
                            <h3 class="font-bold text-slate-900">
                                Registration Status
                            </h3>

                            <p class="mt-1 text-sm leading-6 text-slate-500">
                                Check whether your registration has been confirmed.
                            </p>
                        </div>

                    </div>


                    {{-- Participant --}}
                    <div class="flex gap-4 rounded-2xl p-5 transition hover:bg-yellow-50">

                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-yellow-100 text-yellow-700">

                            <svg
                                class="h-5 w-5"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M20 21a8 8 0 00-16 0"
                                />

                                <circle cx="12" cy="7" r="4" />
                            </svg>

                        </div>

                        <div>
                            <h3 class="font-bold text-slate-900">
                                Participant Details
                            </h3>

                            <p class="mt-1 text-sm leading-6 text-slate-500">
                                Review your name, category, and registration information.
                            </p>
                        </div>

                    </div>


                    {{-- Race Ready --}}
                    <div class="flex gap-4 rounded-2xl p-5 transition hover:bg-yellow-50">

                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-yellow-100 text-yellow-700">

                            <svg
                                class="h-5 w-5"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M13 10V3L4 14h7v7l9-11h-7z"
                                />
                            </svg>

                        </div>

                        <div>
                            <h3 class="font-bold text-slate-900">
                                Race Ready
                            </h3>

                            <p class="mt-1 text-sm leading-6 text-slate-500">
                                Get your registration ready before race day.
                            </p>
                        </div>

                    </div>

                </div>

            </div>

        </section>

    </div>
</x-layouts.main>
