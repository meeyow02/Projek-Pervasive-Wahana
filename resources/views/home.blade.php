<x-app-layout>

    @section('title', $title)

    <div class="p-4 rounded-lg">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
            <div class="flex flex-col p-4 rounded bg-white shadow">
                <div class="text-xl items-center flex gap-2 mb-4">
                    <i class="pt-0.5 mdi mdi-ticket text-sky-800"></i>
                    <h1 class="font-medium text-gray-600">Your Ticket</h1>
                </div>
                <div class="flex flex-col gap-2 font-sans">
                    <img class="max-w-80 " src="https://www.barcode-generator.org/zint/api.php?bc_number=20&bc_data=MSK-123-WH" alt="barcode">
                    <span class="text-red-600 font-medium font-mono text-xs">Valid Thru 07/05/2023</span>
                    <div class="flex flex-col gap-0.5 font-mono">
                        <span class="font-medium text-base">Name: John Doe</span>
                        <span class="font-medium text-base">Package Type: Package 01</span>
                        <span class="font-medium text-base">Ticket ID: MSK-123-WH</span>
                    </div>
                </div>
            </div>
            <div class="flex flex-col p-4 my-auto rounded bg-white shadow">
                <div class="text-xl items-center flex gap-2 mb-1">
                    <i class="pt-0.5 mdi mdi-wallet text-sky-800"></i>
                    <h1 class="font-medium text-gray-600">MyWahana Balance</h1>
                </div>

                <div class="flex align-top gap-2">
                    <span class="font-sans text-xl font-medium">Rp</span>
                    <span class="font-sans text-4xl font-bold">400.000</span>
                </div>

                <a href="{{ route('topup') }}" class="mt-6 px-4 py-2 text-sm font-semibold text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Top Up</a>
                
            </div>

        </div>
        <div class="grid grid-cols-1 gap-4 mb-4">
            <div class="grid grid-cols-1 p-4 rounded bg-white shadow">
                <div class="text-xl items-center flex gap-2 mb-4">
                    <i class="pt-0.5 mdi mdi-archive text-sky-800"></i>
                    <h1 class="font-medium text-gray-600">Latest Transaction</h1>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 whitespace-nowrap">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Transaction
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Date & Time
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Amount
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900">
                                    Package 01
                                </th>
                                <td class="px-6 py-4">
                                    09:00, 23-04-2023
                                </td>
                                <td class="px-6 py-4">
                                    Rp. 300
                                </td>
                                <td class="px-6 py-4  ">
                                    <span class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded">Completed</span>
                                </td>
                            </tr>
                            <tr class="bg-white border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    Restorant 02
                                </th>
                                <td class="px-6 py-4">
                                    09:01, 23-04-2023
                                </td>
                                <td class="px-6 py-4">
                                    Rp. 300
                                </td>
                                <td class="px-6 py-4">
                                    <span class="bg-pink-100 text-pink-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded">Cancelled</span>
                                </td>
                            </tr>
                            <tr class="bg-white border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    Vending Machine
                                </th>
                                <td class="px-6 py-4">
                                    09:09, 23-04-2023
                                </td>
                                <td class="px-6 py-4">
                                    Rp. 300
                                </td>
                                <td class="px-6 py-4">
                                    <span class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded">Completed</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
