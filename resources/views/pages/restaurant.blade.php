<x-app-layout>
    @section('title', $title)
    <div class="min-h-screen flex flex-col bg-white">
        <div class="px-8 py-4 flex flex-col gap-1">
            <span class="font-semibold text-gray-800">Hi, Dede</span>
            <p class="text-2xl font-medium text-gray-800">Kamu ingin makan dimana hari ini?</p>
        </div>
        <div class="mx-auto px-4 grid grid-cols-2 md:grid-cols-3 gap-4">
            <x-restaurant-card
                name="Kentucky Fried Chicken"
                src="https://logowik.com/content/uploads/images/kfc-kentucky-fried-chicken-black8961.jpg"/>
            <x-restaurant-card
                name="Warung Masakan Padang"
                :shadow="true"
                src="https://awsimages.detik.net.id/community/media/visual/2022/01/13/rm-padang-rating-tinggi.jpeg?w=700&q=90"/>
            <x-restaurant-card
                name="Upnormal Coffee"
                src="https://i0.wp.com/i.gojekapi.com/darkroom/gofood-indonesia/v2/images/uploads/b8f74fa9-0629-4456-b6d6-44f9d2dcfac1_brand-logo_1589281692346.jpg"/>
            <x-restaurant-card
                name="Burger King"
                img-padding="p-4"
                src="https://logos-world.net/wp-content/uploads/2020/03/Burger-King-symbol.jpg"/>
        </div>
    </div>
</x-app-layout>
