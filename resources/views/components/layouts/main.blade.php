<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? config('app.name', 'Pureofdistance') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
   <link href="{{ asset('dist/css/lightbox.min.css') }}" rel="stylesheet">


</head>

<body class="font-fallback- antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('components.navbar')
        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
        @include('components.footer')
    </div>
    <!-- Link to JavaScript file -->
    <!-- Add this line to include Font Awesome from CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('dist/js/lightbox.min.js') }}"></script>
</body>

</html>