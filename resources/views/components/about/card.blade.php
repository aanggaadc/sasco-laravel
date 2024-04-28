@props(['icon', 'title', 'description'])

<div
    class="flex h-[391px] w-[291px] flex-col items-center justify-between rounded-[26px] bg-white px-8 py-10 shadow-[0px_4px_20px_6px_#00000033] transition-all duration-300 ease-in-out hover:scale-[1.05]">
    <img src="{{ $icon }}" alt="{{ $title }}" class="w-[118px]">

    <h2 class="text-center text-2xl font-bold leading-9 text-[#383838]">
        {{ $title }}
    </h2>

    <p class="text-center text-sm font-normal leading-[21px] text-[#383838]">
        {{ $description }}
    </p>
</div>
