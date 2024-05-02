<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>@yield('title', 'Sasco Petroniaga - Penyedia Bahan Bakar Industri Terpercaya')</title>
    <meta name="description" content="@yield('description', 'Sejak 2016, Sasco Petroniaga menjadi penyedia terpercaya bahan bakar minyak industri (HSD/solar) di Kepulauan Riau, menawarkan layanan tepat waktu dengan kualitas dan harga kompetitif.')">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="energy, oil, gas, diesel, solar, fuel, MGO, pertadex, dexlite, supplier, distributor, industry, marine, batam,  Kepulauan Riau, Indonesia">
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
