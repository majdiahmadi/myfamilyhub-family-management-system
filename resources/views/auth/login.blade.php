<x-guest-layout>
    <div class="w-full sm:max-w-md bg-[#F8D7F9] px-8 py-10 rounded-[2rem] shadow-xl text-center">
        
        <div class="flex flex-col items-center mb-4">
            <div>
                <img src="{{ asset('images/logo.png') }}" alt="Tawakkal Logo" class="h-48 w-auto object-contain">
            </div>
        </div>

        <h3 class="text-lg font-bold mb-6 text-black">Login</h3>

        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}" class="text-left space-y-5">
            @csrf

            <div>
                <label for="email" class="block font-bold text-sm text-black mb-1 pl-1">Email</label>
                <input id="email" 
                       class="block w-full h-12 rounded-lg border-none bg-white px-4 text-black font-bold shadow-sm placeholder-gray-400 focus:ring-2 focus:ring-purple-500" 
                       type="email" 
                       name="email" 
                       :value="old('email')" 
                       required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div>
                <label for="password" class="block font-bold text-sm text-black mb-1 pl-1">Password</label>
                <input id="password" 
                       class="block w-full h-12 rounded-lg border-none bg-white px-4 text-black font-bold shadow-sm placeholder-gray-400 focus:ring-2 focus:ring-purple-500" 
                       type="password" 
                       name="password" 
                       required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="flex items-center justify-between mt-8 pt-2">
                <a href="/" class="bg-[#E0A6F1] hover:bg-purple-400 text-white font-bold py-2 px-8 rounded-full shadow-sm text-sm transition">
                    Back ↗
                </a>

                <button type="submit" class="bg-[#E0A6F1] hover:bg-purple-400 text-white font-bold py-2 px-8 rounded-full shadow-sm text-sm transition">
                    Login ↗
                </button>
            </div>
        </form>
    </div>
</x-guest-layout>