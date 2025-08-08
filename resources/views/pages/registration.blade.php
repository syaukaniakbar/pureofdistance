<x-layouts.main>
  <x-slot:title>{{ 'Registration | Pureofdistance' }}</x-slot>

  <section class="min-h-screen flex items-center justify-center bg-gray-100 px-4 py-16">
    <div class="w-full max-w-2xl bg-white shadow-xl rounded-3xl border border-gray-200 p-8 sm:p-12">

      <!-- Header -->
      <div class="text-center mb-10">
        <h1 class="text-3xl sm:text-4xl font-extrabold text-gray-900">Daftar Pureofdistance</h1>
        <p class="mt-3 text-gray-500 text-sm sm:text-base">Silakan isi formulir dengan lengkap untuk melanjutkan proses pendaftaran.</p>
      </div>

      <form
        id="registrationForm"
        action="{{ route('register.store') }}"
        method="POST"
        enctype="multipart/form-data"
        class="space-y-6"
      >
        @csrf

        {{-- Success message --}}
        @if (session('success'))
        <div class="bg-green-100 text-green-800 px-4 py-3 rounded-md text-center">
          {{ session('success') }}
        </div>
        @endif

        {{-- Nama Lengkap --}}
        <div>
          <label for="nama" class="block text-sm font-semibold text-gray-700 mb-1">Nama Lengkap</label>
          <input
            type="text"
            id="nama"
            name="nama"
            value="{{ old('nama') }}"
            placeholder="Ex: JohnDoe"
            class="w-full p-3 border rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none"
          >
          @error('nama')
            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
          @enderror
        </div>

        {{-- Email --}}
        <div>
          <label for="email" class="block text-sm font-semibold text-gray-700 mb-1">Email</label>
          <input
            type="email"
            id="email"
            name="email"
            value="{{ old('email') }}"
            placeholder="Ex: JohnDoe@email.com"
            class="w-full p-3 border rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none"
          >
          @error('email')
            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
          @enderror
        </div>

        {{-- Nomor Handphone --}}
        <div>
          <label for="handphone" class="block text-sm font-semibold text-gray-700 mb-1">Nomor Handphone</label>
          <input
            type="text"
            id="handphone"
            name="handphone"
            value="{{ old('handphone') }}"
            maxlength="16"
            inputmode="numeric"
            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 16)"
            placeholder="Ex: 081234567890"
            class="w-full p-3 border rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none"
          >
          @error('handphone')
            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
          @enderror
        </div>

        {{-- Jenis Kelamin --}}
        <div>
          <label for="jenisKelamin" class="block text-sm font-semibold text-gray-700 mb-1">Jenis Kelamin</label>
          <select
            id="jenisKelamin"
            name="jenisKelamin"
            class="w-full p-3 border rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none"
          >
            <option value="" disabled {{ old('jenisKelamin') ? '' : 'selected' }}>Pilih Jenis Kelamin</option>
            <option value="Laki-laki" {{ old('jenisKelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
            <option value="Perempuan" {{ old('jenisKelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
          </select>
          @error('jenisKelamin')
            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
          @enderror
        </div>

        {{-- Submit --}}
        <div class="pt-4 text-center">
          <button
            type="button"
            onclick="openConfirmationModal()"
            class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold px-6 py-3 rounded-lg transition duration-200 shadow-md hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
          >
            Submit Formulir
          </button>
        </div>
      </form>
    </div>
  </section>

  <!-- Modal Konfirmasi -->
  <div
    id="confirmationModal"
    class="fixed inset-0 z-50 flex items-center justify-center bg-[rgba(0,0,0,0.4)] hidden"
  >
    <div class="bg-white rounded-xl shadow-lg p-6 w-full max-w-md animate-fade-in">
      <h2 class="text-lg font-semibold text-gray-800 mb-3">Konfirmasi Pengiriman</h2>
      <p class="text-gray-600 mb-6">Apakah Anda yakin ingin mengirim formulir ini?</p>
      <div class="flex justify-end gap-3">
        <button
          onclick="closeConfirmationModal()"
          class="px-4 py-2 rounded-lg border border-gray-300 text-gray-600 hover:bg-gray-100 transition"
        >
          Batal
        </button>
        <button
          onclick="submitForm()"
          class="px-4 py-2 rounded-lg bg-green-600 text-white hover:bg-green-700 transition"
        >
          Ya, Kirim
        </button>
      </div>
    </div>
  </div>

  <!-- Script Modal -->
  <script>
    const modal = document.getElementById("confirmationModal");
    const form = document.getElementById("registrationForm");

    function openConfirmationModal() {
      modal.classList.remove("hidden");
    }

    function closeConfirmationModal() {
      modal.classList.add("hidden");
    }

    function submitForm() {
      form.submit();
    }
  </script>

</x-layouts.main>
