<x-app-layout>
    @section('title', $title)

    <div class="flex flex-col py-4 px-6 items-center gap-9">
        <div class="font-sans text-2xl text-gray-500 font-semibold text-center">
            <span>Attractions</span>
        </div>

        <x-attractions-card 
            src="{{ asset('assets/img/Rumah hantu/sampul_rh.png') }}"
            altSrc="Haunted House"
            attractionName="Rumah Hantu"
            iconDisease="{{ asset('assets/img/small assets/heart-attack.png') }}"
            altIconDisease="heart attack"
            thrill="90%"
            colorThrill="bg-red-700"
            thrillWidth="w-48"
            speed="25%"
            colorSpeed="bg-green-700"
            speedWidth="w-20"
            desc='Rumah Hantu merupakan salah satu wahana berupa bangunan "berhantu" berisi berbagai karakter menyeramkan berupa pemeran hantu dan boneka animatronika untuk menakut-nakuti pengunjung.'        
        />

        <x-attractions-card 
            src="{{ asset('assets/img/Roler/whn_rc_03.png') }}"
            altSrc="Roller Coaster"
            attractionName="Roller Coaster"
            iconDisease="{{ asset('assets/img/small assets/heart-attack.png') }}"
            altIconDisease="heart attack"
            thrill="70%"
            colorThrill="bg-red-700"
            thrillWidth="w-44"
            speed="90%"
            colorSpeed="bg-red-700"
            speedWidth="w-48"
            desc='Kereta luncur adalah wahana permainan berupa kereta yang dipacu dengan kecepatan tinggi pada jalur rel khusus, biasanya terletak di atas tanah yang memiliki ketinggian yang berbeda-beda'         
        />

        <x-attractions-card 
            src="{{ asset('assets/img/Komedi/sampul_kp.png') }}"
            altSrc="Komedi Putar"
            attractionName="Komedi Putar"
            iconDisease="{{ asset('assets/img/small assets/heart-attack.png') }}"
            visibility="hidden"
            altIconDisease="heart attack"
            thrill="10%"
            colorThrill="bg-green-700"
            thrillWidth="w-16"
            speed="50%"
            colorSpeed="bg-yellow-500"
            speedWidth="w-36"    
            desc='Komidi putar adalah atraksi kuda-kudaan yang bisa dinaiki dan berputar dalam sebuah pelantaran datar. Sebuah komidi putar biasanya ditemukan dalam taman bermain atau taman hiburan'     
        />
        
        
    </div>
    
</x-app-layout>