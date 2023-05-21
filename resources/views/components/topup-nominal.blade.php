@props(['nominal' => null])

<div class="flex justify-center items-center shadow-sm p-4 rounded-md border">
        <span class="font-sans font-medium text-gray-700 text-base">Rp. {{ number_format($nominal, 0, '.', ',' ) }}</span>
</div>
