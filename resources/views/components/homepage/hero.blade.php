<div class="w-full">
    {{-- Hlavní kontejner celé sekce. Padding nahoře a dole (pt, pb) mu dává prostor. --}}
    <div class="relative w-full bg-[#2d2d2d] overflow-hidden pt-10 pb-0 md:pt-20">

        {{-- Dekorativní prvky v pozadí (beze změny) --}}
        <div class="absolute w-[160%] md:w-[90%] aspect-square bottom-[-80%] left-[-80%] md:bottom-[-45%] md:left-[-45%] bg-[#929292]/[0.15] rounded-full"></div>
        <div class="absolute w-[110%] md:w-[70%] aspect-square top-[-55%] right-[-55%] md:top-[-35%] md:right-[-35%] bg-[#929292]/[0.15] rounded-full"></div>
        <div class="absolute w-40 h-40 top-[-5rem] left-[-5rem] bg-[#f8b900] -rotate-45"></div>
        <div class="absolute w-40 h-40 bottom-[-5rem] right-[-5rem] bg-[#f8b900] -rotate-45"></div>

        {{-- Kontejner pro obsah, který je na stránce centrovaný. --}}
        <div class="relative z-10 h-full w-full max-w-7xl mx-auto px-6 flex flex-col md:flex-row items-end justify-between">

            {{-- CÍL: Přidán z-index, aby byl text navrchu --}}
            <div class="md:w-7/12 text-left md:text-left md:self-start md:pt-5 pl-20 relative z-20">
                <h1 class="text-4xl md:text-6xl font-bold text-white">
                    Maturita z angličtiny?
                    <br>
                </h1>
                <br>
                <h1 class="text-2xl md:text-5xl font-extrabold text-[#f8b900]">
                    BEZ STRESU A S JISTOTOU</h1>
                <p class="mt-4 max-w-xl text-2xl text-gray-200 font-normal font-[roboto]">
                    Interaktivní cvičení, kompletní témata a sledování pokroku. Vše, co potřebuješ k úspěchu, na jednom místě.
                </p>
                {{-- Kontejner pro centrování a odsazení --}}
                <div class="py-20 flex justify-start">

                    {{-- Vlastní tlačítko --}}
                    <a href="{{ route('register') }}" class="inline-block bg-[#f8b900] text-white font-bold text-[23px] px-10 py-4 rounded-[20px] hover:bg-yellow-500 transition-colors" style="filter: drop-shadow(9px 9px 4px rgba(0,0,0,0.25));">
                        REGISTRACE ZDARMA
                    </a>

                </div>
            </div>

            {{-- CÍL: Přidán negativní margin, který obrázek podsune pod text --}}
            <div class="md:w-6/12 w-full mt-10 md:mt-0 md:-ml-48 relative z-10 hidden md:block">
                <div class="h-[500px] md:h-[550px] overflow-hidden">
                    <img src="/images/avatar-anglictinanastredi.png" alt="Ilustrace studentky" class="w-full h-auto transform scale-180 origin-top">
                </div>
            </div>

        </div>
    </div>
</div>
