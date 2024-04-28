@props(['title', 'description'])

<div
    class="flex h-[136px] min-w-[134px] max-w-[134px] flex-col justify-between rounded-[7px] border-2 border-solid border-[#0153FA] px-2 py-[22px] text-[#383838] transition-all duration-500 ease-in-out hover:bg-[#0153FA] hover:text-[#FBFBFB] lg:min-w-[141px] lg:max-w-[141px]">
    <p class="text-center text-[22px] font-bold leading-[33px]">
        {{ $title }}
    </p>
    <p class="text-center text-[10px] font-medium leading-[15px]">
        {{ $description }}
    </p>
</div>
