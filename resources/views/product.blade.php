@extends('layouts.default')

@section('title', 'Produk Bensin Premium - Sasco Petroniaga')
@section('description',
    'Jelajahi rangkaian produk bensin berkualitas tinggi kami yang dirancang untuk efisiensi dan
    kinerja. Sasco Petroniaga, mitra energi tepercaya Anda.')

@section('content')
    <section
        class="flex h-[calc(100vh_-_56px)] w-full flex-col justify-center bg-[url('/images/bg-hero-mobile.jpg')] bg-cover bg-center bg-no-repeat px-[35px] md:h-[calc(100vh_-_123px)] lg:bg-[url('/images/bg-hero-desktop.jpg')] lg:bg-[bottom_left] lg:px-[10%]">
        <h2
            class="mb-[23px] max-w-[270px] font-poppins text-[50px] font-extrabold leading-[75px] text-[#FBFBFB] lg:max-w-[unset] lg:text-[80px] lg:font-extrabold lg:leading-[120px]">
            PRODUK KAMI
        </h2>
    </section>

    <section class="flex flex-wrap justify-center gap-9 px-[35px] py-12 lg:px-0">
        @foreach ($items as $item)
            <x-product.card :name="$item['name']" :description="$item['description']" :image="$item['image']" />
        @endforeach
    </section>

    @include('partials.contact-section')
@endsection
