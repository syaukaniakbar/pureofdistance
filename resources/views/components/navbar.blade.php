
<nav
    class="fixed inset-x-0 top-0 z-50 border-b border-white/10 bg-black text-white"
    aria-label="Main navigation"
>
    <div class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-20 items-center justify-between">

            <!-- Logo -->
            <a
                href="/"
                class="flex shrink-0 items-center rounded-lg transition-opacity duration-200 hover:opacity-80 focus:outline-none focus:ring-2 focus:ring-[#F5C400] focus:ring-offset-2 focus:ring-offset-black"
                aria-label="Active Festival Samarinda - Home"
            >
                <div class="flex h-24 w-24 items-center justify-center">
                    <img
                        src="{{ asset('images/pod logo 2 white.PNG') }}"
                        alt="Active Festival Samarinda"
                        class="h-10 w-auto object-contain"
                    />
                </div>
            </a>

            <!-- Desktop Navigation -->
            <ul
                id="navbar"
                class="hidden items-center gap-1 lg:flex"
            >
                <!-- Home -->
                <li>
                    <a
                        href="/"
                        class="group relative flex items-center px-4 py-3 text-sm font-semibold text-white/80 transition-colors duration-200 hover:text-[#F5C400] focus:outline-none focus:ring-2 focus:ring-[#F5C400] focus:ring-inset"
                    >
                        Home

                        <!-- Active indicator -->
                        <span
                            class="absolute inset-x-4 bottom-1 h-0.5 origin-left scale-x-0 rounded-full bg-[#F5C400] transition-transform duration-200 group-hover:scale-x-100"
                        ></span>
                    </a>
                </li>

                {{-- 
                <li>
                    <a
                        href="/event"
                        class="group relative flex items-center px-4 py-3 text-sm font-semibold text-white/80 transition-colors duration-200 hover:text-[#F5C400] focus:outline-none focus:ring-2 focus:ring-[#F5C400] focus:ring-inset"
                    >
                        Event
                        <span
                            class="absolute inset-x-4 bottom-1 h-0.5 origin-left scale-x-0 rounded-full bg-[#F5C400] transition-transform duration-200 group-hover:scale-x-100"
                        ></span>
                    </a>
                </li>
                --}}

                <!-- About -->
                <li>
                    <a
                        href="/about"
                        class="group relative flex items-center px-4 py-3 text-sm font-semibold text-white/80 transition-colors duration-200 hover:text-[#F5C400] focus:outline-none focus:ring-2 focus:ring-[#F5C400] focus:ring-inset"
                    >
                        About Us

                        <span
                            class="absolute inset-x-4 bottom-1 h-0.5 origin-left scale-x-0 rounded-full bg-[#F5C400] transition-transform duration-200 group-hover:scale-x-100"
                        ></span>
                    </a>
                </li>

                <!-- Rules -->
                <li>
                    <a
                        href="/rules"
                        class="group relative flex items-center px-4 py-3 text-sm font-semibold text-white/80 transition-colors duration-200 hover:text-[#F5C400] focus:outline-none focus:ring-2 focus:ring-[#F5C400] focus:ring-inset"
                    >
                        Rules

                        <span
                            class="absolute inset-x-4 bottom-1 h-0.5 origin-left scale-x-0 rounded-full bg-[#F5C400] transition-transform duration-200 group-hover:scale-x-100"
                        ></span>
                    </a>
                </li>

                <!-- Actions -->
                <li class="ml-3 flex items-center gap-2">
                    <!-- Registration -->
                    <a
                        href="/registration"
                        class="inline-flex items-center justify-center rounded-lg border border-[#F5C400] px-4 py-2 text-sm font-semibold text-[#F5C400] transition-all duration-200 hover:bg-[#F5C400] hover:text-black focus:outline-none focus:ring-2 focus:ring-[#F5C400] focus:ring-offset-2 focus:ring-offset-black"
                    >
                        Registration
                    </a>

                    <!-- Check Registration -->
                    <a
                        href="/check-registration"
                        class="inline-flex items-center justify-center rounded-lg bg-[#F5C400] px-4 py-2 text-sm font-semibold text-black transition-all duration-200 hover:bg-[#FFD83D] focus:outline-none focus:ring-2 focus:ring-[#F5C400] focus:ring-offset-2 focus:ring-offset-black"
                    >
                        Check Registration
                    </a>
                </li>
            </ul>

            <!-- Mobile Menu Button -->
            <button
                id="hamburger"
                type="button"
                class="relative z-50 inline-flex h-11 w-11 items-center justify-center rounded-lg text-white transition-colors duration-200 hover:bg-white/10 hover:text-[#F5C400] focus:outline-none focus:ring-2 focus:ring-[#F5C400] lg:hidden"
                aria-label="Toggle navigation menu"
                aria-expanded="false"
                aria-controls="mobileMenu"
            >
                <i
                    id="hamburgerIcon"
                    class="fa-solid fa-bars text-xl transition-transform duration-200"
                    aria-hidden="true"
                ></i>
            </button>
        </div>
    </div>

    <!-- Mobile Navigation -->
    <div
        id="mobileMenu"
        class="pointer-events-none invisible absolute inset-x-0 top-20 border-t border-white/10 bg-black/95 opacity-0 shadow-2xl backdrop-blur-md transition-all duration-300 ease-out lg:hidden"
    >
        <ul class="mx-auto flex w-full max-w-md flex-col gap-2 px-5 py-6">

            <!-- Home -->
            <li>
                <a
                    href="/"
                    class="flex min-h-12 items-center rounded-lg px-4 text-base font-semibold text-white/85 transition-colors duration-200 hover:bg-white/5 hover:text-[#F5C400] focus:outline-none focus:ring-2 focus:ring-[#F5C400]"
                >
                    Home
                </a>
            </li>

            {{--
            <li>
                <a
                    href="/event"
                    class="flex min-h-12 items-center rounded-lg px-4 text-base font-semibold text-white/85 transition-colors duration-200 hover:bg-white/5 hover:text-[#F5C400] focus:outline-none focus:ring-2 focus:ring-[#F5C400]"
                >
                    Event
                </a>
            </li>
            --}}

            <!-- About -->
            <li>
                <a
                    href="/about"
                    class="flex min-h-12 items-center rounded-lg px-4 text-base font-semibold text-white/85 transition-colors duration-200 hover:bg-white/5 hover:text-[#F5C400] focus:outline-none focus:ring-2 focus:ring-[#F5C400]"
                >
                    About Us
                </a>
            </li>

            <!-- Rules -->
            <li>
                <a
                    href="/rules"
                    class="flex min-h-12 items-center rounded-lg px-4 text-base font-semibold text-white/85 transition-colors duration-200 hover:bg-white/5 hover:text-[#F5C400] focus:outline-none focus:ring-2 focus:ring-[#F5C400]"
                >
                    Rules
                </a>
            </li>

            <!-- Mobile Actions -->
            <li class="mt-3 grid gap-3 border-t border-white/10 pt-5 sm:grid-cols-2">

                <!-- Registration -->
                <a
                    href="/registration"
                    class="flex min-h-12 items-center justify-center rounded-lg border border-[#F5C400] px-4 text-sm font-semibold text-[#F5C400] transition-all duration-200 hover:bg-[#F5C400] hover:text-black focus:outline-none focus:ring-2 focus:ring-[#F5C400]"
                >
                    Registration
                </a>

                <!-- Check Registration -->
                <a
                    href="/check-registration"
                    class="flex min-h-12 items-center justify-center rounded-lg bg-[#F5C400] px-4 text-sm font-semibold text-black transition-all duration-200 hover:bg-[#FFD83D] focus:outline-none focus:ring-2 focus:ring-[#F5C400]"
                >
                    Check Registration
                </a>
            </li>
        </ul>
    </div>
