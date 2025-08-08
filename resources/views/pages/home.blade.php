<x-layouts.main>
  <x-slot:title>{{ 'Home | Pureofdistance' }}</x-slot>

<section class="relative isolate overflow-hidden py-32 bg-gradient-to-br from-green-900 via-green-800 to-green-700 text-white">
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
      Get ready to experience the thrill of running! Join the fun—open for students and community members alike.
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
