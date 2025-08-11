<x-layouts.main>
  <x-slot:title>{{ 'Home | Pureofdistance' }}</x-slot>

<section class="relative flex justify-center overflow-hidden bg-black mt-20 md:mt-0 min-h-[80vh] lg:min-h-screen py-14 md:py-20">
  <!-- Background Image -->
  <img 
    src="/gallery/image_1.jpeg" 
    alt="" 
    class="absolute inset-0 w-full h-full object-cover opacity-40" 
    loading="lazy"
  >
  <!-- Gradient Overlay -->
  <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>

  <!-- Content -->
  <div class="relative flex flex-col items-start justify-center max-w-[1312px] w-full px-6 md:px-16 z-10">
    <div class="max-w-5xl text-left text-white space-y-6">
      
      <!-- Logo -->
      <img 
        src="{{ asset('images/pod_logo_1_white.PNG') }}" 
        alt="POD White Logo" 
        class="h-32 sm:h-40 lg:h-48 object-contain transition-transform duration-700 ease-out hover:scale-105"
        loading="lazy"
      >

      <!-- Heading -->
      <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold leading-tight">
        POD – A Sport Activity Movement for All Runners
      </h1>

      <!-- Description -->
      <p class="text-base sm:text-lg md:text-xl font-medium max-w-3xl">
        POD is not a running club, but rather a sport activity movement created for all runners. <br>
        Born in Borneo, bringing the sweat to every city.
      </p>

      <!-- CTA Buttons -->
      <div class="mt-4 flex flex-col sm:flex-row gap-4">
        <a href="/registration">
          <button class="border border-white rounded-md bg-white text-black font-semibold py-2 px-6 text-lg sm:text-xl hover:bg-gray-200 hover:scale-105 transition-all duration-300">
            Join Our Movement!
          </button>
        </a>
      </div>
    </div>
  </div>
</section>


<section class="py-20 bg-gradient-to-b from-gray-50 to-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      @foreach ([
        ['image_3.jpeg', 'pureofdistance-image_3'],
        ['image_2.jpeg', 'pureofdistance-image_2'],
        ['image_4.jpeg', 'pureofdistance-image_4'],
        ['image_5.jpeg', 'pureofdistance-image_5'],
        ['image_6.jpeg', 'pureofdistance-image_6'],
        ['image_7.jpeg', 'pureofdistance-image_7'],
        ['image_8.jpeg', 'pureofdistance-image_8'],
        ['image_9.jpeg', 'pureofdistance-image_9'],
      ] as [$file, $title])
        <a 
          href="{{ asset("gallery/$file") }}" 
          data-lightbox="gallery" 
          data-title="{{ $title }}"
          class="group relative block overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500"
        >
          <!-- Gambar -->
          <img 
            src="{{ asset("gallery/$file") }}" 
            alt="{{ $title }}" 
            class="w-full h-56 sm:h-64 lg:h-72 object-cover transform group-hover:scale-110 transition-transform duration-700 ease-out"
            loading="lazy"
            decoding="async"
          >
        </a>
      @endforeach
    </div>
  </div>
</section>


<section class="relative isolate overflow-hidden py-32 bg-gradient-to-br bg-slate from-green-900 via-green-900 to-green-700 text-white">
    <!-- Background Gradients / Bubbles -->
    <div class="absolute inset-0 z-0">
      <img src="/images/bubble.png" class="absolute -top-[400px] -right-[400px] opacity-20 w-[800px]" alt="">
      <img src="/images/bubble.png" class="absolute -bottom-[400px] -left-[400px] opacity-20 w-[800px]" alt="">
    </div>

    <!-- Content -->
    <div class="relative z-10 mx-auto max-w-5xl px-6 text-center">
      <h2 class="text-4xl md:text-5xl font-bold font-fallback tracking-tight mb-6 ">
        <!-- We Are Coming Soon -->
        LIMITED SLOT
      </h2>
      <p class="text-base font-fallback md:text-lg text-white/80 mb-12 max-w-xl mx-auto">
       Unlock the power of synergy, leveraging each other's strengths to achieve the goals with greater speed <br> <strong>Pure of Distance - Caffeine Power - Daily Run</strong>
      </p>

      <!-- Countdown Boxes -->
      <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 mb-12">
        <div class="bg-white/10 backdrop-blur-lg rounded-xl py-6 px-4 shadow-md">
          <h3 id="days" class="text-4xl font-bold font-fallback text-white">00</h3>
          <p class="mt-2 text-sm tracking-widest uppercase text-white/80">Days</p>
        </div>
        <div class="bg-white/10 backdrop-blur-lg rounded-xl py-6 px-4 shadow-md">
          <h3 id="hours" class="text-4xl font-bold font-fallback text-white">00</h3>
          <p class="mt-2 text-sm tracking-widest uppercase text-white/80">Hours</p>
        </div>
        <div class="bg-white/10 backdrop-blur-lg rounded-xl py-6 px-4 shadow-md">
          <h3 id="minutes" class="text-4xl font-bold font-fallback text-white">00</h3>
          <p class="mt-2 text-sm tracking-widest uppercase text-white/80">Minutes</p>
        </div>
        <div class="bg-white/10 backdrop-blur-lg rounded-xl py-6 px-4 shadow-md">
          <h3 id="seconds" class="text-4xl font-bold font-fallback text-white">00</h3>
          <p class="mt-2 text-sm tracking-widest uppercase text-white/80">Seconds</p>
        </div>
      </div>
    </div>
  </section>

