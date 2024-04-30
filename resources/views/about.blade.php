@extends('layouts.default')

@section('title', 'Tentang Kami - Sasco Petroniaga')
@section('description',
    'Pelajari lebih lanjut tentang Sasco Petroniaga, perusahaan energi terkemuka yang berkomitmen
    untuk menyediakan layanan berkualitas dan terpercaya.')

@section('content')
    <section
        class="flex h-[calc(100vh_-_56px)] w-full flex-col justify-center bg-[url('images/bg-hero-mobile.jpg')] bg-cover bg-center bg-no-repeat px-[35px] md:h-[calc(100vh_-_123px)] lg:bg-[url('/images/bg-hero-desktop.jpg')] lg:bg-[bottom_left] lg:px-[10%]">
        <h2
            class="mb-[23px] max-w-[270px] font-poppins text-[50px] font-extrabold leading-[75px] text-[#FBFBFB] lg:max-w-[unset] lg:text-[80px] lg:font-extrabold lg:leading-[120px]">
            DIESEL OIL SUPPLIER
        </h2>
    </section>

    <section class="px-[34px] pb-[156px] pt-[70px] font-poppins">
        <h2
            class="mb-[29px] text-center text-[28px] font-bold leading-[42px] text-[#383838] lg:mb-[39px] lg:text-4xl lg:leading-[54px]">
            Tentang Kami
        </h2>

        <p class="mx-auto max-w-[768px] text-center text-lg font-normal leading-[27px] text-[#383838]">
            PT. SASCO PETRO NIAGA berdisi sejak 2016, bergerak dibidang penyalur
            bahan bakar minyak Industry untuk produk HSD ( High Speed Diesel )
            atau solar. Melayani kebutuhan seluruh segmen industri dan marine di
            Kepulauan Riau. Kami menjamin ketepatan waktu, kualitas dan harga yang
            kompetitif.
        </p>
    </section>

    <section
        class="h-screen bg-[url('/images/tentang/bg-mobile.jpg')] bg-cover bg-center bg-no-repeat font-poppins md:bg-[url('/images/tentang/bg-desktop.jpg')] md:bg-[center_left] lg:h-[408px] 2xl:h-[500px]">
        <div
            class="flex h-full w-full -translate-y-20 flex-col items-center gap-[64px] lg:flex-row lg:justify-center lg:gap-[240px] 2xl:translate-y-[-150px]">
            @foreach ($items as $item)
                <x-about.card :icon="$item['icon']" :title="$item['title']" :description="$item['description']" />
            @endforeach
        </div>
    </section>

    @include('partials.contact-section')
@endsection
