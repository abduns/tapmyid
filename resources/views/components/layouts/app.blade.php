<!DOCTYPE html>
<html lang="en"  class="h-full scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Primary Meta Tags -->
    <title>Publish What You Pay (PWYP) Indonesia</title>
    <meta name="title" content="Abdun - I do design, develop, and maintain apps." />
    <meta name="description" content="Undangan Pernikahan Ratri & Pahlevy pada 6 Januari 2023." />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://abduns.com/" />
    <meta property="og:title" content="Abdun - I do design, develop, and maintain apps." />
    <meta property="og:description" content="Undangan Pernikahan Ratri & Pahlevy pada 6 Januari 2023." />
    <meta property="og:image" content="{{ asset('assets/img/logo/og.jpeg') }}" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://abduns.com/" />
    <meta property="twitter:title" content="Abdun - I do design, develop, and maintain apps." />
    <meta property="twitter:description" content="Undangan Pernikahan Ratri & Pahlevy pada 6 Januari 2023." />
    <meta property="twitter:image" content="{{ asset('ssets/img/logo/og.jpeg') }}" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/logo/favicon.png') }}">

    <!-- Leaflet Styles -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <!-- Fonts -->
    <link rel="astylesheet" href="https://rsms.me/inter/inter.css">

    @vite('resources/css/app.css')

    {{-- Laravel Styles --}}
    @livewireStyles

    @vite('resources/js/app.js')
    @livewireScripts

</head>
<body class="min-h-screen h-screen font-sans">

    {{ $slot }}

    {{-- custom js --}}
    @stack('scripts')

</body>
</html>
