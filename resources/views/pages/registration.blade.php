
<x-layouts.main>
    <x-slot:title>{{ 'Registration | Pureofdistance Run 2026' }}</x-slot:title>

    <section class="min-h-screen bg-[#FFFDF5] px-4 py-10 sm:px-6 lg:px-8 lg:py-16">

        <div class="mx-auto w-full max-w-5xl">

            {{-- =====================================================
                HEADER
            ====================================================== --}}
            <div class="mb-8 mt-12 overflow-hidden rounded-2xl bg-[#FFD600]">

                <div class="px-6 py-8 sm:px-10 sm:py-10">

                    <div class="mb-5 flex items-center gap-3">
                        <div class="h-2.5 w-2.5 rounded-full bg-black"></div>

                        <span class="text-sm font-bold uppercase tracking-widest text-black">
                            Registration 2026
                        </span>
                    </div>

                    <h1
                        class="max-w-3xl text-4xl font-black leading-none tracking-tight text-black sm:text-5xl lg:text-6xl"
                    >
                        Pureofdistance
                        <span class="text-white">Run 2026</span>
                    </h1>

                    <p class="mt-5 max-w-xl text-sm font-medium leading-6 text-black/70 sm:text-base">
                        Lengkapi data Anda untuk mengikuti pengalaman lari
                        Pureofdistance Run 2026.
                    </p>

                </div>

            </div>


            {{-- =====================================================
                MAIN CARD
            ====================================================== --}}
            <div class="overflow-hidden rounded-2xl border border-black/10 bg-white">

                {{-- =================================================
                    FORM HEADER
                ================================================== --}}
                <div class="border-b border-black/10 px-6 py-5 sm:px-8">

                    <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">

                        <div>
                            <p class="text-xs font-bold uppercase tracking-widest text-yellow-600">
                                Step 01
                            </p>

                            <h2 class="mt-1 text-xl font-black text-black">
                                Lengkapi Data Pelari
                            </h2>
                        </div>

                        <p class="text-xs font-medium text-slate-500">
                            <span class="text-red-500">*</span>
                            Wajib diisi
                        </p>

                    </div>

                </div>


                {{-- =================================================
                    FORM
                ================================================== --}}
                <div class="p-6 sm:p-8 lg:p-10">

                    <form
                        id="registrationForm"
                        action="{{ route('register.store') }}"
                        method="POST"
                        class="space-y-10"
                    >

                        @csrf


                        {{-- =================================================
                            SUCCESS MESSAGE
                        ================================================== --}}
                        @if (session('success'))

                            <div
                                class="border-l-4 border-yellow-400 bg-yellow-50 px-4 py-4"
                                role="alert"
                            >
                                <p class="text-sm font-bold text-black">
                                    Pendaftaran berhasil
                                </p>

                                <p class="mt-1 text-sm text-slate-600">
                                    {{ session('success') }}
                                </p>
                            </div>

                        @endif


                        {{-- =================================================
                            SECTION 01
                        ================================================== --}}
                        <section>

                            <div class="mb-6 border-b border-black/10 pb-4">

                                <div class="flex items-center gap-3">

                                    <span class="text-sm font-black text-yellow-600">
                                        01
                                    </span>

                                    <div>
                                        <h3 class="text-lg font-black text-black">
                                            Informasi Pribadi
                                        </h3>

                                        <p class="mt-1 text-sm text-slate-500">
                                            Data utama peserta.
                                        </p>
                                    </div>

                                </div>

                            </div>


                            <div class="grid grid-cols-1 gap-6 md:grid-cols-2">

                                {{-- Nama --}}
                                <div>

                                    <label
                                        for="nama"
                                        class="mb-2 block text-sm font-bold text-slate-800"
                                    >
                                        Nama Lengkap Sesuai KTP
                                        <span class="text-red-500">*</span>
                                    </label>

                                    <input
                                        type="text"
                                        id="nama"
                                        name="nama"
                                        value="{{ old('nama') }}"
                                        placeholder="Contoh: Budi Santoso"
                                        autocomplete="name"
                                        required
                                        class="form-input"
                                    >

                                    <p class="form-help">
                                        Digunakan untuk asuransi dan sertifikat.
                                    </p>

                                    @error('nama')
                                        <p class="form-error">
                                            {{ $message }}
                                        </p>
                                    @enderror

                                </div>


                                {{-- Email --}}
                                <div>

                                    <label
                                        for="email"
                                        class="mb-2 block text-sm font-bold text-slate-800"
                                    >
                                        Alamat Email
                                        <span class="text-red-500">*</span>
                                    </label>

                                    <input
                                        type="email"
                                        id="email"
                                        name="email"
                                        value="{{ old('email') }}"
                                        placeholder="Contoh: budi@email.com"
                                        autocomplete="email"
                                        required
                                        class="form-input"
                                    >

                                    <p class="form-help">
                                        E-Ticket dan Race Guide akan dikirim ke email ini.
                                    </p>

                                    @error('email')
                                        <p class="form-error">
                                            {{ $message }}
                                        </p>
                                    @enderror

                                </div>


                                {{-- WhatsApp --}}
                                <div>

                                    <label
                                        for="handphone"
                                        class="mb-2 block text-sm font-bold text-slate-800"
                                    >
                                        Nomor WhatsApp
                                        <span class="text-red-500">*</span>
                                    </label>

                                    <input
                                        type="text"
                                        id="handphone"
                                        name="handphone"
                                        value="{{ old('handphone') }}"
                                        maxlength="16"
                                        inputmode="numeric"
                                        autocomplete="tel"
                                        oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 16)"
                                        placeholder="Contoh: 081234567890"
                                        required
                                        class="form-input"
                                    >

                                    <p class="form-help">
                                        Pastikan nomor aktif dan terhubung dengan WhatsApp.
                                    </p>

                                    @error('handphone')
                                        <p class="form-error">
                                            {{ $message }}
                                        </p>
                                    @enderror

                                </div>


                                {{-- Gender + Golongan Darah --}}
                                <div class="grid grid-cols-2 gap-4">

                                    <div>

                                        <label
                                            for="jenisKelamin"
                                            class="mb-2 block text-sm font-bold text-slate-800"
                                        >
                                            Gender
                                            <span class="text-red-500">*</span>
                                        </label>

                                        <select
                                            id="jenisKelamin"
                                            name="jenisKelamin"
                                            required
                                            class="form-input cursor-pointer"
                                        >
                                            <option
                                                value=""
                                                disabled
                                                {{ old('jenisKelamin') ? '' : 'selected' }}
                                            >
                                                Pilih
                                            </option>

                                            <option
                                                value="Laki-laki"
                                                {{ old('jenisKelamin') == 'Laki-laki' ? 'selected' : '' }}
                                            >
                                                Pria
                                            </option>

                                            <option
                                                value="Perempuan"
                                                {{ old('jenisKelamin') == 'Perempuan' ? 'selected' : '' }}
                                            >
                                                Wanita
                                            </option>
                                        </select>

                                    </div>


                                    <div>

                                        <label
                                            for="golDarah"
                                            class="mb-2 block text-sm font-bold text-slate-800"
                                        >
                                            Gol. Darah
                                            <span class="text-red-500">*</span>
                                        </label>

                                        <select
                                            id="golDarah"
                                            name="golDarah"
                                            required
                                            class="form-input cursor-pointer"
                                        >
                                            <option
                                                value=""
                                                disabled
                                                {{ old('golDarah') ? '' : 'selected' }}
                                            >
                                                Pilih
                                            </option>

                                            <option value="A" {{ old('golDarah') == 'A' ? 'selected' : '' }}>
                                                A
                                            </option>

                                            <option value="B" {{ old('golDarah') == 'B' ? 'selected' : '' }}>
                                                B
                                            </option>

                                            <option value="AB" {{ old('golDarah') == 'AB' ? 'selected' : '' }}>
                                                AB
                                            </option>

                                            <option value="O" {{ old('golDarah') == 'O' ? 'selected' : '' }}>
                                                O
                                            </option>

                                        </select>

                                    </div>

                                    @error('jenisKelamin')
                                        <p class="col-span-2 form-error">
                                            {{ $message }}
                                        </p>
                                    @enderror

                                    @error('golDarah')
                                        <p class="col-span-2 form-error">
                                            {{ $message }}
                                        </p>
                                    @enderror

                                </div>

                            </div>

                        </section>


                        {{-- =================================================
                            SECTION 02
                        ================================================== --}}
                        <section>

                            <div class="mb-6 border-b border-black/10 pb-4">

                                <div class="flex items-center gap-3">

                                    <span class="text-sm font-black text-yellow-600">
                                        02
                                    </span>

                                    <div>

                                        <h3 class="text-lg font-black text-black">
                                            Kategori & Race Pack
                                        </h3>

                                        <p class="mt-1 text-sm text-slate-500">
                                            Pilih kategori lari dan ukuran jersey.
                                        </p>

                                    </div>

                                </div>

                            </div>


                            <div class="grid grid-cols-1 gap-6 md:grid-cols-2">

                                {{-- Kategori --}}
                                <div>

                                    <label
                                        for="kategori"
                                        class="mb-2 block text-sm font-bold text-slate-800"
                                    >
                                        Kategori Jarak
                                        <span class="text-red-500">*</span>
                                    </label>

                                    <select
                                        id="kategori"
                                        name="kategori"
                                        required
                                        class="form-input cursor-pointer"
                                    >
                                        <option
                                            value=""
                                            disabled
                                            {{ old('kategori') ? '' : 'selected' }}
                                        >
                                            Pilih Kategori Lari
                                        </option>

                                        <option
                                            value="5K"
                                            {{ old('kategori') == '5K' ? 'selected' : '' }}
                                        >
                                            5K Fun Run
                                        </option>

                                        <option
                                            value="10K"
                                            {{ old('kategori') == '10K' ? 'selected' : '' }}
                                        >
                                            10K Challenge
                                        </option>

                                        <option
                                            value="21K"
                                            {{ old('kategori') == '21K' ? 'selected' : '' }}
                                        >
                                            21K Half Marathon
                                        </option>

                                    </select>

                                    <p class="form-help">
                                        Pilih sesuai dengan kemampuan fisik Anda.
                                    </p>

                                    @error('kategori')
                                        <p class="form-error">
                                            {{ $message }}
                                        </p>
                                    @enderror

                                </div>


                                {{-- Jersey --}}
                                <div>

                                    <label
                                        for="ukuranJersey"
                                        class="mb-2 block text-sm font-bold text-slate-800"
                                    >
                                        Ukuran Jersey
                                        <span class="text-red-500">*</span>
                                    </label>

                                    <select
                                        id="ukuranJersey"
                                        name="ukuranJersey"
                                        required
                                        class="form-input cursor-pointer"
                                    >
                                        <option
                                            value=""
                                            disabled
                                            {{ old('ukuranJersey') ? '' : 'selected' }}
                                        >
                                            Pilih Ukuran
                                        </option>

                                        <option value="XS" {{ old('ukuranJersey') == 'XS' ? 'selected' : '' }}>
                                            XS (Extra Small)
                                        </option>

                                        <option value="S" {{ old('ukuranJersey') == 'S' ? 'selected' : '' }}>
                                            S (Small)
                                        </option>

                                        <option value="M" {{ old('ukuranJersey') == 'M' ? 'selected' : '' }}>
                                            M (Medium)
                                        </option>

                                        <option value="L" {{ old('ukuranJersey') == 'L' ? 'selected' : '' }}>
                                            L (Large)
                                        </option>

                                        <option value="XL" {{ old('ukuranJersey') == 'XL' ? 'selected' : '' }}>
                                            XL (Extra Large)
                                        </option>

                                        <option value="XXL" {{ old('ukuranJersey') == 'XXL' ? 'selected' : '' }}>
                                            XXL (Double XL)
                                        </option>

                                    </select>

                                    <p class="form-help">
                                        Size chart mengacu pada standar Asia.
                                    </p>

                                    @error('ukuranJersey')
                                        <p class="form-error">
                                            {{ $message }}
                                        </p>
                                    @enderror

                                </div>


                                {{-- BIB --}}
                                <div class="md:col-span-2">

                                    <label
                                        for="namaBib"
                                        class="mb-2 block text-sm font-bold text-slate-800"
                                    >
                                        Nama pada BIB (Nomor Dada)
                                        <span class="text-red-500">*</span>
                                    </label>

                                    <input
                                        type="text"
                                        id="namaBib"
                                        name="namaBib"
                                        value="{{ old('namaBib') }}"
                                        maxlength="12"
                                        placeholder="Contoh: BUDI S"
                                        required
                                        class="form-input font-bold uppercase tracking-wide"
                                    >

                                    <p class="form-help">
                                        Nama ini akan dicetak pada nomor dada Anda.
                                        Maksimal 12 karakter.
                                    </p>

                                    @error('namaBib')
                                        <p class="form-error">
                                            {{ $message }}
                                        </p>
                                    @enderror

                                </div>

                            </div>

                        </section>


                        {{-- =================================================
                            SECTION 03
                        ================================================== --}}
                        <section>

                            <div class="mb-6 border-b border-black/10 pb-4">

                                <div class="flex items-center gap-3">

                                    <span class="text-sm font-black text-yellow-600">
                                        03
                                    </span>

                                    <div>

                                        <h3 class="text-lg font-black text-black">
                                            Kontak Darurat
                                        </h3>

                                        <p class="mt-1 text-sm text-slate-500">
                                            Digunakan untuk kebutuhan keselamatan.
                                        </p>

                                    </div>

                                </div>

                            </div>


                            <div
                                class="border-l-4 border-yellow-400 bg-yellow-50 px-5 py-5 sm:px-6"
                            >

                                <div class="grid grid-cols-1 gap-6 md:grid-cols-2">

                                    {{-- Emergency Name --}}
                                    <div>

                                        <label
                                            for="kontakDaruratNama"
                                            class="mb-2 block text-sm font-bold text-slate-800"
                                        >
                                            Nama Kontak Darurat
                                            <span class="text-red-500">*</span>
                                        </label>

                                        <input
                                            type="text"
                                            id="kontakDaruratNama"
                                            name="kontakDaruratNama"
                                            value="{{ old('kontakDaruratNama') }}"
                                            placeholder="Contoh: Siti (Istri)"
                                            required
                                            class="form-input bg-white"
                                        >

                                        @error('kontakDaruratNama')
                                            <p class="form-error">
                                                {{ $message }}
                                            </p>
                                        @enderror

                                    </div>


                                    {{-- Emergency Phone --}}
                                    <div>

                                        <label
                                            for="kontakDaruratHp"
                                            class="mb-2 block text-sm font-bold text-slate-800"
                                        >
                                            Nomor HP Darurat
                                            <span class="text-red-500">*</span>
                                        </label>

                                        <input
                                            type="text"
                                            id="kontakDaruratHp"
                                            name="kontakDaruratHp"
                                            value="{{ old('kontakDaruratHp') }}"
                                            maxlength="16"
                                            inputmode="numeric"
                                            autocomplete="tel"
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 16)"
                                            placeholder="Contoh: 081298765432"
                                            required
                                            class="form-input bg-white"
                                        >

                                        @error('kontakDaruratHp')
                                            <p class="form-error">
                                                {{ $message }}
                                            </p>
                                        @enderror

                                    </div>

                                </div>

                            </div>

                        </section>


                        {{-- =================================================
                            SECTION 04 — REGION
                        ================================================== --}}
                        <section>

                            <div class="mb-6 border-b border-black/10 pb-4">

                                <div class="flex items-center gap-3">

                                    <span class="text-sm font-black text-yellow-600">
                                        04
                                    </span>

                                    <div>

                                        <h3 class="text-lg font-black text-black">
                                            Alamat
                                        </h3>

                                        <p class="mt-1 text-sm text-slate-500">
                                            Pilih provinsi, kota, kecamatan, dan desa/kelurahan.
                                        </p>

                                    </div>

                                </div>

                            </div>


                            <div class="grid grid-cols-1 gap-6 md:grid-cols-2">

                                {{-- Province --}}
                                <div>

                                    <label
                                        for="province_id"
                                        class="mb-2 block text-sm font-bold text-slate-800"
                                    >
                                        Provinsi
                                        <span class="text-red-500">*</span>
                                    </label>

                                    <select
                                        id="province_id"
                                        name="province_id"
                                        required
                                        class="form-input cursor-pointer"
                                    >

                                        <option value="">
                                            Pilih Provinsi
                                        </option>

                                        @foreach ($provinces as $province)

                                            <option
                                                value="{{ $province->id }}"
                                                {{ old('province_id') == $province->id ? 'selected' : '' }}
                                            >
                                                {{ $province->name }}
                                            </option>

                                        @endforeach

                                    </select>

                                    @error('province_id')
                                        <p class="form-error">
                                            {{ $message }}
                                        </p>
                                    @enderror

                                </div>


                                {{-- City --}}
                                <div>

                                    <label
                                        for="city_id"
                                        class="mb-2 block text-sm font-bold text-slate-800"
                                    >
                                        Kabupaten / Kota
                                        <span class="text-red-500">*</span>
                                    </label>

                                    <select
                                        id="city_id"
                                        name="city_id"
                                        required
                                        disabled
                                        class="form-input cursor-pointer"
                                    >

                                        <option value="">
                                            Pilih Kabupaten / Kota
                                        </option>

                                    </select>

                                    @error('city_id')
                                        <p class="form-error">
                                            {{ $message }}
                                        </p>
                                    @enderror

                                </div>


                                {{-- District --}}
                                <div>

                                    <label
                                        for="district_id"
                                        class="mb-2 block text-sm font-bold text-slate-800"
                                    >
                                        Kecamatan
                                        <span class="text-red-500">*</span>
                                    </label>

                                    <select
                                        id="district_id"
                                        name="district_id"
                                        required
                                        disabled
                                        class="form-input cursor-pointer"
                                    >

                                        <option value="">
                                            Pilih Kecamatan
                                        </option>

                                    </select>

                                    @error('district_id')
                                        <p class="form-error">
                                            {{ $message }}
                                        </p>
                                    @enderror

                                </div>


                                {{-- Village --}}
                                <div>

                                    <label
                                        for="village_id"
                                        class="mb-2 block text-sm font-bold text-slate-800"
                                    >
                                        Desa / Kelurahan
                                        <span class="text-red-500">*</span>
                                    </label>

                                    <select
                                        id="village_id"
                                        name="village_id"
                                        required
                                        disabled
                                        class="form-input cursor-pointer"
                                    >

                                        <option value="">
                                            Pilih Desa / Kelurahan
                                        </option>

                                    </select>

                                    @error('village_id')
                                        <p class="form-error">
                                            {{ $message }}
                                        </p>
                                    @enderror

                                </div>

                            </div>

                        </section>


                        {{-- =================================================
                            SUBMIT
                        ================================================== --}}
                        <div class="border-t border-black/10 pt-8">

                            <div class="flex flex-col items-center">

                                <button
                                    type="button"
                                    onclick="openConfirmationModal()"
                                    class="inline-flex w-full items-center justify-center gap-3 bg-black px-8 py-4 text-base font-black text-[#FFD600] transition duration-200 hover:bg-slate-800 focus:outline-none focus:ring-4 focus:ring-yellow-300 active:scale-[0.99] sm:w-auto sm:min-w-[300px]"
                                >
                                    <span>Daftar Sekarang</span>

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
                                            d="M13 7l5 5m0 0l-5 5m5-5H6"
                                        />
                                    </svg>

                                </button>

                                <p class="mt-4 text-center text-xs leading-5 text-slate-500">
                                    Dengan menekan tombol daftar, Anda menyetujui
                                    <a
                                        href="#"
                                        class="font-bold text-black underline decoration-yellow-400 decoration-2 underline-offset-2 hover:text-yellow-600"
                                    >
                                        Syarat & Ketentuan
                                    </a>
                                    event.
                                </p>

                            </div>

                        </div>

                    </form>

                </div>

            </div>


            {{-- Footer --}}
            <p class="mt-6 text-center text-xs font-medium text-slate-400">
                Pureofdistance Run 2026
            </p>

        </div>

    </section>


    {{-- =============================================================
        CONFIRMATION MODAL
    ============================================================== --}}
    <div
        id="confirmationModal"
        class="fixed inset-0 z-[100] hidden overflow-y-auto"
        aria-labelledby="modal-title"
        aria-describedby="modal-description"
        role="dialog"
        aria-modal="true"
        aria-hidden="true"
    >

        <div class="flex min-h-full items-center justify-center p-4">

            {{-- Backdrop --}}
            <div
                class="fixed inset-0 bg-black/60"
                onclick="closeConfirmationModal()"
                aria-hidden="true"
            ></div>


            {{-- Modal --}}
            <div
                class="relative my-8 w-full max-w-md border border-black/10 bg-white shadow-2xl"
            >

                {{-- Yellow Header --}}
                <div class="bg-[#FFD600] px-6 py-5">

                    <p class="text-xs font-black uppercase tracking-widest text-black">
                        Almost Done
                    </p>

                    <h3
                        id="modal-title"
                        class="mt-1 text-2xl font-black text-black"
                    >
                        Konfirmasi Pendaftaran
                    </h3>

                </div>


                {{-- Content --}}
                <div class="p-6 sm:p-7">

                    <p
                        id="modal-description"
                        class="text-sm leading-6 text-slate-600"
                    >
                        Pastikan seluruh data yang Anda masukkan sudah benar.
                        Setelah formulir dikirim,
                        <strong class="text-black">
                            data tidak dapat diubah kembali.
                        </strong>
                    </p>


                    {{-- Buttons --}}
                    <div class="mt-7 grid grid-cols-1 gap-3 sm:grid-cols-2">

                        <button
                            type="button"
                            onclick="closeConfirmationModal()"
                            class="w-full border border-black/15 bg-white px-5 py-3.5 text-sm font-bold text-black transition hover:bg-slate-50 focus:outline-none focus:ring-4 focus:ring-slate-100"
                        >
                            Periksa Kembali
                        </button>

                        <button
                            type="button"
                            onclick="submitForm()"
                            class="w-full bg-black px-5 py-3.5 text-sm font-bold text-[#FFD600] transition hover:bg-slate-800 focus:outline-none focus:ring-4 focus:ring-yellow-300"
                        >
                            Ya, Submit Data
                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- =============================================================
        TAILWIND COMPONENT STYLES
    ============================================================== --}}
    <style>
        .form-input {
            width: 100%;
            border-radius: 0.75rem;
            border: 1px solid rgb(226 232 240);
            background-color: rgb(248 250 252 / 0.7);
            padding: 0.875rem 1rem;
            font-size: 0.875rem;
            font-weight: 500;
            color: rgb(15 23 42);
            outline: none;
            transition:
                border-color 150ms ease,
                background-color 150ms ease,
                box-shadow 150ms ease;
        }

        .form-input::placeholder {
            color: rgb(148 163 184);
            font-weight: 400;
        }

        .form-input:hover {
            border-color: rgb(203 213 225);
            background-color: white;
        }

        .form-input:focus {
            border-color: #FFD600;
            background-color: white;
            box-shadow: 0 0 0 4px rgb(255 214 0 / 0.15);
        }

        .form-input:disabled {
            cursor: not-allowed;
            background-color: rgb(241 245 249);
            color: rgb(148 163 184);
        }

        .form-help {
            margin-top: 0.5rem;
            font-size: 0.75rem;
            line-height: 1.25rem;
            color: rgb(100 116 139);
        }

        .form-error {
            margin-top: 0.375rem;
            font-size: 0.875rem;
            font-weight: 500;
            color: rgb(220 38 38);
        }

        @media (prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
                scroll-behavior: auto !important;
            }
        }
    </style>


    {{-- =============================================================
        JAVASCRIPT
    ============================================================== --}}
    <script>
        const modal = document.getElementById("confirmationModal");
        const form = document.getElementById("registrationForm");

        const provinceSelect = document.getElementById("province_id");
        const citySelect = document.getElementById("city_id");
        const districtSelect = document.getElementById("district_id");
        const villageSelect = document.getElementById("village_id");

        let lastFocusedElement = null;


        // ============================================================
        // REGION HELPERS
        // ============================================================

        function resetSelect(select, placeholder) {

            select.innerHTML = `
                <option value="">
                    ${placeholder}
                </option>
            `;

            select.disabled = true;
        }


        function setLoading(select, text) {

            select.disabled = true;

            select.innerHTML = `
                <option value="">
                    ${text}
                </option>
            `;
        }


        function populateSelect(select, data, placeholder) {

            select.innerHTML = `
                <option value="">
                    ${placeholder}
                </option>
            `;

            data.forEach(item => {

                const option = document.createElement("option");

                option.value = item.id;
                option.textContent = item.name;

                select.appendChild(option);

            });

            select.disabled = false;
        }


        async function loadRegions(url, select, placeholder) {

            setLoading(select, "Memuat...");

            try {

                const response = await fetch(url, {
                    headers: {
                        "Accept": "application/json"
                    }
                });

                if (!response.ok) {
                    throw new Error("Failed to load region.");
                }

                const data = await response.json();

                populateSelect(
                    select,
                    data,
                    placeholder
                );

            } catch (error) {

                console.error(error);

                select.innerHTML = `
                    <option value="">
                        Gagal memuat data
                    </option>
                `;

                select.disabled = true;

            }
        }


        // ============================================================
        // PROVINCE → CITY
        // ============================================================

        provinceSelect.addEventListener("change", function () {

            const provinceId = this.value;

            resetSelect(
                citySelect,
                "Pilih Kabupaten / Kota"
            );

            resetSelect(
                districtSelect,
                "Pilih Kecamatan"
            );

            resetSelect(
                villageSelect,
                "Pilih Desa / Kelurahan"
            );

            if (!provinceId) {
                return;
            }

            loadRegions(
                `/regions/cities/${provinceId}`,
                citySelect,
                "Pilih Kabupaten / Kota"
            );

        });


        // ============================================================
        // CITY → DISTRICT
        // ============================================================

        citySelect.addEventListener("change", function () {

            const cityId = this.value;

            resetSelect(
                districtSelect,
                "Pilih Kecamatan"
            );

            resetSelect(
                villageSelect,
                "Pilih Desa / Kelurahan"
            );

            if (!cityId) {
                return;
            }

            loadRegions(
                `/regions/districts/${cityId}`,
                districtSelect,
                "Pilih Kecamatan"
            );

        });


        // ============================================================
        // DISTRICT → VILLAGE
        // ============================================================

        districtSelect.addEventListener("change", function () {

            const districtId = this.value;

            resetSelect(
                villageSelect,
                "Pilih Desa / Kelurahan"
            );

            if (!districtId) {
                return;
            }

            loadRegions(
                `/regions/villages/${districtId}`,
                villageSelect,
                "Pilih Desa / Kelurahan"
            );

        });


        // ============================================================
        // OPEN CONFIRMATION MODAL
        // ============================================================

        function openConfirmationModal() {

            if (!form.checkValidity()) {

                form.reportValidity();

                return;
            }

            lastFocusedElement = document.activeElement;

            modal.classList.remove("hidden");

            modal.setAttribute(
                "aria-hidden",
                "false"
            );

            document.body.classList.add(
                "overflow-hidden"
            );

            const firstButton =
                modal.querySelector("button");

            if (firstButton) {

                setTimeout(() => {
                    firstButton.focus();
                }, 50);

            }
        }


        // ============================================================
        // CLOSE CONFIRMATION MODAL
        // ============================================================

        function closeConfirmationModal() {

            modal.classList.add("hidden");

            modal.setAttribute(
                "aria-hidden",
                "true"
            );

            document.body.classList.remove(
                "overflow-hidden"
            );

            if (lastFocusedElement) {
                lastFocusedElement.focus();
            }
        }


        // ============================================================
        // SUBMIT FORM
        // ============================================================

        function submitForm() {

            if (!form.checkValidity()) {

                closeConfirmationModal();

                form.reportValidity();

                return;
            }

            const submitButton =
                modal.querySelector(
                    'button[onclick="submitForm()"]'
                );

            if (submitButton) {

                submitButton.disabled = true;

                submitButton.classList.add(
                    "cursor-not-allowed",
                    "opacity-70"
                );

                submitButton.innerHTML = `
                    <svg
                        class="h-4 w-4 animate-spin"
                        viewBox="0 0 24 24"
                        fill="none"
                    >
                        <circle
                            class="opacity-25"
                            cx="12"
                            cy="12"
                            r="10"
                            stroke="currentColor"
                            stroke-width="4"
                        ></circle>

                        <path
                            class="opacity-75"
                            fill="currentColor"
                            d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"
                        ></path>
                    </svg>

                    <span>Memproses...</span>
                `;

            }

            form.submit();
        }


        // ============================================================
        // ESCAPE KEY
        // ============================================================

        document.addEventListener("keydown", function(event) {

            if (
                event.key === "Escape" &&
                !modal.classList.contains("hidden")
            ) {
                closeConfirmationModal();
            }

        });
    </script>

</x-layouts.main>
