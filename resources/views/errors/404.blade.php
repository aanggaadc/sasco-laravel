<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>404 - Halaman Tidak Ditemukan</title>
    <meta name="description"
        content="Halaman yang Anda cari tidak ditemukan. Silakan kembali ke halaman utama atau hubungi kami jika
    Anda memerlukan bantuan.">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
</head>

<body>
    <div
        class="flex h-[calc(100vh_-_56px)] w-full flex-col items-center justify-center font-poppins md:h-[calc(100vh_-_123px)]">
        <h2 class="text-center text-[150px] font-bold leading-[225px] text-primary lg:text-[300px] lg:leading-[450px]">
            404
        </h2>

        <p class="mb-10 text-center text-[28px] font-medium leading-[42px]">
            Maaf, halaman yang anda tuju tidak dapat ditemukan
        </p>

        <a href="/">
            <x-button>Kembali ke Halaman Utama</x-button>
        </a>
    </div>
</body>

</html>
