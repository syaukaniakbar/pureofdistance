<nav class="fixed top-0 z-20 w-full py-6 bg-white text-slate-900 ">
    <div class="max-w-[1312px] mx-auto px-6 md:px-6 lg:px-16">
        <div class="flex items-center justify-between mx-auto">
            <a class="flex flex-row items-center justify-center gap-2 font-sans text-xl font-medium " href="/">
                <div class="flex items-center justify-center w-12 h-12 rounded-full bg-white shadow">
                    <img
                        src="{{ asset('images/Logo.png') }}"
                        alt=""
                        class="h-10 mx-auto" />
                </div>
                </a>

            <ul
                class="absolute flex-col items-center justify-center hidden w-full gap-6 text-3xl lg:flex lg:flex-row lg:text-base lg:gap-2 lg:relative lg:h-auto lg:w-auto lg:bg-transparent"
                id="navbar">
                
                <li>
                    <a
                        href="/registration">
                        <button class="border border-green-800 rounded-md hover:cursor-pointer bg-black text-white  hover:opacity-80 py-1.5 px-4">
                            Registration
                        </button>
                    </a>
                </li>
                <li>
                    <a
                        href="/check-order">
                        <button class="border hover:cursor-pointer rounded-md border-gray-900  py-1.5 px-4">
                            Check Registration
                        </button>
                    </a>
                </li>
            </ul>

            <!-- Mobile Hamburger Button -->
            <button
                class="relative z-20 block h-10 cursor-pointer lg:hidden"
                type="button"
                id="hamburger">
                <!-- Hamburger Icon -->
                <i class="text-xl transition-transform duration-300 ease-in-out text-slate-900 fa-solid fa-bars" id="hamburgerIcon"></i>

                <!-- Close Icon 
                <i class="absolute top-0 left-0 hidden text-xl text-black transition-transform duration-300 ease-in-out transform rotate-45 fa-solid fa-xmark" id="closeIcon"></i>
                -->
            </button>


            <!-- Mobile Navbar -->
            <ul id="mobileMenu" class="lg:hidden flex flex-col justify-center items-center absolute h-dvh bg-green-800 w-full top-22 left-0 space-y-6 p-6 transform transition-all duration-500 ease-in-out translate-x-full">
                <li class="w-36">
                    <a class="block text-center py-1.5 bg-white text-green-800 font-semibold rounded-md hover:bg-opacity-90" href="/registration">Registration</a>
                </li>
                <li class="w-36">
                    <a class="block text-center py-1.5 border border-white text-white font-semibold rounded-md hover:bg-white hover:text-blue-800" href="/check-order">Check Regist</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- JavaScript to Handle Mobile Menu Toggle -->
<script>
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobileMenu');
    const hamburgerIcon = document.getElementById('hamburgerIcon');
    const closeIcon = document.getElementById('closeIcon');

    // Toggle mobile navbar visibility and hamburger icon when clicked
    hamburger.addEventListener('click', () => {
        mobileMenu.classList.toggle('translate-x-full'); // Move menu in/out
        mobileMenu.classList.toggle('translate-x-0'); // Show menu
        hamburgerIcon.classList.toggle('fa-bars'); // Toggle hamburger icon
        hamburgerIcon.classList.toggle('fa-xmark'); // Toggle X icon
    });

    // Close navbar if clicked outside
    document.addEventListener('click', (event) => {
        if (!mobileMenu.contains(event.target) && !hamburger.contains(event.target)) {
            mobileMenu.classList.add('translate-x-full'); // Hide menu
            hamburgerIcon.classList.remove('fa-xmark'); // Reset to hamburger
            hamburgerIcon.classList.add('fa-bars');
        }
    });
</script>