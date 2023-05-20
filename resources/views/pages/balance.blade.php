<x-app-layout>
    @section('title', $title)

    <div class="flex items-center justify-center">
        <div class="items-center px-2 md:px-12 my-4 rounded-xl md:w-full">
            <div class="flex flex-col p-4 rounded bg-white shadow-sm border border-gray-200 md:items-center">
                <div class="text-xl items-center flex gap-2 mb-1">
                    <i class="pt-0.5 mdi mdi-wallet text-sky-800"></i>
                    <h1 class="font-medium text-gray-600">MyWahana Balance</h1>
                </div>

                <div class="flex align-top gap-2 text-gray-900">
                    <span class="font-sans text-xl font-medium">Rp</span>
                    <span class="font-sans text-4xl font-bold">400.000</span>
                </div>

                {{-- <a href="#" class="mt-6 px-4 py-2 text-sm font-semibold text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Top Up</a> --}}
            </div>
        </div>
    </div>

    {{-- history balance --}}
    <div class="md:items-center md:px-12">
        <div class="flex flex-col w-full mt-2 shadow-sm border border-gray-200 bg-white rounded">
            <div class="p-6">
                <span class="font-sans text-lg text-blue-900 font-medium md:text-xl">Riwayat Top Up</span>
            </div>
            <x-balance-history-topup />
            <x-balance-history-topup />
            <x-balance-history-topup />
            <x-balance-history-topup />
    
            <div class="flex flex-col p-8 mt-4 md:px-80">
                <a href="{{ route('topup') }}" class="px-6 py-2 font-sans text-xl font-bold text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Top Up</a>
            </div>
            
        </div>
    </div>

</x-app-layout>
