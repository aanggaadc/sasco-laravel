@props(['icon', 'title', 'description', 'title2' => null, 'description2' => null])

<div class="flex gap-10">
    <div class="min-w-10">
        <img src={{ $icon }} alt="{{ $icon }}" />
    </div>

    <div class="flex-grow">
        <div class="mb-[18px] font-poppins text-[#383838]">
            <p class="mb-1 text-xl font-bold leading-[30px] lg:text-2xl lg:leading-9">
                {{ $title }}
            </p>
            <p class="text-xs font-normal leading-[18px] lg:text-sm lg:leading-[21px]">
                {{ $description }}
            </p>
        </div>

        @if ($title2 && $description2)
            <div class="mb-[18px] font-poppins text-[#383838]">
                <p class="mb-1 text-xl font-bold leading-[30px] lg:text-2xl lg:leading-9">
                    {{ $title2 }}
                </p>
                <p class="text-xs font-normal leading-[18px] lg:text-sm lg:leading-[21px]">
                    {{ $description2 }}
                </p>
            </div>
        @endif

    </div>
</div>
