<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyFamilyHub</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-[#E0A6F1] min-h-screen flex flex-col">

    <div class="p-8">
        <h1 class="text-3xl font-bold text-black tracking-tight">MyFamilyHub</h1>
    </div>

    <div class="flex-grow flex items-center justify-center px-4">
        
        <div class="bg-[#F8D7F9] p-8 rounded-[2.5rem] shadow-xl text-center w-full max-w-sm">
            
            <div class="flex justify-center mb-6">
                <img src="{{ asset('images/logo.png') }}" alt="Tawakkal Logo" class="h-56 w-auto object-contain">
            </div>

            <div class="space-y-4">
                <a href="{{ route('login') }}" class="block w-full bg-[#E0A6F1] hover:bg-purple-400 text-white font-bold py-3 rounded-full transition shadow-sm border border-white/50">
                    Family Member ↗
                </a>
                
                <a href="{{ route('login') }}" class="block w-full bg-[#E0A6F1] hover:bg-purple-400 text-white font-bold py-3 rounded-full transition shadow-sm border border-white/50">
                    Family Admin ↗
                </a>

                <a href="{{ route('login') }}" class="block w-full bg-[#E0A6F1] hover:bg-purple-400 text-white font-bold py-3 rounded-full transition shadow-sm border border-white/50">
                    System Admin ↗
                </a>
            </div>

        </div>
    </div>

</body>
</html>