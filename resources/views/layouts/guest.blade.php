<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased ">
    <div class="bg-color-log flex justify-center items-center h-screen ">
        <!-- Left: Login Form -->
        <div class="lg:p-36 md:p-52 sm:20 p-8 w-full lg:w-1/2">
            <div class="border-2 border-solid border-yellow-400 bg-color-primary py-20 px-5 rounded-2xl cursor-pointer hover:bg-orange-600 ease-in duration-200">
                <!-- <div>
                    <a href="/">
                        <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                    </a>
                </div> -->
                {{ $slot }}
            </div>
        </div>
        <!-- Right: Image -->
        <div class="w-1/2 h-screen hidden lg:block">
            <img src="/images/BG.png" alt="Placeholder Image" class="object-cover w-full h-full">
        </div>
    </div>
</body>

</html>