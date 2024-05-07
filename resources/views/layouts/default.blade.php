<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>@yield('title', 'Sasco Petroniaga - Penyedia Bahan Bakar Industri Terpercaya')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="@yield('title', 'Sasco Petroniaga - Penyedia Bahan Bakar Industri Terpercaya')">
    <meta property="og:title" content="@yield('title', 'Sasco Petroniaga - Penyedia Bahan Bakar Industri Terpercaya')">
    <meta name="description" content="@yield('description', 'Sejak 2016, Sasco Petroniaga menjadi penyedia terpercaya bahan bakar minyak industri (HSD/solar) di Kepulauan Riau, menawarkan layanan tepat waktu dengan kualitas dan harga kompetitif.')">
    <meta property="og:description" content="@yield('description', 'Sejak 2016, Sasco Petroniaga menjadi penyedia terpercaya bahan bakar minyak industri (HSD/solar) di Kepulauan Riau, menawarkan layanan tepat waktu dengan kualitas dan harga kompetitif.')">
    <meta property="og:type" content="website">
    <meta property="og:image" content="sascopetroniaga.id/favicon.ico">
    <meta property="og:image:width" content="58">
    <meta property="og:image:height" content="112">
    <meta name="keywords"
        content="energy, oil, gas, diesel, solar, fuel, MGO, pertadex, dexlite, supplier, distributor, industry, marine, batam,  Kepulauan Riau, Indonesia">
    <meta name="twitter:creator" content="Sasco Petroniaga">
    <meta name="twitter:title" content="@yield('title', 'Sasco Petroniaga - Penyedia Bahan Bakar Industri Terpercaya')">
    <meta name="twitter:description" content="@yield('description', 'Sejak 2016, Sasco Petroniaga menjadi penyedia terpercaya bahan bakar minyak industri (HSD/solar) di Kepulauan Riau, menawarkan layanan tepat waktu dengan kualitas dan harga kompetitif.')">

    <meta name="robots" content="{{ env('APP_ENV') === 'production' ? 'index, follow' : 'noindex, nofollow' }}">
    @vite('resources/css/app.css')

    {{-- Alphine.JS --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- Canonical Tag --}}
    {!! '<link rel="canonical" href="https://sascopetroniaga.id' .
        (Request::path() !== '/' ? '/' : '') .
        Request::path() .
        '"/>' !!}

</head>

<body>
    <x-header />

    <main class="min-h-[calc(100vh_-_56px)] md:min-h-[calc(100vh_-_123px)]">
        @yield('content')
    </main>

    <x-footer />
</body>

</html>
