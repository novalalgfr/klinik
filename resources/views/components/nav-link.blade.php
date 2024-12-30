@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center text-[12px] font-medium h-fit bg-[#008ED6] rounded-md text-white px-[16px] py-[8px] transition duration-150 ease-in-out'
            : 'inline-flex items-center text-[12px] text-black font-medium h-fit px-[16px] py-[8px] transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
