<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Wahana </title>

    <style>
    @import url("https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css");
    </style>
    @livewireStyles
    @wireUiScripts
    @livewireScripts
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>
<body class="bg-gray-50">
    {{-- SIDEBAR --}}

    <x-sidebar />

    <main>
        <div class="sm:ml-64 mt-[68px]">
            {{ $slot }}
        </div>
    </main>

    <script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>

</body>
</html>
