<x-app-layout>
    @section('title', $title)

    <div class="flex items-center justify-center">
        <div class="items-center px-2 md:px-12 my-4 rounded-xl md:w-screen">
            <div class="flex flex-col p-4 rounded bg-white shadow-sm border border-gray-200 md:items-center">
                <div class="text-xl items-center flex gap-2 mb-1">
                    <i class="pt-0.5 mdi mdi-wallet text-sky-800"></i>
                    <h1 class="font-medium text-gray-600">MyWahana Balance</h1>
                </div>

                <div class="flex align-top gap-2 text-gray-900">
                    <span class="font-sans text-xl font-medium">Rp</span>
                    <span class="font-sans text-4xl font-bold">400.000</span>
                </div>

            </div>
        </div>
    </div>

    {{-- nominal --}}
    <div class="md:items-center md:px-12">
        <div class="flex flex-col w-screen mt-2 shadow-sm border border-gray-200 bg-white rounded md:w-full">
            <div class="p-6 md:px-20">
                <span class="font-sans text-lg text-blue-900 font-medium">Nominal</span>
            </div>
            <div class="flex flex-col">
                <x-topup-nominal />
                <x-topup-nominal />
                <x-topup-nominal />
                <x-topup-nominal />
            </div>
    
            {{-- konfirmasi --}}
            <div class="flex w-full mt-8 font-sans border-t-2">
                <div class="p-6 flex flex-row w-full justify-between items-center">
                    <div class="flex flex-col">
                        <span class="font-light align-top text-gray-700 md:text-lg">Total Pembelian</span>
                        <span class="font-medium align-bottom text-bold text-lg text-gray-900 md:text-2xl">Rp. 1.000.000</span>
                    </div>
                    <div class="inline-flex h-fit py-2 px-4 items-center text-base md:text-xl text-semibold font-semibold text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                        <span>Beli</span>
                    </div>
                </div>
            </div>
        </div>    
    </div>

</x-app-layout>