<section class="bg-white py-14 md:py-20 relative overflow-hidden">
  <div class="max-w-[1312px] mx-auto px-6 md:px-16 flex flex-col lg:flex-row items-center gap-12 lg:gap-20">
    
    <!-- Text Content -->
    <div class="flex-1 text-center lg:text-left text-gray-900 relative z-10">
      <h1 class="mb-6 text-3xl md:text-4xl lg:text-5xl font-bold leading-tight">
        Discover The Joy of <span class="text-green-600">Running</span> Together
      </h1>

      <!-- Info Cards -->
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-5 mt-8">
        <!-- Date -->
        <div class="flex flex-col items-center sm:items-start bg-green-50 border border-green-200 rounded-xl p-5 transition-all duration-300 ease-in-out hover:shadow-lg hover:-translate-y-1">
          <div class="bg-green-500 text-white p-3 rounded-lg mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
          </div>
          <p class="text-lg font-medium">Saturday, 16 August 2025</p>
        </div>
        
        <!-- Route -->
        <div class="flex flex-col items-center sm:items-start bg-green-50 border border-green-200 rounded-xl p-5 transition-all duration-300 ease-in-out hover:shadow-lg hover:-translate-y-1">
          <div class="bg-green-500 text-white p-3 rounded-lg mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <polyline points="22 12 18 12 15 21 9 3 6 12 2 12" />
            </svg>
          </div>
          <p class="text-lg font-medium">5K Route</p>
        </div>

        <!-- Location -->
        <div class="flex flex-col items-center sm:items-start bg-green-50 border border-green-200 rounded-xl p-5 transition-all duration-300 ease-in-out hover:shadow-lg hover:-translate-y-1">
          <div class="bg-green-500 text-white p-3 rounded-lg mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 21s-6-5.686-6-10a6 6 0 1112 0c0 4.314-6 10-6 10z" />
              <circle cx="12" cy="11" r="2" />
            </svg>
          </div>
          <p class="text-lg font-medium">POD Village - Tigris</p>
        </div>
      </div>

      <!-- Additional Info -->
      <ul class="mt-8 space-y-3 text-left">
        <li class="text-lg"><span class="font-semibold">Jersey Code:</span> PA.CE jersey black / white</li>
        <li class="text-lg text-green-600 font-semibold">FREE FOR ALL RUNNERS</li>
        <li class="text-lg">Fueled by Tigris and Fives.</li>
        <li class="text-lg">Tigris, Samarinda 75117</li>
      </ul>
    </div>

    <!-- Image -->
    <div class="flex-1 flex justify-center relative z-10">
      <img 
        src="{{ asset('images/pod_runners.jpeg') }}" 
        alt="A group of people running together during a marathon event" 
        loading="lazy"
        class="object-cover w-full max-w-md rounded-2xl shadow-lg transition-all duration-300 ease-in-out hover:scale-[1.02] hover:-translate-y-1"
      >
    </div>
  </div>

  <!-- Decorative background shapes -->
  <div class="absolute -top-20 -right-20 w-72 h-72 bg-green-100 rounded-full blur-3xl opacity-40"></div>
  <div class="absolute bottom-0 -left-20 w-72 h-72 bg-emerald-100 rounded-full blur-3xl opacity-40"></div>
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
