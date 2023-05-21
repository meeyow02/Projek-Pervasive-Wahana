@props([
    'src' => '',
    'itemName' => '',
    'machine' => '',
    'price' => '',
    'stock' => '',
    'imgPadding' => '',
    'imgScale' => 'scale-125'
])

<div class="relative items-start shadow border border-gray-200 box-border flex shrink-0 h-full px-10 pb-2 rounded-[1.2rem]">
    <div class="items-center flex flex-col pt-2">
        <div class="flex flex-col mb-3 items-center">
            <span class="shrink-0 text-xl font-medium whitespace-nowrap">
            {{ $itemName }}
            </span>
            <span class="shrink-0 text-sm font whitespace-nowrap">
            {{ $machine }}
            </span>
        </div>
        <div class="flex rounded-md h-36 w-28 items-center overflow-hidden">
            <img class="{{ $imgPadding }} object-cover h-36 w-28 {{ $imgScale }}" src="{{ $src }}" alt="">
        </div>

            <div class="flex flex-col">
                <div class="flex items-center mt-2 mr-2 gap-1">
                    <span class="font-sans text-xs">Rp</span>
                    <span class="font-sans text-base font-medium">{{ $price }}</span>
                </div>
            </div>
    </div>
    <div class="absolute right-0 items-center bg-[#c6e1f5] text-[#18181a] flex shrink-0 text-xs h-8 w-8 font-medium justify-center leading-[1.2] whitespace-nowrap rounded-[0_1.2rem_0_0.8rem]">
        {{ $stock }}
    </div>
</div>
