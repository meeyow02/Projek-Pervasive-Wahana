<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Wahana </title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.2.96/css/materialdesignicons.min.css">
    @livewireStyles

    @wireUiScripts
    @livewireScripts
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>
<body class="bg-gray-50">

    <x-sidebar/>

    <main>
        <div class="sm:ml-64 mt-[68px]">
            {{ $slot }}
        </div>
    </main>

</body>
</html>
