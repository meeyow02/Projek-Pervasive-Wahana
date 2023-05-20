<x-app-layout>

    @section('title', $title)
    
    <section class="bg-white">
        <div class="p-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-12">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">Paket</h2>
            </div>
            <div class="space-y-8 lg:grid lg:grid-cols-3 sm:gap-6 xl:gap-10 lg:space-y-0">
                <x-pricing-card />
                <x-pricing-card />
                <x-pricing-card />
            </div>
        </div>
      </section>
</x-app-layout>