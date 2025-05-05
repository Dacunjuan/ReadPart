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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Adamina&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-full antialiased m-[0px]">
    <nav class="bg-secondary h-[80px] w-auto">
    </nav>
    <div class="flex w-full min-h-full min-h-screen">
        <!-- 左邊區塊，佔 60% -->
        <div class="w-1/2 ps-50 pb-5 h-auto flex justify-center flex-col">
            <p style="font-family:Abril Fatface; font-size:78px;">ReadPart</p>
            <p style="font-family:Adamina; font-size:28px;">Always find some good part to read.</p>
            <a href="{{ route('login') }}"
                class="text-white bg-button hover:bg-blue-800 text-[28px] rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 mt-5 w-40 h-15 cursor-pointer"
                style="font-family:Adamina;">Start</a>
        </div>
        <!-- 右邊區塊，佔 40% -->
        <div class="w-1/2 p-4 h-auto flex items-center justify-center">
            <img src="{{ asset('images/logo2.svg') }}" alt="Logo">
        </div>
    </div>

    <footer class="bg-secondary h-[80px]">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        </div>
    </footer>
</body>

</html>
