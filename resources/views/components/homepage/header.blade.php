<nav x-data="{ open: false }" class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">

            <div class="flex-shrink-0">
                <a href="/" class="flex items-center space-x-3">
                    <svg class="h-12 w-12" viewBox="0 0 75 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <ellipse cx="37.5" cy="24.5" rx="37.5" ry="24.5" fill="#D9D9D9"></ellipse>
                    </svg>
                    <span class="font-bold text-xl text-black">ANGLIČTINA NA STŘEDNÍ</span>
                </a>
            </div>

            <div class="hidden md:flex items-center space-x-6">
                <a href="#" class="text-black font-bold hover:text-[#f8b900] text-base">MATURITNÍ TÉMATA</a>
                <a href="#" class="text-black font-bold hover:text-[#f8b900] text-base">PRO UČITELE</a>
                <a href="#" class="text-black font-bold hover:text-[#f8b900]">PŘIHLÁSIT SE</a>
                <a href="#" class="bg-[#f8b900] text-white font-bold px-4 py-2 rounded-[5px] hover:bg-yellow-500 transition-colors">REGISTROVAT SE</a>
            </div>
            <div class="-mr-2 flex md:hidden">
                <button @click="open = !open" type="button" class="bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                    <span class="sr-only">Otevřít hlavní menu</span>
                    <svg :class="{'hidden': open, 'block': !open }" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg :class="{'hidden': !open, 'block': open }" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div x-show="open" class="md:hidden">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="#" class="text-gray-800 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-bold">MATURITNÍ TÉMATA</a>
            <a href="#" class="text-gray-800 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-bold">PRO UČITELE</a>
            <a href="#" class="text-gray-800 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-bold">PŘIHLÁSIT SE</a>
        </div>
        <div class="pt-4 pb-3 border-t border-gray-200">
            <div class="px-2">
                 <a href="#" class="block w-full text-center bg-[#f8b900] text-white font-bold px-4 py-3 rounded-md hover:bg-yellow-500 transition-colors">REGISTROVAT SE</a>
            </div>
        </div>
    </div>
</nav>
