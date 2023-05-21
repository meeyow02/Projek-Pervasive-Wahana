<x-app-layout>
    @section('title', $title)
    <div class="p-4 pr-0 bg-white">
        <div class="flex flex-col gap-4">
            <span class="font-sans font-semibold text-gray-700 pl-4">
                Popular Items
            </span>
            <div class="flex gap-3 overflow-x-auto pb-2 pl-2">
                <x-vending-product-card
                    src="https://id-test-11.slatic.net/p/82da9e97bb2e277717ecf853e0f268d6.jpg"
                    item-name="Gojo Keychain"
                    machine="JJK Exclusive"
                    img-scale="scale-[1.20]"
                    price="50.000"
                    stock="3"
                />
                <x-vending-product-card
                    src="{{ asset('assets/img/product/lays-removebg-preview 1.png') }}"
                    item-name="Lays Classic"
                    machine="Vending Machine 3"
                    img-scale="scale-[0.9]"
                    price="5.000"
                    stock="20"
                />
                <x-vending-product-card
                    src="https://images.tokopedia.net/img/cache/500-square/product-1/2020/4/1/batch-upload/batch-upload_2fce9b72-22ed-4712-9a25-16101df6d5d1.jpg"
                    item-name="Fanta"
                    machine="Vending Machine 2"
                    price="7.000"
                    stock="20"
                />
                <x-vending-product-card
                    src="https://media.istockphoto.com/id/458677935/photo/coca-cola-drink-can-isolated-on-white-background.jpg?s=170667a&w=0&k=20&c=-S0PvsjxmufQkF6y8EsQuTqgMrDcExHDhj6-Y3_yh_M="
                    img-padding="p-4"
                    item-name="Coca Cola"
                    machine="Vending Machine 2"
                    price="6.000"
                    stock="10"
                />
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
                <div class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-xl text-xs font-medium bg-white border border-gray-200">
                    <span>Merchandise</span>
                </div>
            </div>
            <div class="flex gap-3 overflow-x-auto pb-2 pl-2">
                <x-vending-product-card
                    src="https://media.istockphoto.com/id/458677935/photo/coca-cola-drink-can-isolated-on-white-background.jpg?s=170667a&w=0&k=20&c=-S0PvsjxmufQkF6y8EsQuTqgMrDcExHDhj6-Y3_yh_M="
                    img-padding="p-4"
                    item-name="Coca Cola"
                    machine="Vending Machine 2"
                    price="6.000"
                    stock="10"
                />
                <x-vending-product-card
                    src="https://c8.alamy.com/comp/FT20PW/sprite-drink-in-a-can-on-ice-isolated-on-white-background-FT20PW.jpg"
                    item-name="Sprite"
                    machine="Vending Machine 2"
                    img-scale="scale-[0.9]"
                    price="6.000"
                    stock="20"
                />
                <x-vending-product-card
                    src="https://images.tokopedia.net/img/cache/500-square/product-1/2020/4/1/batch-upload/batch-upload_2fce9b72-22ed-4712-9a25-16101df6d5d1.jpg"
                    item-name="Fanta"
                    machine="Vending Machine 2"
                    price="7.000"
                    stock="20"
                />
            </div>
        </div>
    </div>
</x-app-layout>
