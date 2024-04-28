@props(['image', 'name', 'description'])

<div class="h-[416px] min-w-[290px] max-w-[290px] bg-[#F5F5F5] p-[11px] font-poppins text-[#383838]">
    <div class="mb-5 h-[209px] w-full">
        <img class="h-auto w-full object-cover object-center" src={{ $image }} alt="solar" />
    </div>

    <p class="mb-[13px] text-lg font-bold leading-[27px]">{{ $name }}</p>

    <p class="text-xs font-normal leading-[18px]">{{ $description }}</p>
</div>
