<header x-data="{ isOpen: false }"
    class="sticky top-0 z-50 flex h-[56px] w-full items-center justify-between bg-white px-[35px] md:h-[123px] lg:px-[70px]">
    <h1 class="absolute -m-px h-px w-px overflow-hidden border-0 p-0">
        Sasco Petroniaga
    </h1>

    <div class="h-[49px] w-[200px] lg:h-[123px] lg:w-[500px]">
        <img src="/icons/sasco-logo-text.png" alt="Sasco Petroniaga" class="block h-full w-full" />
    </div>

    <nav class="absolute inset-x-0 top-[56px] z-[2] mx-auto w-full bg-black p-0 transition-all duration-[0.3s] ease-[ease-in-out] md:visible md:static md:m-[unset] md:w-[unset] md:bg-[unset] md:p-[unset] md:opacity-100"
        :class="{ 'opacity-100 visible': isOpen, 'opacity-0 invisible': !isOpen }">
        <ul class="flex flex-col md:flex-row md:items-center">
            @foreach ($menus as $menu => $label)
                <li
                    class="{{ $pathname === $menu ? 'bg-[#0153FA] text-[#fbfbfb]' : 'bg-[#EBECEF] text-[#383838]' }} px-5 py-[11px] font-poppins">
                    <a href="{{ $menu }}">{{ $label }}</a>
                </li>
            @endforeach
        </ul>
    </nav>

    <button @click="isOpen = !isOpen" class="relative z-[1] -mr-5 block scale-50 cursor-pointer md:hidden">
        <div class="relative flex w-20 justify-center">
            <span class="absolute bottom-3.5 h-2 w-full rounded-[50px] bg-black transition-all duration-300 ease-in-out"
                :class="{ '-rotate-45 origin-right top-[-25px]': isOpen, '': !isOpen }"></span>
            <span class="absolute h-2 w-full rounded-[50px] bg-black transition-all duration-300 ease-in-out"
                :class="{ 'translate-x-5 opacity-0': isOpen, '': !isOpen }"></span>
            <span
                class="bottom absolute top-[22px] h-2 w-full rounded-[50px] bg-black transition-all duration-300 ease-in-out"
                :class="{ 'rotate-45 origin-right top-[32px]': isOpen, '': !isOpen }" /></span>
        </div>
    </button>
</header>
