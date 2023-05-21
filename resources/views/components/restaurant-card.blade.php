@props([
    'src' => '',
    'name' => '',
    'shadow' => false,
    'imgPadding' => '',
])

<div class="relative flex shadow border border-gray-200 h-32 w-40 h-10 rounded-md overflow-hidden hover:scale-110 transition duration-75 ease-in-out">
    @if($shadow)
        <div class="absolute w-full inset-0 mt-16 bg-gradient-to-b from-transparent to-[#0000008f]">
        </div>
        <div class="absolute bottom-1 left-2 text-white font-medium">
            <span>{{ $name }}</span>
        </div>
    @endif
    <img class="object-cover {{ $imgPadding }} rounded-md w-full" src="{{ $src }}" alt="">
</div>
