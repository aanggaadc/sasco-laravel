@extends('layouts.default')

@section('title', 'Hubungi Kami - Sasco Petroniaga')
@section('description',
    'Hubungi Sasco Petroniaga untuk pertanyaan atau dukungan apa pun. Kami siap membantu dengan
    semua kebutuhan energi Anda.')

@section('content')
    <section
        class="flex h-[calc(100vh_-_56px)] w-full flex-col justify-center bg-[url('/public/images/bg-hero-kontak-mobile.jpg')] bg-cover bg-center bg-no-repeat px-[35px] md:h-[calc(100vh_-_123px)] md:bg-[url('/public/images/bg-hero-kontak-desktop.jpg')] md:bg-[bottom_right] lg:px-[10%]">
        <h2
            class="mb-[23px] max-w-[270px] font-poppins text-[50px] font-extrabold leading-[75px] text-[#FBFBFB] lg:max-w-[unset] lg:text-[80px] lg:font-extrabold lg:leading-[120px]">
            HUBUNGI KAMI
        </h2>
    </section>

    <div class="relative w-full">
        <div class="absolute left-0 top-0 z-[-1] hidden h-full w-[350px] lg:block">
            <img src="/images/bg-element.png" alt="bg-element" fill sizes="100%" />
        </div>

        <div
            class="relative mx-auto flex max-w-[1024px] flex-col pb-10 lg:flex-row lg:gap-[100px] lg:px-4 lg:py-[80px] xl:px-0">
            <img class="absolute left-0 top-0 z-[-1] lg:hidden" src="/images/bg-element-mobile.png" alt="bg-element" />

            <section class="relative px-[34px] py-[42px] font-poppins lg:max-w-[320px] lg:p-0">
                <h2
                    class="mb-[18px] text-center text-[28px] font-bold leading-[42px] text-[#383838] lg:mb-[39px] lg:text-left lg:text-4xl lg:leading-[54px]">
                    Info Kontak
                </h2>

                @foreach ($items as $item)
                    <x-contact.card :icon="$item['icon']" :title="$item['title']" :description="$item['description']" :title2="$item['title2'] ?? null"
                        :description2="$item['description2'] ?? null" />
                @endforeach
            </section>

            <section class="px-[35px] font-poppins lg:flex-grow lg:p-0">
                <h2
                    class="mb-[18px] text-center text-[28px] font-bold leading-[42px] text-[#383838] lg:mb-[39px] lg:text-left lg:text-4xl lg:leading-[54px]">
                    Tanya Kami
                </h2>

                @if (session()->has('success'))
                    <div
                        class="relative mb-3 mt-3 flex flex-col rounded-md bg-gray-200 py-5 pl-6 pr-8 shadow dark:bg-green-700 sm:flex-row sm:items-center sm:pr-6">
                        <div class="flex w-full flex-row items-center border-b pb-4 sm:w-auto sm:border-b-0 sm:pb-0">
                            <div class="text-green-500" dark:text-gray-500>
                                <svg class="h-6 w-6 sm:h-5 sm:w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="ml-3 text-sm font-medium">Success!</div>
                        </div>
                        <div class="mt-4 text-sm tracking-wide text-gray-500 dark:text-white sm:ml-4 sm:mt-0">
                            {{ session('success') }}
                        </div>
                        <div
                            class="absolute right-4 top-4 ml-auto cursor-pointer text-gray-400 hover:text-gray-800 sm:relative sm:right-auto sm:top-auto">
                            <button
                                class="absolute right-4 top-4 ml-auto cursor-pointer text-gray-400 hover:text-gray-800 sm:relative sm:right-auto sm:top-auto"
                                onclick="this.parentElement.parentElement.remove()">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                @endif

                <form action="{{ route('contact.send') }}" method="POST" class="font-poppins">
                    @csrf
                    <div class="mb-6">
                        <label class="text-base font-normal leading-6" for="name">
                            Nama
                        </label>
                        <input class="mt-2 h-10 w-full rounded-[5px] border border-solid border-[#383838] p-2"
                            id="name" name="name" type="text" required autoComplete="off" />
                        @error('name')
                            <p class="mt-1 text-xs text-[red]"> {{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label class="text-base font-normal leading-6" for="contact">
                            Kontak
                        </label>
                        <input ref={contactRef}
                            class="mt-2 h-10 w-full rounded-[5px] border border-solid border-[#383838] p-2" id="contact"
                            name="contact_number" type="text" required autoComplete="off" />
                        @error('contact_number')
                            <p class="mt-1 text-xs text-[red]"> {{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label class="text-base font-normal leading-6" for="email">
                            Email
                        </label>
                        <input class="mt-2 h-10 w-full rounded-[5px] border border-solid border-[#383838] p-2"
                            id="email" name="email" type="email" required autoComplete="off" />
                        @error('email')
                            <p class="mt-1 text-xs text-[red]"> {{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label class="text-base font-normal leading-6" for="message">
                            Pesan
                        </label>
                        <textarea class="mt-2 min-h-[224px] w-full rounded-[5px] border border-solid border-[#383838] p-2" id="message"
                            name="message" required autoComplete="off"></textarea>
                        @error('message')
                            <p class="mt-1 text-xs text-[red]"> {{ $message }}</p>
                        @enderror
                    </div>

                    <x-button type="submit" class="!w-full !max-w-[unset] !py-[11px] !text-xs !font-medium lg:!text-sm">
                        KIRIM
                    </x-button>
                </form>
            </section>
        </div>
    </div>

@endsection