</nav>

<!-- Mobile Navbar Script -->
<script>
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobileMenu');
    const hamburgerIcon = document.getElementById('hamburgerIcon');

    function openMobileMenu() {
        mobileMenu.classList.remove(
            'pointer-events-none',
            'invisible',
            'opacity-0'
        );

        mobileMenu.classList.add(
            'pointer-events-auto',
            'visible',
            'opacity-100'
        );

        hamburgerIcon.classList.remove('fa-bars');
        hamburgerIcon.classList.add('fa-xmark');

        hamburger.setAttribute('aria-expanded', 'true');
    }

    function closeMobileMenu() {
        mobileMenu.classList.remove(
            'pointer-events-auto',
            'visible',
            'opacity-100'
        );

        mobileMenu.classList.add(
            'pointer-events-none',
            'invisible',
            'opacity-0'
        );

        hamburgerIcon.classList.remove('fa-xmark');
        hamburgerIcon.classList.add('fa-bars');

        hamburger.setAttribute('aria-expanded', 'false');
    }

    function toggleMobileMenu() {
        const isOpen = hamburger.getAttribute('aria-expanded') === 'true';

        if (isOpen) {
            closeMobileMenu();
        } else {
            openMobileMenu();
        }
    }

    hamburger.addEventListener('click', (event) => {
        event.stopPropagation();
        toggleMobileMenu();
    });

    // Close menu when clicking outside
    document.addEventListener('click', (event) => {
        if (
            !mobileMenu.contains(event.target) &&
            !hamburger.contains(event.target)
        ) {
            closeMobileMenu();
        }
    });

    // Close menu after clicking a navigation link
    mobileMenu.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => {
            closeMobileMenu();
        });
    });

    // Close menu when pressing Escape
    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            closeMobileMenu();
        }
    });

    // Reset mobile menu when resizing to desktop
    window.addEventListener('resize', () => {
        if (window.innerWidth >= 1024) {
            closeMobileMenu();
        }
    });
</script>
