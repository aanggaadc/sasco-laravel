@extends('layouts.default')

@section('title', 'Layanan Kami - Sasco Petroniaga')
@section('description',
    'Temukan berbagai layanan yang ditawarkan oleh Sasco Petroniaga untuk memenuhi semua kebutuhan
    energi Anda secara efisien dan andal.')

@section('content')
    <section
        class="flex h-[calc(100vh_-_56px)] w-full flex-col justify-center bg-[url('/images/bg-hero-mobile.jpg')] bg-cover bg-center bg-no-repeat px-[35px] md:h-[calc(100vh_-_123px)] lg:bg-[url('/images/bg-hero-desktop.jpg')] lg:bg-[bottom_left] lg:px-[10%]">
        <h2
            class="mb-[23px] max-w-[270px] font-poppins text-[50px] font-extrabold leading-[75px] text-[#FBFBFB] lg:max-w-[unset] lg:text-[80px] lg:font-extrabold lg:leading-[120px]">
            LAYANAN KAMI
        </h2>
    </section>

    <div class="relative">
        <img class="absolute right-0 top-0 z-[-1] hidden transform lg:block" src="/images/layanan/bg-element-desktop.png"
            alt="element-bg">
        <section class="px-[34px] pb-[81px] pt-[70px] font-poppins lg:pb-[183px]">
            <h2
                class="mb-[29px] text-center text-[28px] font-bold leading-[42px] text-[#383838] lg:mb-[39px] lg:text-4xl lg:leading-[54px]">
                Layanan Kami
            </h2>

            <p class="mx-auto max-w-[576px] text-center text-lg font-normal leading-[27px] text-[#383838]">
                Sudah berpengalaman dalam Melayanin client mulai dari, Pelayaran,
                Manufaktur, shipyard, perhotelan, dan Proyek Pembangunan lahan
            </p>
        </section>

        <section class="relative px-[36px] pb-[70px] font-poppins">
            <img class="absolute right-0 top-0 z-[-1] transform lg:hidden" src="/images/layanan/bg-element-mobile.png"
                alt="element-bg" />
            <h2
                class="mb-[44px] text-center text-[28px] font-bold leading-[42px] text-[#383838] lg:mb-0 lg:text-4xl lg:leading-[54px]">
                Sarana dan Fasilitas
            </h2>

            <div class="flex flex-col lg:mx-auto lg:max-w-[1240px] lg:flex-row lg:items-center lg:gap-[76px]">
                <img class="z-1 relative mb-[64px] w-full lg:mb-0 lg:min-w-[432px] lg:max-w-[540px]"
                    src="/images/layanan/image-1.png" alt="fasilitas" />

                <div class="flex flex-wrap justify-center gap-x-5 gap-y-8 lg:gap-x-[81px] lg:gap-y-10">
                    @foreach ($items as $item)
                        <x-service.card :title="$item['title']" :description="$item['description']" />
                    @endforeach
                </div>
            </div>
        </section>
    </div>

    @include('partials.contact-section')
@endsection
