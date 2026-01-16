<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 fixed top-0 w-full z-50 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            
            <div class="shrink-0 flex items-center">
                <a href="{{ route('dashboard') }}" class="font-bold text-2xl tracking-tight">
                    MyFamilyHub
                </a>
            </div>

            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex items-center">
                <a href="{{ route('dashboard') }}#background" class="text-gray-900 font-bold hover:text-purple-600 transition cursor-pointer">
                    Family Background
                </a>
                
                <a href="{{ route('dashboard') }}#tree" class="text-gray-900 font-bold hover:text-purple-600 transition cursor-pointer">
                    Family Tree
                </a>
                
                <a href="{{ route('dashboard') }}#events" class="text-gray-900 font-bold hover:text-purple-600 transition cursor-pointer">
                    Events
                </a>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="bg-[#E0A6F1] text-white px-6 py-2 rounded-full font-bold hover:bg-purple-400 transition shadow-sm">
                        Log Out ↗
                    </button>
                </form>
            </div>

            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>