<header x-data="{ isOpen: false }" class="w-full h-[56px] flex items-center justify-between px-[35px] bg-white md:h-[123px] lg:px-[70px] sticky top-0 z-50">
    <h1 class="absolute w-px h-px overflow-hidden -m-px p-0 border-0">
      Sasco Petroniaga
    </h1>

    <div class="h-[49px] w-[200px] lg:w-[500px] lg:h-[123px]">
        <img src="/icons/sasco-logo-text.png" alt="Sasco Petroniaga" class="h-full w-full block" />
    </div>

    <nav
    class="absolute z-[2] w-full bg-black transition-all duration-[0.3s] ease-[ease-in-out] p-0 top-[56px] inset-x-0 mx-auto md:opacity-100 md:visible md:static md:w-[unset] md:bg-[unset] md:m-[unset] md:p-[unset]"
    :class="{'opacity-100 visible': isOpen, 'opacity-0 invisible': !isOpen }"
  >
    <ul class="flex flex-col md:flex-row md:items-center">
        <li class="px-5 py-[11px] font-poppins bg-[#EBECEF] text-[#383838]">
          <a href="/">Home</a>
        </li>

        <li class="px-5 py-[11px] font-poppins bg-[#EBECEF] text-[#383838]">
            <a href="/tentang">Tentang</a>
          </li>

          <li class="px-5 py-[11px] font-poppins bg-[#EBECEF] text-[#383838]">
            <a href="/layanan">Layanan</a>
          </li>

          <li class="px-5 py-[11px] font-poppins bg-[#EBECEF] text-[#383838]">
            <a href="/produk">Produk</a>
          </li>

          <li class="px-5 py-[11px] font-poppins bg-[#EBECEF] text-[#383838]">
            <a href="/kontak">Kontak</a>
          </li>
    </ul>
  </nav>

  <button @click="isOpen = !isOpen" class="cursor-pointer relative z-[1] block -mr-5 scale-50 md:hidden">
    <div class="relative flex justify-center w-20">
        <span class="absolute h-2 w-full bg-black transition-all duration-300 ease-in-out rounded-[50px] bottom-3.5"
        :class="{'-rotate-45 origin-right top-[-25px]': isOpen, '': !isOpen }"></span>
        <span
        class="absolute h-2 w-full bg-black transition-all duration-300 ease-in-out rounded-[50px]"
        :class="{'translate-x-5 opacity-0': isOpen, '': !isOpen }"
        ></span>
        <span
        class="absolute h-2 w-full bg-black transition-all duration-300 ease-in-out rounded-[50px] top-[22px] bottom"
        :class="{'rotate-45 origin-right top-[32px]': isOpen, '': !isOpen }"
        /></span>
    </div>
</button> 
</header>