<x-layouts.main>
    <x-slot:title>Rules</x-slot:title>

    <section class="bg-white text-neutral-950">

        {{-- =========================================================
            HERO / PAGE HEADER
        ========================================================== --}}
        <header class="relative isolate overflow-hidden bg-neutral-950 text-white">
            <div
                aria-hidden="true"
                class="absolute inset-y-0 left-0 w-1 bg-[#F5C400]"
            ></div>

            <div
                aria-hidden="true"
                class="pointer-events-none absolute -right-20 -top-20 h-56 w-56 rounded-full border border-[#F5C400]/10"
            ></div>

            <div
                aria-hidden="true"
                class="pointer-events-none absolute bottom-0 right-12 hidden h-px w-40 bg-[#F5C400]/30 sm:block"
            ></div>

            <div
                class="relative mx-auto max-w-6xl px-5 pb-16 pt-28 sm:px-6 sm:pb-20 sm:pt-32 lg:px-8"
            >
                <div class="max-w-3xl">

                    {{-- Eyebrow --}}
                    <div class="mb-5 flex items-center gap-3">
                        <span
                            aria-hidden="true"
                            class="h-px w-10 bg-[#F5C400]"
                        ></span>

                        <span
                            class="
                                text-[10px] font-black uppercase
                                tracking-[0.24em]
                                text-[#F5C400]
                                sm:text-xs
                            "
                        >
                            Race Information
                        </span>
                    </div>

                    {{-- Heading --}}
                    <h1
                        class="
                            text-4xl font-black uppercase
                            leading-[0.95] tracking-tight
                            sm:text-5xl
                            lg:text-7xl
                        "
                    >
                        Rules &
                        <span class="text-[#F5C400]">Regulations</span>
                    </h1>

                    <p
                        class="
                            mt-6 max-w-2xl
                            text-sm leading-7
                            text-neutral-400
                            sm:text-base sm:leading-8
                        "
                    >
                        Please read the following rules and regulations carefully
                        before registering and participating in the event.
                    </p>

                    <div
                        class="
                            mt-8 flex flex-wrap
                            gap-x-6 gap-y-3
                            text-xs font-bold uppercase
                            tracking-wide text-neutral-400
                        "
                    >
                        <span class="flex items-center gap-2">
                            <span class="h-1.5 w-1.5 rounded-full bg-[#F5C400]"></span>
                            Official Rules
                        </span>

                        <span class="flex items-center gap-2">
                            <span class="h-1.5 w-1.5 rounded-full bg-[#004122]"></span>
                            Participant Guide
                        </span>
                    </div>
                </div>
            </div>
        </header>


        {{-- =========================================================
            RULES CONTENT
        ========================================================== --}}
        <div
            class="
                mx-auto grid max-w-6xl
                grid-cols-1 gap-10
                px-5 py-12
                sm:px-6 sm:py-16
                lg:grid-cols-[220px_minmax(0,1fr)]
                lg:gap-16
                lg:px-8 lg:py-20
            "
        >

            {{-- Desktop Table of Contents --}}
            <aside class="hidden lg:block">
                <div class="sticky top-28">

                    <p
                        class="
                            text-[10px] font-black uppercase
                            tracking-[0.2em]
                            text-neutral-400
                        "
                    >
                        On this page
                    </p>

                    <nav class="mt-5" aria-label="Rules sections">
                        <ol class="space-y-1 border-l border-neutral-200">
                            <li>
                                <a
                                    href="#terms"
                                    class="
                                        block border-l-2 border-[#F5C400]
                                        py-2 pl-4
                                        text-sm font-bold
                                        text-neutral-950
                                    "
                                >
                                    Syarat & Ketentuan
                                </a>
                            </li>

                            <li>
                                <a
                                    href="#registration"
                                    class="rules-nav-link"
                                >
                                    Pendaftaran
                                </a>
                            </li>

                            <li>
                                <a
                                    href="#competition"
                                    class="rules-nav-link"
                                >
                                    Ketentuan Lomba
                                </a>
                            </li>

                            <li>
                                <a
                                    href="#route"
                                    class="rules-nav-link"
                                >
                                    Pengawasan Rute
                                </a>
                            </li>

                            <li>
                                <a
                                    href="#bib"
                                    class="rules-nav-link"
                                >
                                    Nomor Bib
                                </a>
                            </li>

                            <li>
                                <a
                                    href="#prizes"
                                    class="rules-nav-link"
                                >
                                    Hadiah
                                </a>
                            </li>

                            <li>
                                <a
                                    href="#documentation"
                                    class="rules-nav-link"
                                >
                                    Dokumentasi
                                </a>
                            </li>

                            <li>
                                <a
                                    href="#important"
                                    class="rules-nav-link"
                                >
                                    Informasi Penting
                                </a>
                            </li>

                            <li>
                                <a
                                    href="#other"
                                    class="rules-nav-link"
                                >
                                    Hal-Hal Lain
                                </a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </aside>


            {{-- Main Rules --}}
            <main class="min-w-0">

                <div class="mb-12 border-b border-neutral-200 pb-8">
                    <p class="text-sm leading-7 text-neutral-500 sm:text-base sm:leading-8">
                        Seluruh peserta wajib memahami dan mematuhi peraturan
                        yang berlaku selama proses pendaftaran, pengambilan
                        racepack, pelaksanaan lomba, hingga proses setelah
                        perlombaan selesai.
                    </p>
                </div>


                {{-- 01 --}}
                <section
                    id="terms"
                    class="scroll-mt-28 border-b border-neutral-200 pb-12 sm:pb-14"
                >
                    <div class="rule-section">
                        <span class="rule-number">01</span>

                        <div class="min-w-0 flex-1">
                            <h2 class="rule-heading">
                                Syarat dan Ketentuan
                            </h2>

                            <ol class="mt-7 space-y-5">
                                <li class="rule-item">
                                    Peserta kategori 5K Men harus merupakan laki-laki.
                                </li>

                                <li class="rule-item">
                                    Peserta kategori 5K Women harus merupakan perempuan.
                                </li>

                                <li class="rule-item">
                                    Panitia berhak melakukan pengecekan usia peserta
                                    sebelum, saat, maupun setelah lomba berlangsung.
                                    Pengecualian hanya dapat dilakukan dengan persetujuan
                                    dari pihak penyelenggara.
                                </li>

                                <li class="rule-item">
                                    Pendaftaran akan ditutup secara otomatis jika kuota
                                    peserta telah tercapai.
                                </li>

                                <li class="rule-item">
                                    Panitia dapat membatalkan pendaftaran apabila ditemukan
                                    adanya pemindahtanganan atau penjualan slot lomba
                                    kepada pihak lain.
                                </li>

                                <li class="rule-item">
                                    Biaya yang telah dibayarkan untuk pendaftaran
                                    tidak dapat dikembalikan.
                                </li>

                                <li class="rule-item">
                                    Penyelenggara dapat menolak pendaftaran tanpa
                                    keharusan memberikan alasan.
                                </li>

                                <li class="rule-item">
                                    Jika pendaftar memberikan data yang tidak valid,
                                    tidak menyelesaikan pembayaran, atau tidak memenuhi
                                    ketentuan pada formulir, maka pendaftarannya
                                    dapat dibatalkan.
                                </li>

                                <li class="rule-item">
                                    Jika perlombaan dibatalkan akibat kondisi di luar
                                    kendali seperti bencana alam, hujan ekstrem,
                                    wabah penyakit, kerusuhan, atau hal lain yang
                                    dianggap membahayakan, maka panitia tidak berkewajiban
                                    mengembalikan biaya pendaftaran.
                                </li>

                                <li class="rule-item">
                                    Penyelenggara dapat menolak peserta yang dianggap
                                    tidak dalam kondisi sehat untuk berpartisipasi.
                                    Jika terjadi cedera selama lomba, peserta bisa
                                    mendapatkan perawatan di rumah sakit yang ditunjuk
                                    sesuai dengan batas biaya yang telah disepakati.
                                </li>

                                <li class="rule-item">
                                    Panitia dapat mendiskualifikasi peserta serta
                                    membatalkan hasil perlombaan jika ditemukan
                                    pelanggaran terhadap peraturan. Biaya pendaftaran
                                    tidak akan dikembalikan dalam kasus ini.
                                </li>
                            </ol>
                        </div>
                    </div>
                </section>


                {{-- 02 --}}
                <section
                    id="registration"
                    class="scroll-mt-28 border-b border-neutral-200 py-12 sm:py-14"
                >
                    <div class="rule-section">
                        <span class="rule-number">02</span>

                        <div class="min-w-0 flex-1">
                            <h2 class="rule-heading">
                                Pendaftaran
                            </h2>

                            <ol class="mt-7 space-y-5">
                                <li class="rule-item">
                                    Proses pendaftaran hanya dilakukan melalui situs resmi
                                    <a
                                        href="https://www.uwgmrunfestival.com"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="rules-link"
                                    >
                                        www.uwgmrunfestival.com
                                    </a>.
                                </li>

                                <li class="rule-item">
                                    Peserta diwajibkan memilih kategori yang sesuai
                                    dengan usianya.
                                </li>

                                <li class="rule-item">
                                    Data yang dimasukkan saat pendaftaran harus akurat
                                    dan lengkap, termasuk tanggal lahir. Kesalahan data
                                    dapat mengakibatkan pembatalan pendaftaran maupun
                                    diskualifikasi saat lomba.
                                </li>

                                <li class="rule-item">
                                    Setelah menyelesaikan pembayaran, peserta akan
                                    menerima konfirmasi melalui email.
                                </li>

                                <li class="rule-item">
                                    Bila dalam tiga hari peserta belum mendapatkan
                                    konfirmasi, harap segera menghubungi panitia melalui
                                    WhatsApp, Instagram @uwgmofficial, atau menu kontak
                                    di website.
                                </li>

                                <li class="rule-item">
                                    Peserta wajib mengambil racepack yang berisi kaos,
                                    nomor bib, dan souvenir di lokasi dan waktu yang
                                    ditentukan, dengan menunjukkan barcode serta
                                    identitas asli yang sesuai dengan data pendaftaran.
                                </li>

                                <li class="rule-item">
                                    Pengambilan racepack oleh orang lain tidak diizinkan
                                    tanpa adanya surat kuasa resmi.
                                </li>
                            </ol>
                        </div>
                    </div>
                </section>


                {{-- 03 --}}
                <section
                    id="competition"
                    class="scroll-mt-28 border-b border-neutral-200 py-12 sm:py-14"
                >
                    <div class="rule-section">
                        <span class="rule-number">03</span>

                        <div class="min-w-0 flex-1">
                            <h2 class="rule-heading">
                                Ketentuan Lomba
                            </h2>

                            <ol class="mt-7 space-y-5">
                                <li class="rule-item">
                                    Nomor bib yang diberikan tidak boleh dipindah atau
                                    digunakan oleh orang lain.
                                </li>

                                <li class="rule-item">
                                    Peserta yang diketahui mengonsumsi zat terlarang
                                    atau memberikan informasi palsu dapat langsung
                                    didiskualifikasi tanpa pengembalian biaya.
                                </li>

                                <li class="rule-item">
                                    Peserta wajib mematuhi semua instruksi dari panitia,
                                    tim medis, dan petugas keamanan sepanjang lomba
                                    berlangsung.
                                </li>

                                <li class="rule-item">
                                    Bagi peserta yang merasa keberatan dengan hasil lomba,
                                    diberikan waktu 30 menit setelah hasil diumumkan
                                    atau hadiah diberikan untuk mengajukan protes.
                                    Setiap pengajuan dikenakan biaya sebesar Rp 500.000,-.
                                </li>
                            </ol>
                        </div>
                    </div>
                </section>


                {{-- 04 --}}
                <section
                    id="route"
                    class="scroll-mt-28 border-b border-neutral-200 py-12 sm:py-14"
                >
                    <div class="rule-section">
                        <span class="rule-number">04</span>

                        <div class="min-w-0 flex-1">
                            <h2 class="rule-heading">
                                Pengawasan Rute Lomba
                            </h2>

                            <ol class="mt-7 space-y-5">
                                <li class="rule-item">
                                    Peserta yang tidak mematuhi petunjuk dari panitia
                                    atau bertindak tidak sportif dapat dikeluarkan
                                    dari kompetisi.
                                </li>

                                <li class="rule-item">
                                    Peserta yang kedapatan memotong jalur atau melakukan
                                    kecurangan lainnya akan langsung didiskualifikasi.
                                </li>

                                <li class="rule-item">
                                    Mengikuti lomba tanpa nomor bib resmi akan dikenakan
                                    sanksi berupa penghentian dari perlombaan.
                                </li>
                            </ol>
                        </div>
                    </div>
                </section>


                {{-- 05 --}}
                <section
                    id="bib"
                    class="scroll-mt-28 border-b border-neutral-200 py-12 sm:py-14"
                >
                    <div class="rule-section">
                        <span class="rule-number">05</span>

                        <div class="min-w-0 flex-1">
                            <h2 class="rule-heading">
                                Penggunaan Nomor Bib
                            </h2>

                            <ol class="mt-7 space-y-5">
                                <li class="rule-item">
                                    Nomor bib harus dikenakan dari garis start hingga finish.
                                </li>

                                <li class="rule-item">
                                    Peserta yang kehilangan bib saat perlombaan
                                    berlangsung akan langsung didiskualifikasi.
                                </li>

                                <li class="rule-item">
                                    Nomor bib wajib dipasang di bagian dada dan terlihat jelas.
                                </li>

                                <li class="rule-item">
                                    Peserta hanya diperbolehkan memulai lomba sesuai
                                    waktu start yang telah ditentukan.
                                </li>
                            </ol>
                        </div>
                    </div>
                </section>


                {{-- 06 --}}
                <section
                    id="prizes"
                    class="scroll-mt-28 border-b border-neutral-200 py-12 sm:py-14"
                >
                    <div class="rule-section">
                        <span class="rule-number">06</span>

                        <div class="min-w-0 flex-1">
                            <h2 class="rule-heading">
                                Hadiah
                            </h2>

                            <ol class="mt-7 space-y-5">
                                <li class="rule-item">
                                    Penentuan pemenang menggunakan waktu tembakan start
                                    (gun time).
                                </li>

                                <li class="rule-item">
                                    Hadiah disediakan untuk peserta pria dan wanita
                                    di semua kategori.
                                </li>

                                <li class="rule-item">
                                    Lima besar di masing-masing kategori akan diumumkan
                                    dan menerima hadiah di podium.
                                </li>

                                <li class="rule-item">
                                    Hadiah diberikan dalam bentuk uang Rupiah dan dikenakan
                                    potongan sesuai peraturan perpajakan.
                                </li>
                            </ol>
                        </div>
                    </div>
                </section>


                {{-- 07 --}}
                <section
                    id="documentation"
                    class="scroll-mt-28 border-b border-neutral-200 py-12 sm:py-14"
                >
                    <div class="rule-section">
                        <span class="rule-number">07</span>

                        <div class="min-w-0 flex-1">
                            <h2 class="rule-heading">
                                Foto dan Dokumentasi
                            </h2>

                            <p class="mt-7 rule-item">
                                Foto dan video yang diambil selama lomba bisa digunakan
                                oleh panitia untuk keperluan publikasi atau promosi acara
                                di masa yang akan datang.
                            </p>
                        </div>
                    </div>
                </section>


                {{-- 08 --}}
                <section
                    id="important"
                    class="scroll-mt-28 border-b border-neutral-200 py-12 sm:py-14"
                >
                    <div class="rule-section">
                        <span class="rule-number">08</span>

                        <div class="min-w-0 flex-1">
                            <h2 class="rule-heading">
                                Informasi Penting
                            </h2>

                            <div class="mt-7 space-y-5">
                                <p class="rule-item">
                                    Dengan mendaftar, peserta dianggap telah membaca dan
                                    menyetujui semua peraturan, ketentuan, dan informasi
                                    terkait lomba.
                                </p>

                                <p class="rule-item">
                                    Peserta memahami bahwa kegiatan ini mengandung risiko,
                                    termasuk cedera, cacat, hingga kematian, dan bersedia
                                    membebaskan penyelenggara dari tanggung jawab atas
                                    kejadian tersebut kecuali jika disebabkan oleh
                                    kelalaian yang disengaja.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>


                {{-- 09 --}}
                <section
                    id="other"
                    class="scroll-mt-28 py-12 sm:py-14"
                >
                    <div class="rule-section">
                        <span class="rule-number">09</span>

                        <div class="min-w-0 flex-1">
                            <h2 class="rule-heading">
                                Hal-Hal Lain
                            </h2>

                            <p class="mt-7 rule-item">
                                Segala hal yang belum tercantum dalam peraturan ini
                                akan ditentukan kemudian. Penyelenggara berhak melakukan
                                penyesuaian aturan jika diperlukan demi kelancaran kegiatan.
                            </p>
                        </div>
                    </div>
                </section>

            </main>
        </div>


        {{-- Final Notice --}}
        <div class="border-t border-neutral-200 bg-neutral-50">
            <div class="mx-auto max-w-6xl px-5 py-10 sm:px-6 sm:py-12 lg:px-8">
                <div
                    class="
                        flex flex-col gap-5
                        border-l-4 border-[#F5C400]
                        pl-5
                        sm:flex-row sm:items-center sm:justify-between
                        sm:pl-6
                    "
                >
                    <div>
                        <p class="text-sm font-black uppercase tracking-wide text-neutral-950">
                            Please read before registering
                        </p>

                        <p class="mt-1 text-sm leading-6 text-neutral-500">
                            Pastikan seluruh informasi dan ketentuan telah dipahami
                            sebelum melakukan pendaftaran.
                        </p>
                    </div>

                    <a
                        href="#terms"
                        class="
                            inline-flex shrink-0 items-center
                            text-sm font-black uppercase
                            tracking-wide text-neutral-950
                            transition-colors
                            hover:text-[#004122]
                        "
                    >
                        Back to rules

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="2"
                            stroke="currentColor"
                            class="ml-2 h-4 w-4"
                            aria-hidden="true"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M5 12h14m-6-6 6 6-6 6"
                            />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

    </section>

    <style>
        .rule-section {
            display: flex;
            gap: 1rem;
        }

        .rule-number {
            flex-shrink: 0;
            padding-top: 0.25rem;
            color: #f5c400;
            font-size: 0.875rem;
            font-weight: 900;
            font-variant-numeric: tabular-nums;
        }

        .rule-heading {
            font-size: 1.5rem;
            font-weight: 900;
            letter-spacing: -0.025em;
            text-transform: uppercase;
        }

        .rule-item {
            position: relative;
            padding-left: 1.5rem;
            color: rgb(82 82 91);
            font-size: 0.9375rem;
            line-height: 1.75rem;
        }

        .rule-item::before {
            content: "";
            position: absolute;
            left: 0;
            top: 0.7rem;
            width: 0.375rem;
            height: 0.375rem;
            border-radius: 9999px;
            background: #f5c400;
        }

        .rules-nav-link {
            display: block;
            border-left: 2px solid transparent;
            padding: 0.5rem 0 0.5rem 1rem;
            font-size: 0.875rem;
            color: rgb(115 115 115);
            transition:
                color 200ms ease,
                border-color 200ms ease;
        }

        .rules-nav-link:hover {
            border-color: #f5c400;
            color: rgb(23 23 23);
        }

        .rules-link {
            font-weight: 600;
            color: #004122;
            text-decoration-line: underline;
            text-decoration-color: #f5c400;
            text-decoration-thickness: 2px;
            text-underline-offset: 4px;
        }

        .rules-link:hover {
            color: rgb(23 23 23);
        }

        @media (min-width: 640px) {
            .rule-section {
                gap: 1.5rem;
            }

            .rule-item {
                font-size: 1rem;
                line-height: 1.875rem;
            }

            .rule-heading {
                font-size: 1.875rem;
            }
        }
    </style>

</x-layouts.main>
