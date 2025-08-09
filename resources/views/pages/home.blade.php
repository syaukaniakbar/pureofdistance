<x-layouts.main>
  <x-slot:title>{{ 'Home | Pureofdistance' }}</x-slot>

  <section class="relative flex justify-center overflow-hidden bg-black  py-14 md:py-20 mt-20 md:mt-0 lg:h-screen">
    <img 
      src="/gallery/image_1.jpeg" 
      alt="Running Event Banner" 
      class="absolute inset-0 w-full h-full object-cover opacity-40"
    >
    <div class="absolute inset-0 bg-black opacity-30"></div>
    <div class="relative flex flex-col items-start justify-center max-w-[1312px] w-full px-6 md:px-16 z-10">
      <div class="max-w-xl text-left text-white">
        <h1 class="mb-4 mt-8 text-3xl font-bold font-fallback leading-tight md:text-4xl lg:text-5xl drop-shadow-lg">
          <!-- JOIN THE ULTIMATE RUNNING CHALLENGE TODAY! -->
           Your Run. Your Destiny. Let’s Make It Pure.
        </h1>
        <p class="mb-6 text-lg md:text-xl font-fallback">
          Unlock the power of synergy, leveraging each other's strengths to achieve the goals with greater speed.
          <!-- <br>Pure of Distance - Caffeine Power - Daily Run -->
        </p>
        <div class="flex gap-4 flex-row">
          <a href="/registration">
            <button class="border font-fallback border-white rounded-md bg-white text-black font-semibold hover:bg-gray-100 hover:opacity-90 py-2 px-6 transition hover:cursor-pointer">
              Join Our Movement!
            </button>
          </a>
          <!-- <a href="#learn-more">
            <button class="border border-white rounded-md bg-transparent text-white font-semibold  hover:bg-opacity-90 py-2 px-6 transition hover:cursor-pointer">
              Learn More
            </button>
          </a> -->
        </div>
      </div>
    </div>
  </section>

<section class="py-20 bg-gradient-to-b from-gray-50 to-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
      <!-- Judul -->
    <div class="text-center mb-14">
      <h2 class="text-3xl sm:text-4xl font-extrabold font-fallback tracking-tight text-gray-900">
        Photo Gallery
      </h2>
      <p class="mt-4 text-base font-fallback sm:text-lg text-gray-600 max-w-2xl mx-auto">
            Capturing every stride, the spirit of togetherness, and unforgettable moments along every track.
      </p>
    </div>


    <!-- Grid -->
    <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-3 gap-5">
      @foreach ([
        ['image_3.jpeg', 'pureofdistance-image_3'],
        ['image_2.jpeg', 'pureofdistance-image_2'],
        ['image_4.jpeg', 'pureofdistance-image_4'],
        ['image_5.jpeg', 'pureofdistance-image_5'],
        ['image_6.jpeg', 'pureofdistance-image_6'],
        ['image_7.jpeg', 'pureofdistance-image_7'],
        ['image_8.jpeg', 'pureofdistance-image_8'],
        ['image_9.jpeg', 'pureofdistance-image_9'],
      ] as $item)
        <a 
          href="{{ asset('gallery/' . $item[0]) }}" 
          data-lightbox="gallery" 
          data-title="{{ $item[1] }}"
          class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500"
        >
          <!-- Gambar -->
          <img 
            src="{{ asset('gallery/' . $item[0]) }}" 
            alt="{{ $item[1] }}" 
            class="w-full h-56 sm:h-64 lg:h-72 object-cover transform group-hover:scale-110 transition-transform duration-700 ease-out"
            loading="lazy"
          >
          
          <!-- Overlay -->
          <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent 
                      opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-4">
            <span class="text-white font-semibold text-sm sm:text-base tracking-wide">
              {{ $item[1] }}
            </span>
          </div>
        </a>
      @endforeach
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
      <h2 class="text-4xl md:text-5xl font-bold font-fallback tracking-tight mb-6 ">
        <!-- We Are Coming Soon -->
        Few Days Left – Register Now!
      </h2>
      <p class="text-base font-fallback md:text-lg text-white/80 mb-12 max-w-xl mx-auto">
        <strong class="text-white">150 runners.</strong> One unforgettable run. The clock is ticking—are you in?


        <!-- Get ready to experience the thrill of running! <br>          
        Join us for <span class="font-bold text-white">Pure of the Distance</span> and be part of something special! -->
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

  <section class="flex justify-center py-10 mx-auto bg-white md:py-14">
    <div class="relative gap-4 flex flex-row items-start justify-center max-w-[1312px] w-full px-6 md:px-16 z-10">
      <div class="md:w-2/3 w-full text-center md:text-left  text-black pr-0 md:pr-10">
        <h1 class="mb-4 mt-8 text-3xl font-bold font-fallback leading-tight md:text-4xl lg:text-5xl drop-shadow-lg">
          Discover The Joy of Running Together
        </h1>
        <p class="mb-6 text-lg md:text-xl font-fallback">
          <strong class="text-black">POD</strong> is not a running club, but rather a sport activity movement created for all runners.
          <strong class="text-black">POD</strong> was born in Borneo and will bring the sweat to all city.        </p>
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
