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
            <x-button variant="outline" class="!hover:border-[#0153FA] !border-[#FBFBFB] !text-[#FBFBFB]">
                HUBUNGI KAMI
            </x-button>
        </a>
    </section>

    <section class="relative px-[35px] py-12 font-poppins lg:px-[5%] lg:py-[70px]">
        <Image class="absolute left-0 top-1/2 z-[-1] -translate-y-1/2 transform" src="/images/bg-element.png" alt="sasco"
            width={536} height={1348} />

        <h2
            class="Smb-8 mb-8 text-center text-[28px] font-bold leading-[42px] text-[#383838] lg:text-4xl lg:font-bold lg:leading-[54px]">
            Kami Menyediakan Jenis Bahan <br class="hidden lg:block" />
            <span class="text-[#0153FA]">Bakar Berkualitas Tinggi</span>
        </h2>

        <p
            class="mx-auto mb-[50px] max-w-[768px] text-center text-base font-normal leading-6 text-[#383838] lg:text-lg lg:font-normal lg:leading-[27px]">
            PT. SASCO PETRO NIAGA berdisi sejak 2016, bergerak dibidang penyalur
            bahan bakar minyak Industry untuk produk HSD (High Speed Diesel) atau
            solar. Melayani kebutuhan seluruh segmen industri dan marine di
            Kepulauan Riau. Kami menjamin ketepatan waktu, kualitas dan harga yang
            kompetitif
        </p>

        <a href="/tentang">
            <x-button class="mx-auto mb-[64px] block lg:mb-[116px]">
                TENTANG KAMI
            </x-button>
        </a>

        <div class="flex flex-col lg:flex-row lg:gap-[90px]">
            <div class="w-full lg:order-2 lg:w-[50%] lg:grow">
                <Image class="z-1 relative mb-[34px] w-full" src="images/home/image-1.png" alt="about us" />
            </div>

            <div class="lg:flex lg:w-[50%] lg:flex-col lg:justify-center xl:min-w-[686px] xl:max-w-[686px]">
                <h2 class="mb-7 text-[28px] font-bold leading-[42px] lg:mb-[39px] lg:text-4xl lg:leading-[54px]">
                    Mengapa Bekerja Dengan Kami
                </h2>

                <p class="max-w-[686px] text-base font-normal leading-6 text-[#1E1E1E] lg:text-lg lg:leading-[27px]">
                    Kami Hadir dan sudah di percaya oleh Banyak konsumen khusus nya di
                    kota batam dan sekitarnya. Kami beserta staff dan karyawan yang
                    sudah berpengalaman di bidangnya selalu berusaha memberikan
                    pelayanan yang sangat baik dan Prima dengan Jaminan kepuasan para
                    pelanggan dengan harga yang kompetitif
                </p>
            </div>
        </div>
    </section>

    <section class="pt-8 font-poppins">
        <h2
            class="mb-4 text-center text-[28px] font-bold leading-[42px] text-[#383838] lg:mb-[39px] lg:text-4xl lg:leading-[54px]">
            Lokasi Kami
        </h2>

        <a href="https://maps.app.goo.gl/DJFwkgBh6v5K1XQ67?g_st=iw" rel="noopener noreferrer" target="_blank">
            <Image class="w-full lg:hidden" src="images/home/maps-mobile-new.jpg" alt="maps" />

            <Image class="hidden w-full lg:block" src="images/home/maps-desktop-new.jpg" alt="maps" />
        </a>
    </section>

    @include('partials.contact-section')
@endsection
