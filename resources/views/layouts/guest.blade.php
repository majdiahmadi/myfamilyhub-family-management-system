<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'MyFamilyHub') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col pt-6 sm:pt-0 bg-[#E0A6F1]">
            
            <div class="absolute top-6 left-8">
                <a href="/" class="text-2xl font-bold text-black tracking-tight">
                    MyFamilyHub
                </a>
            </div>

            <div class="flex-grow flex items-center justify-center">
                {{ $slot }}
            </div>
            
        </div>
    </body>
</html>