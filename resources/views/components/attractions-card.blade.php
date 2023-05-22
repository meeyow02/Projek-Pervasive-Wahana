@props([
    'src' => '',
    'altSrc' => '',
    'attractionName' => '',
    'iconDisease' => '',
    'visibility' => '',
    'altIconDisease' => '',
    'thrill' => '',
    'colorThrill' => '',
    'thrillWidth' => '',
    'speed' => '',
    'colorSpeed' => '',
    'speedWidth' => '',
    'desc' => '',
])

<div class="flex flex-col md:flex-row w-11/12 bg-white border shadow-2xl rounded-md border-gray-200 items-center">
    <div class="w-11/12 md:w-full md:px-4 my-4 md:flex md:place-content-center">
        <div class="w-full h-2/4 md:min-h-max overflow-hidden rounded-t-md md:rounded-t-none md:rounded-l-md border-l-gray-200 border-t-gray-200 border-r-gray-200 md:border-r-0 md:border-b-gray-200">
            <img class="md:h-[20rem]" src="{{ $src }}" alt="{{ $altSrc }}">
        </div>
        <div class="flex justify-center shadow-lg border-r border-b border-l md:border-l-0 md:border-t rounded-b-md md:rounded-b-none md:rounded-r-md">
            <div class="flex flex-col bg-white w-5/6 my-4 font-sans">
                <span class="text-xl font-bold text-gray-800 mt-2">{{ $attractionName }}</span>
                <img class="object-contain w-6 my-4 {{ $visibility }}" src="{{ $iconDisease }}" alt="{{ $altIconDisease }}">
                <div class="flex flex-col md:flex-row gap-3 font-sans mb-4 md:mb-2 my-2">
                    <div>
                        <span class="text-base font-semibold text-gray-800">Thrill</span>
                        <div class="relative h-10 rounded-full bg-gray-200 md:w-60">
                            <span class="absolute text-white text-base font-medium text-center top-2 left-4">{{ $thrill }}</span>
                            <div class="h-10 {{ $colorThrill }} rounded-full {{ $thrillWidth }}"></div>
                        </div>
                    </div>
                    <div>
                        <span class="text-base font-semibold text-gray-800">Speed</span>
                        <div class="relative h-10 rounded-full bg-gray-200 md:w-60">
                            <span class="absolute text-white text-base font-medium text-center top-2 left-4">{{ $speed }}</span>
                            <div class="h-10 {{ $colorSpeed }} rounded-full {{ $speedWidth }}"></div>
                        </div>
                    </div>
                </div>
                
                <span class="text-justify text-gray-700 font-normal my-4">{{ $desc }}</span>

            </div>
        </div>
    </div>

</div>