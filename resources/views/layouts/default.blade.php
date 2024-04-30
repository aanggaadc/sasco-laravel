<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>@yield('title', 'Sasco Petroniaga - Penyedia Bahan Bakar Industri Terpercaya')</title>
    <meta name="description" content="@yield('description', 'Sejak 2016, Sasco Petroniaga menjadi penyedia terpercaya bahan bakar minyak industri (HSD/solar) di Kepulauan Riau, menawarkan layanan tepat waktu dengan kualitas dan harga kompetitif.')">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="energy, oil, gas, diesel, solar, fuel, MGO, pertadex, dexlite, supplier, distributor, industry, marine, batam,  Kepulauan Riau, Indonesia">
    {{-- @vite('resources/css/app.css') --}}

    {{-- Tailwind CSS --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        poppins: ["Poppins", "sans-serif"],
                    },
                    colors: {
                        primary: "#0153FA",
                    },
                },
            },
        }
    </script>

    {{-- Alphine.JS --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- Font Poppins --}}
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
    </style>

</head>

<body>
    <x-header />

    <main class="min-h-[calc(100vh_-_56px)] md:min-h-[calc(100vh_-_123px)]">
        @yield('content')
    </main>

    <x-footer />
</body>

</html>
