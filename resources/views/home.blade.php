@extends('layouts.default')

@section('title', 'Sasco Petroniaga - Penyedia Bahan Bakar Industri Terpercaya')
@section('description',
    'Sejak 2016, Sasco Petroniaga menjadi penyedia terpercaya bahan bakar minyak industri
    (HSD/solar) di Kepulauan Riau, menawarkan layanan tepat waktu dengan kualitas dan harga kompetitif.')

@section('content')
    <section
        class="flex h-[calc(100vh_-_56px)] w-full flex-col justify-center bg-[url('/public/images/bg-hero-mobile.jpg')] bg-cover bg-center bg-no-repeat px-[35px] md:h-[calc(100vh_-_123px)] lg:bg-[url('/public/images/bg-hero-desktop.jpg')] lg:bg-[bottom_left] lg:px-[10%]">
        <h2
            class="mb-[23px] max-w-[270px] font-poppins text-[50px] font-extrabold leading-[75px] text-[#FBFBFB] lg:max-w-[unset] lg:text-[80px] lg:font-extrabold lg:leading-[120px]">
            DIESEL OIL SUPPLIER
        </h2>

        <p class="mb-[50px] font-poppins text-base font-normal leading-6 text-[#FBFBFB] lg:max-w-[666px]">
            Untuk memenuhi kebutuhan industri di Batam khususnya di kota Batam dan
            sekitarnya, PT. Sasco Petro niaga Hadir menjadi agen/distributor untuk
            memenuhi kebutuhan solar industri dalam skala besar dengan harga yang
            bersaing
        </p>

        <a href="/kontak">
            <x-button variant="outline" size="default">
                HUBUNGI KAMI
            </x-button>
        </a>
    </section>
@endsection
