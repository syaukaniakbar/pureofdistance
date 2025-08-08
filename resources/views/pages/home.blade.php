<x-layouts.main>
  <x-slot:title>{{ 'Home | Pureofdistance' }}</x-slot>

    <section class="relative flex justify-center overflow-hidden bg-black  py-14 md:py-20 mt-20 md:mt-0 lg:h-screen">
    <img 
      src="/images/miguel-a-amutio-Y0woUmyxGrw-unsplash.jpg" 
      alt="Running Event Banner" 
      class="absolute inset-0 w-full h-full object-cover opacity-40"
    >
    <div class="absolute inset-0 bg-black opacity-30"></div>
    <div class="relative flex flex-col items-start justify-center max-w-[1312px] w-full px-6 md:px-16 z-10">
      <div class="max-w-xl text-left text-white">
        <h1 class="mb-4 mt-8 text-3xl font-bold leading-tight md:text-4xl lg:text-5xl drop-shadow-lg">
          JOIN THE ULTIMATE RUNNING CHALLENGE TODAY!
        </h1>
        <p class="mb-6 text-lg md:text-xl drop-shadow">
          Experience the thrill of competition and the joy of community at our annual running event. Whether you're a seasoned runner or just starting out, there's a place for you here.
        </p>
        <div class="flex gap-4 flex-row">
          <a href="/registration">
            <button class="border border-white rounded-md bg-white text-black font-semibold hover:bg-gray-100 hover:opacity-90 py-2 px-6 transition hover:cursor-pointer">
              Register
            </button>
          </a>
          <a href="#learn-more">
            <button class="border border-white rounded-md bg-transparent text-white font-semibold  hover:bg-opacity-90 py-2 px-6 transition hover:cursor-pointer">
              Learn More
            </button>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="relative isolate overflow-hidden py-32 bg-gradient-to-br bg-slate from-slate-900 via-slate-800 to-slate-700 text-white">
    <!-- Background Gradients / Bubbles -->
    <div class="absolute inset-0 z-0">
      <img src="/images/bubble.png" class="absolute -top-[400px] -right-[400px] opacity-20 w-[800px]" alt="">
      <img src="/images/bubble.png" class="absolute -bottom-[400px] -left-[400px] opacity-20 w-[800px]" alt="">
    </div>

    <!-- Content -->
    <div class="relative z-10 mx-auto max-w-4xl px-6 text-center">
      <h2 class="text-4xl md:text-5xl font-bold tracking-tight mb-6 uppercase">
        We Are Coming Soon
      </h2>
      <p class="text-base md:text-lg text-white/80 mb-12 max-w-xl mx-auto">
        Get ready to experience the thrill of running! <br>          
        Join us for <span class="font-bold text-white">Pure of the Distance</span> and be part of something special!
      </p>

      <!-- Countdown Boxes -->
      <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 mb-12">
        <div class="bg-white/10 backdrop-blur-lg rounded-xl py-6 px-4 shadow-md">
          <h3 id="days" class="text-4xl font-bold text-white">00</h3>
          <p class="mt-2 text-sm tracking-widest uppercase text-white/80">Days</p>
        </div>
        <div class="bg-white/10 backdrop-blur-lg rounded-xl py-6 px-4 shadow-md">
          <h3 id="hours" class="text-4xl font-bold text-white">00</h3>
          <p class="mt-2 text-sm tracking-widest uppercase text-white/80">Hours</p>
        </div>
        <div class="bg-white/10 backdrop-blur-lg rounded-xl py-6 px-4 shadow-md">
          <h3 id="minutes" class="text-4xl font-bold text-white">00</h3>
          <p class="mt-2 text-sm tracking-widest uppercase text-white/80">Minutes</p>
        </div>
        <div class="bg-white/10 backdrop-blur-lg rounded-xl py-6 px-4 shadow-md">
          <h3 id="seconds" class="text-4xl font-bold text-white">00</h3>
          <p class="mt-2 text-sm tracking-widest uppercase text-white/80">Seconds</p>
        </div>
      </div>
    </div>
  </section>

  <section class="flex justify-center py-10 mx-auto bg-white md:py-14">
    <div class="relative gap-4 flex flex-row items-start justify-center max-w-[1312px] w-full px-6 md:px-16 z-10">
      <div class="md:w-2/3 w-full text-center md:text-left  text-black pr-0 md:pr-10">
        <h1 class="mb-4 mt-8 text-3xl font-bold leading-tight md:text-4xl lg:text-5xl drop-shadow-lg">
          Discover The Joy of Running Together
        </h1>
        <p class="mb-6 text-lg md:text-xl drop-shadow">
          Participating in our event offers numerous health benefits and fosters community spirit. Join us to improve your fitness and connect with fellow runners.
        </p>
        <div class="w-full h-full mb-6 gap-6 flex flex-col md:flex-row">
          <div class="w-full md:w-1/2 pr-0 md:pr-2 h-full ">
            <h2 class="mb-4 mt-8 text-lg uppercase font-bold leading-tight drop-shadow-lg">Health Benefits</h2>
            <p class="text-md">Boost your cardiovascular health and enhance your overall well-being through running.</p>
          </div>
          <div class="w-full md:w-1/2 pr-0 md:pr-2 h-full ">
            <h2 class="mb-4 mt-8 text-lg uppercase font-bold leading-tight drop-shadow-lg">Community Involvement</h2>
            <p class="text-md">Engage with local runners and create lasting friendships while achieving your fitness goals.</p>
          </div>
        </div>
        <div class="flex justify-center md:justify-start gap-4 flex-row">
          <a href="/registration">
            <button class="border border-black rounded-md bg-black text-white font-semibold hover:bg-gray-800 hover:bg-opacity-90 py-2 px-6 transition hover:cursor-pointer">
              Register
            </button>
          </a>
          <a href="#learn-more">
            <button class="border border-black rounded-md bg-transparent text-black font-semibold  hover:bg-opacity-90 py-2 px-6 transition hover:cursor-pointer">
              Learn More
            </button>
          </a>
        </div>
      </div>
      <div class="hidden lg:flex h-full w-1/3 items-center justify-center">
        <img 
          src="./images/florian-kurrasch-jL4xy2j2p9w-unsplash.jpg" 
          alt="People Running" 
          class="object-cover w-full h-full aspect-square rounded-lg"
        >
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
