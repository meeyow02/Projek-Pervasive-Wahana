@props(['active' => false, 'icon' => 'mdi-home' ])

@php
    $classes = ($active ?? false)
                ? 'flex bg-gray-500 text-gray-200 items-center p-2 w-full text-base font-normal rounded-lg transition duration-75'
                : 'flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100';
@endphp

<li>
    <a {{ $attributes->merge(['class' => $classes]) }}>
        <i class="mdi {{ $icon }} @if(!$active) text-gray-400 @endif text-xl"></i>
        <span class="ml-3 text-left whitespace-nowrap">{{ $slot }}</span>
    </a>
</li>

