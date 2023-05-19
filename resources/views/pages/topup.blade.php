<x-app-layout>
    @section('title', $title)

    <div class="flex items-center justify-center">
        <div class="items-center w-screen px-4 my-4">
            <div class="flex flex-col p-4 rounded bg-white shadow ">
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
    <div class="flex flex-col w-screen mt-2 shadow bg-white rounded">
        <div class="p-6">
            <span class="font-sans text-lg text-blue-900 font-medium">Nominal</span>
        </div>
        <div class="flex flex-col">
            <x-topup-nominal />
            <x-topup-nominal />
            <x-topup-nominal />
            <x-topup-nominal />
        </div>

        {{-- konfirmasi --}}
        <div class="flex w-screen mt-8 font-sans border-t-2">
            <div class="p-6 flex flex-row justify-between gap-16">
                <div class="flex flex-col">
                    <span class="font-light align-top text-gray-700">Total Pembelian</span>
                    <span class="font-medium align-bottom text-bold text-lg text-gray-900">Rp. 1.000.000</span>
                </div>
                <div class="min-h-fit flex justify-center align-middle px-6 w-[9.5rem] py-2 text-base text-semibold font-semibold text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    <span>Beli</span>
                </div>
            </div>
        </div>
    </div>    

</x-app-layout>