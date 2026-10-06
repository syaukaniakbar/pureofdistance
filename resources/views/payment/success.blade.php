<x-layouts.main>
    <x-slot:title>
        {{ 'Payment Success | Pureofdistance Run 2026' }}
    </x-slot>

    <section class="relative min-h-screen bg-slate-900 py-24 mt-10 px-4 sm:px-6 lg:px-8">

        <div class="max-w-3xl mx-auto">

            <div class="bg-white rounded-2xl shadow-xl p-10">

                {{-- Success Icon --}}
                <div class="flex justify-center">
                    <div class="w-20 h-20 rounded-full bg-green-100 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="w-10 h-10 text-green-600"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor"
                             stroke-width="2">
                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M5 13l4 4L19 7"/>
                        </svg>
                    </div>
                </div>

                <div class="text-center mt-6">
                    <h1 class="text-3xl font-bold text-gray-900">
                        Payment Successful 🎉
                    </h1>

                    <p class="mt-3 text-gray-600">
                        Thank you for registering for
                        <span class="font-semibold">Pureofdistance Run 2026</span>.
                    </p>

                    <p class="text-gray-500 mt-2">
                        Your registration has been confirmed.
                    </p>
                </div>

                <hr class="my-8">

                {{-- Registration Details --}}
                <h2 class="text-xl font-semibold mb-6">
                    Registration Information
                </h2>

                <div class="grid sm:grid-cols-2 gap-6">

                    <div>
                        <p class="text-sm text-gray-500">Full Name</p>
                        <p class="font-semibold">{{ $order->nama }}</p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500">Email</p>
                        <p class="font-semibold">{{ $order->email }}</p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500">Phone</p>
                        <p class="font-semibold">{{ $order->handphone }}</p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500">Category</p>
                        <p class="font-semibold">{{ $order->kategori }}</p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500">Jersey Size</p>
                        <p class="font-semibold">{{ $order->ukuranJersey }}</p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500">Bib Name</p>
                        <p class="font-semibold">{{ $order->namaBib }}</p>
                    </div>

                </div>

                <hr class="my-8">

                {{-- Payment Details --}}
                <h2 class="text-xl font-semibold mb-6">
                    Payment Details
                </h2>

                <div class="space-y-4">

                    <div class="flex justify-between">
                        <span class="text-gray-500">Order ID</span>
                        <span class="font-semibold">{{ $order->order_id }}</span>
                    </div>

                    <div class="flex justify-between">
                        <span class="text-gray-500">Transaction ID</span>
                        <span class="font-semibold">{{ $order->transaction_id }}</span>
                    </div>

                    <div class="flex justify-between">
                        <span class="text-gray-500">Payment Method</span>
                        <span class="font-semibold uppercase">
                            {{ $order->payment_type }}
                        </span>
                    </div>

                    <div class="flex justify-between">
                        <span class="text-gray-500">Status</span>

                        <span class="px-3 py-1 rounded-full bg-green-100 text-green-700 text-sm font-semibold">
                            PAID
                        </span>
                    </div>

                    <div class="flex justify-between">
                        <span class="text-gray-500">Paid At</span>

                        <span class="font-semibold">
                            {{ optional($order->paid_at)->format('d M Y H:i') }}
                        </span>
                    </div>

                </div>

                <hr class="my-8">

                <div class="text-center space-y-3">

                    <p class="text-gray-600">
                        A confirmation email has been sent to:
                    </p>

                    <p class="font-semibold text-indigo-600">
                        {{ $order->email }}
                    </p>

                    <a href="{{ route('home') }}"
                       class="inline-block mt-6 bg-indigo-600 hover:bg-indigo-700 text-white px-8 py-3 rounded-xl font-semibold transition">
                        Back to Home
                    </a>

                </div>

            </div>

        </div>

    </section>

</x-layouts.main>