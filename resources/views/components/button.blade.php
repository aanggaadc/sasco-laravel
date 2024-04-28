@props(['variant' => 'default', 'extraClasses' => ''])

@php
    $class =
        'max-w-fit flex items-center justify-center rounded-md font-poppins font-medium tracking-widest transition-all duration-300 ease-in-out px-[49px] py-[21px] text-sm lg:px-[74px] lg:py-[21px] lg:text-xl';

    switch ($variant) {
        case 'outline':
            $class .=
                ' border border-solid border-primary text-primary bg-[none] hover:bg-primary hover:text-[#FBFBFB] hover:border-primary';
            break;
        default:
            $class .= ' bg-primary text-[#FBFBFB] hover:bg-[#4A86FF]';
    }

    $class .= ' ' . $extraClasses;
@endphp

<button {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
</button>
