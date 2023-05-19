<x-app-layout>
    <div class="p-4 pr-0">
        <div class="flex flex-col gap-4">
            <span class="font-sans font-semibold text-gray-700 pl-4">
                Popular Items
            </span>
            <div class="flex gap-3 overflow-x-auto pb-2 pl-2">
                <x-vending-product-card/>
                <x-vending-product-card/>
                <x-vending-product-card/>
                <x-vending-product-card/>
                <x-vending-product-card/>
            </div>
            <div class="relative w-full pr-3">
                <label for="hs-table-with-pagination-search" class="sr-only">Search</label>
                <input type="text" name="hs-table-with-pagination-search" id="hs-table-with-pagination-search" class="p-3 pl-10 block w-full border-gray-200 rounded-2xl text-sm focus:border-blue-500 focus:ring-blue-500" placeholder="Search for items">
                <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none pl-4">
                    <svg class="h-3.5 w-3.5 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </div>
            </div>
            <div class="flex pl-2 gap-2">
                <div class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-xl text-xs font-medium bg-[#144d75] text-white">
                    <span>Beverages</span>
                </div>
                <div class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-xl text-xs font-medium bg-white border border-gray-200">
                    <span>Snacks</span>
                </div>
            </div>
            <div class="flex gap-3 overflow-x-auto pb-2 pl-2">
                <x-vending-product-card/>
                <x-vending-product-card/>
                <x-vending-product-card/>
                <x-vending-product-card/>
                <x-vending-product-card/>
            </div>
        </div>
    </div>
</x-app-layout>
