{{-- Alpine.js komponenta pro karusel --}}
<section
    x-data="{
    activeIndex: 0,
    autoplay: true,
    items: 3,
    touchStartX: 0,
    touchEndX: 0,

    // Funkce pro vyhodnocení swipe gesta
    handleSwipe() {
        // Minimální vzdálenost pro rozpoznání gesta (v pixelech)
        const minSwipeDistance = 50;

        // Vypočítáme rozdíl mezi startem a koncem
        let swipeDistance = this.touchStartX - this.touchEndX;

        // Pokud je vzdálenost větší než minimální, jedná se o swipe
        if (Math.abs(swipeDistance) > minSwipeDistance) {

            // Swipe doleva (posun na další slide)
            if (swipeDistance > 0) {
                this.activeIndex = (this.activeIndex + 1) % this.items;
            }

            // Swipe doprava (posun na předchozí slide)
            if (swipeDistance < 0) {
                this.activeIndex = (this.activeIndex - 1 + this.items) % this.items;
            }
        }

        // Vynulujeme pozice pro další dotyk
        this.touchStartX = 0;
        this.touchEndX = 0;
        }
    }"
    x-init="
        let timer = setInterval(() => {
            if (autoplay) {
                activeIndex = (activeIndex + 1) % items;
            }
        }, 4000); // Mění slide každé 4 sekundy (trochu delší čas)
        $watch('autoplay', value => {
            if (value) {
                clearInterval(timer);
                timer = setInterval(() => {
                    activeIndex = (activeIndex + 1) % items;
                }, 4000);
            } else {
                clearInterval(timer);
            }
        });
    "
    class="w-full py-16 sm:py-24">

    <div class="max-w-7xl mx-auto px-6">

        {{-- DESKTOP ZOBRAZENÍ (zůstává beze změny) --}}
        <div class="hidden md:grid grid-cols-3 gap-8">
            {{-- První box (Desktop) --}}
            <div class="relative overflow-hidden bg-[#3c3c3c]/[0.44] rounded-[50px] p-8 text-white min-h-[450px] flex flex-col">
                <div class="absolute w-[627px] h-[700px] bottom-[-400px] left-[-400px] bg-[#2D2D2D]/[0.62] rounded-full z-0"></div>
                <div class="relative z-10 flex-grow flex flex-col">
                    <div class="w-[120px] h-[120px] bg-[#2D2D2D] rounded-full flex items-center justify-center">
                        <svg width="82" height="47" viewBox="0 0 82 47" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M77.1924 0.00568807C69.3909 0.331432 53.8846 1.5171 44.3121 5.82823C43.6515 6.12569 43.2771 6.65463 43.2771 7.20767V45.3197C43.2771 46.5295 45.0752 47.2941 46.5913 46.7327C56.44 43.0856 70.6835 42.0905 77.7262 41.8182C80.1308 41.725 82 40.3068 82 38.6069V3.22123C82.0014 1.36627 79.8147 -0.103242 77.1924 0.00568807ZM37.6879 5.82823C28.1168 1.5171 12.6106 0.332479 4.80904 0.00568807C2.1867 -0.103242 0 1.36627 0 3.22123V38.6079C0 40.3089 1.86923 41.7271 4.27375 41.8193C11.3193 42.0916 25.5699 43.0877 35.4186 46.7368C36.9305 47.2972 38.7229 46.5336 38.7229 45.327V7.18881C38.7229 6.63473 38.3499 6.12674 37.6879 5.82823Z" fill="#F8B900"/></svg>
                    </div>
                    <h3 class="text-4xl font-bold text-white mt-8">MATURITNÍ TÉMATA</h3>
                    <p class="text-xl text-white mt-4 flex-grow">Proč ztrácet čas a nervy hledáním podkladů? Připravili jsme pro tebe všechny maturitní okruhy na jednom místě.</p>
                    <a href="#" class="text-xl font-bold text-[#f8b900] mt-8 flex items-center group">Chci vědět více<svg width="56" height="24" viewBox="0 0 56 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="ml-3 transition-transform group-hover:translate-x-2"><path d="M55.0607 13.0607C55.6465 12.4749 55.6465 11.5251 55.0607 10.9393L45.5147 1.3934C44.9289 0.807611 43.9792 0.807611 43.3934 1.3934C42.8076 1.97919 42.8076 2.92893 43.3934 3.51472L51.8787 12L43.3934 20.4853C42.8076 21.0711 42.8076 22.0208 43.3934 22.6066C43.9792 23.1924 44.9289 23.1924 45.5147 22.6066L55.0607 13.0607ZM0 12L0 13.5L54 13.5V12V10.5L0 10.5L0 12Z" fill="#F8B900"/></svg></a>
                </div>
            </div>
            {{-- Druhý a třetí box pro desktop zůstávají stejné... --}}
            <div class="relative overflow-hidden bg-[#3c3c3c]/[0.44] rounded-[50px] p-8 text-white min-h-[450px] flex flex-col">
                <div class="absolute w-[627px] h-[700px] bottom-[-400px] left-[-400px] bg-[#2D2D2D]/[0.62] rounded-full z-0"></div>
                <div class="relative z-10 flex-grow flex flex-col">
                    <div class="w-[120px] h-[120px] bg-[#2D2D2D] rounded-full flex items-center justify-center">
                       <svg width="122" height="87" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M100.4 417.2C104.5 402.6 112.2 389.3 123 378.5L304.2 197.3L338.1 163.4C354.7 180 389.4 214.7 442.1 267.4L476 301.3L442.1 335.2L260.9 516.4C250.2 527.1 236.8 534.9 222.2 539L94.4 574.6C86.1 576.9 77.1 574.6 71 568.4C64.9 562.2 62.6 553.3 64.9 545L100.4 417.2zM156 413.5C151.6 418.2 148.4 423.9 146.7 430.1L122.6 517L209.5 492.9C215.9 491.1 221.7 487.8 226.5 483.2L155.9 413.5zM510 267.4C493.4 250.8 458.7 216.1 406 163.4L372 129.5C398.5 103 413.4 88.1 416.9 84.6C430.4 71 448.8 63.4 468 63.4C487.2 63.4 505.6 71 519.1 84.6L554.8 120.3C568.4 133.9 576 152.3 576 171.4C576 190.5 568.4 209 554.8 222.5C551.3 226 536.4 240.9 509.9 267.4z" fill="#F8B900"/></svg>
                    </div>
                    <h3 class="text-4xl font-bold text-white mt-8">INTERAKTIVNÍ CVIČENÍ</h3>
                    <p class="text-xl text-white mt-4 flex-grow">Zapomeň na nudné papíry. Procvičuj angličtinu formou kvízů s okamžitou zpětnou vazbou a učením z chyb.</p>
                    <a href="#" class="text-xl font-bold text-[#f8b900] mt-8 flex items-center group">Objevte materiály<svg width="56" height="24" viewBox="0 0 56 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="ml-3 transition-transform group-hover:translate-x-2"><path d="M55.0607 13.0607C55.6465 12.4749 55.6465 11.5251 55.0607 10.9393L45.5147 1.3934C44.9289 0.807611 43.9792 0.807611 43.3934 1.3934C42.8076 1.97919 42.8076 2.92893 43.3934 3.51472L51.8787 12L43.3934 20.4853C42.8076 21.0711 42.8076 22.0208 43.3934 22.6066C43.9792 23.1924 44.9289 23.1924 45.5147 22.6066L55.0607 13.0607ZM0 12L0 13.5L54 13.5V12V10.5L0 10.5L0 12Z" fill="#F8B900"/></svg></a>
                </div>
            </div>
            <div class="relative overflow-hidden bg-[#3c3c3c]/[0.44] rounded-[50px] p-8 text-white min-h-[450px] flex flex-col">
                <div class="absolute w-[627px] h-[700px] bottom-[-400px] left-[-400px] bg-[#2D2D2D]/[0.62] rounded-full z-0"></div>
                <div class="relative z-10 flex-grow flex flex-col">
                    <div class="w-[120px] h-[120px] bg-[#2D2D2D] rounded-full flex items-center justify-center">
                        <svg width="122" height="87" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M96 96C113.7 96 128 110.3 128 128L128 464C128 472.8 135.2 480 144 480L544 480C561.7 480 576 494.3 576 512C576 529.7 561.7 544 544 544L144 544C99.8 544 64 508.2 64 464L64 128C64 110.3 78.3 96 96 96zM208 288C225.7 288 240 302.3 240 320L240 384C240 401.7 225.7 416 208 416C190.3 416 176 401.7 176 384L176 320C176 302.3 190.3 288 208 288zM352 224L352 384C352 401.7 337.7 416 320 416C302.3 416 288 401.7 288 384L288 224C288 206.3 302.3 192 320 192C337.7 192 352 206.3 352 224zM432 256C449.7 256 464 270.3 464 288L464 384C464 401.7 449.7 416 432 416C414.3 416 400 401.7 400 384L400 288C400 270.3 414.3 256 432 256zM576 160L576 384C576 401.7 561.7 416 544 416C526.3 416 512 401.7 512 384L512 160C512 142.3 526.3 128 544 128C561.7 128 576 142.3 576 160z" fill="#F8B900"/></svg>
                    </div>
                    <h3 class="text-4xl font-bold text-white mt-8">SLEDOVÁNÍ POKROKU</h3>
                    <p class="text-xl text-white mt-4 flex-grow">Měj své výsledky pod kontrolou. Náš systém ti ukáže, kde máš mezery a na co se ještě zaměřit.</p>
                    <a href="#" class="text-xl font-bold text-[#f8b900] mt-8 flex items-center group">Začít cvičit<svg width="56" height="24" viewBox="0 0 56 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="ml-3 transition-transform group-hover:translate-x-2"><path d="M55.0607 13.0607C55.6465 12.4749 55.6465 11.5251 55.0607 10.9393L45.5147 1.3934C44.9289 0.807611 43.9792 0.807611 43.3934 1.3934C42.8076 1.97919 42.8076 2.92893 43.3934 3.51472L51.8787 12L43.3934 20.4853C42.8076 21.0711 42.8076 22.0208 43.3934 22.6066C43.9792 23.1924 44.9289 23.1924 45.5147 22.6066L55.0607 13.0607ZM0 12L0 13.5L54 13.5V12V10.5L0 10.5L0 12Z" fill="#F8B900"/></svg></a>
                </div>
            </div>
        </div>

        {{-- MOBILNÍ ZOBRAZENÍ (Kompletně přepracované) --}}
        <div
            class="md:hidden"
            @mouseenter="autoplay = false"
            @mouseleave="autoplay = true"
            @touchstart="touchStartX = $event.touches[0].clientX; autoplay = false;"
            @touchmove="touchEndX = $event.touches[0].clientX;"
            @touchend="handleSwipe()"
        >
            {{-- Kontejner, který ořízne obsah (slidy) --}}
            <div class="relative overflow-hidden">
                {{-- Posuvný pás (track), který obsahuje všechny slidy --}}
                <div
                    class="flex transition-transform duration-500 ease-in-out"
                    :style="{ transform: `translateX(-${activeIndex * 100}%)` }"
                >
                    {{-- Slide 1 --}}
                    <div class="w-full flex-shrink-0">
                        <div class="relative h-full min-h-[480px] overflow-hidden bg-[#3c3c3c]/[0.44] rounded-[40px] p-6 text-white flex flex-col">
                            <div class="absolute w-[500px] h-[500px] bottom-[-250px] left-[-250px] bg-[#2D2D2D]/[0.62] rounded-full z-0"></div>
                            <div class="relative z-10 flex-grow flex flex-col">
                                <div class="w-[90px] h-[90px] bg-[#2D2D2D] rounded-full flex items-center justify-center">
                                   <svg width="62" height="37" viewBox="0 0 82 47" fill="none" xmlns="http://www.w3.org/2000/svg" class="transform scale-75"><path d="M77.1924 0.00568807C69.3909 0.331432 53.8846 1.5171 44.3121 5.82823C43.6515 6.12569 43.2771 6.65463 43.2771 7.20767V45.3197C43.2771 46.5295 45.0752 47.2941 46.5913 46.7327C56.44 43.0856 70.6835 42.0905 77.7262 41.8182C80.1308 41.725 82 40.3068 82 38.6069V3.22123C82.0014 1.36627 79.8147 -0.103242 77.1924 0.00568807ZM37.6879 5.82823C28.1168 1.5171 12.6106 0.332479 4.80904 0.00568807C2.1867 -0.103242 0 1.36627 0 3.22123V38.6079C0 40.3089 1.86923 41.7271 4.27375 41.8193C11.3193 42.0916 25.5699 43.0877 35.4186 46.7368C36.9305 47.2972 38.7229 46.5336 38.7229 45.327V7.18881C38.7229 6.63473 38.3499 6.12674 37.6879 5.82823Z" fill="#F8B900"/></svg>
                                </div>
                                <h3 class="text-3xl font-bold text-white mt-6">MATURITNÍ TÉMATA</h3>
                                <p class="text-xl font-bold text-white mt-3 flex-grow">Proč ztrácet čas hledáním podkladů? Všechny okruhy na jednom místě.</p>
                                <a href="#" class="text-lg font-bold text-[#f8b900] mt-6 flex items-center group">Chci vědět více<svg width="56" height="24" viewBox="0 0 56 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="ml-2 transition-transform group-hover:translate-x-1 transform scale-75"><path d="M55.0607 13.0607C55.6465 12.4749 55.6465 11.5251 55.0607 10.9393L45.5147 1.3934C44.9289 0.807611 43.9792 0.807611 43.3934 1.3934C42.8076 1.97919 42.8076 2.92893 43.3934 3.51472L51.8787 12L43.3934 20.4853C42.8076 21.0711 42.8076 22.0208 43.3934 22.6066C43.9792 23.1924 44.9289 23.1924 45.5147 22.6066L55.0607 13.0607ZM0 12L0 13.5L54 13.5V12V10.5L0 10.5L0 12Z" fill="#F8B900"/></svg></a>
                            </div>
                        </div>
                    </div>
                    {{-- Slide 2 --}}
                    <div class="w-full flex-shrink-0">
                        <div class="relative h-full min-h-[480px] overflow-hidden bg-[#3c3c3c]/[0.44] rounded-[40px] p-6 text-white flex flex-col">
                            <div class="absolute w-[500px] h-[500px] bottom-[-250px] left-[-250px] bg-[#2D2D2D]/[0.62] rounded-full z-0"></div>
                             <div class="relative z-10 flex-grow flex flex-col">
                                <div class="w-[90px] h-[90px] bg-[#2D2D2D] rounded-full flex items-center justify-center">
                                   <svg width="92" height="57" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M100.4 417.2C104.5 402.6 112.2 389.3 123 378.5L304.2 197.3L338.1 163.4C354.7 180 389.4 214.7 442.1 267.4L476 301.3L442.1 335.2L260.9 516.4C250.2 527.1 236.8 534.9 222.2 539L94.4 574.6C86.1 576.9 77.1 574.6 71 568.4C64.9 562.2 62.6 553.3 64.9 545L100.4 417.2zM156 413.5C151.6 418.2 148.4 423.9 146.7 430.1L122.6 517L209.5 492.9C215.9 491.1 221.7 487.8 226.5 483.2L155.9 413.5zM510 267.4C493.4 250.8 458.7 216.1 406 163.4L372 129.5C398.5 103 413.4 88.1 416.9 84.6C430.4 71 448.8 63.4 468 63.4C487.2 63.4 505.6 71 519.1 84.6L554.8 120.3C568.4 133.9 576 152.3 576 171.4C576 190.5 568.4 209 554.8 222.5C551.3 226 536.4 240.9 509.9 267.4z" fill="#F8B900"/></svg>
                                </div>
                                <h3 class="text-3xl font-bold text-white mt-6">INTERAKTIVNÍ CVIČENÍ</h3>
                                <p class="text-lg text-white mt-3 flex-grow">Zapomeň na nudné papíry. Procvičuj angličtinu formou kvízů s okamžitou zpětnou vazbou a učením z chyb.</p>
                                <a href="#" class="text-lg font-bold text-[#f8b900] mt-6 flex items-center group">Objevte materiály<svg width="56" height="24" viewBox="0 0 56 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="ml-2 transition-transform group-hover:translate-x-1 transform scale-75"><path d="M55.0607 13.0607C55.6465 12.4749 55.6465 11.5251 55.0607 10.9393L45.5147 1.3934C44.9289 0.807611 43.9792 0.807611 43.3934 1.3934C42.8076 1.97919 42.8076 2.92893 43.3934 3.51472L51.8787 12L43.3934 20.4853C42.8076 21.0711 42.8076 22.0208 43.3934 22.6066C43.9792 23.1924 44.9289 23.1924 45.5147 22.6066L55.0607 13.0607ZM0 12L0 13.5L54 13.5V12V10.5L0 10.5L0 12Z" fill="#F8B900"/></svg></a>
                            </div>
                        </div>
                    </div>
                    {{-- Slide 3 --}}
                    <div class="w-full flex-shrink-0">
                        <div class="relative h-full min-h-[480px] overflow-hidden bg-[#3c3c3c]/[0.44] rounded-[40px] p-6 text-white flex flex-col">
                            <div class="absolute w-[500px] h-[500px] bottom-[-250px] left-[-250px] bg-[#2D2D2D]/[0.62] rounded-full z-0"></div>
                             <div class="relative z-10 flex-grow flex flex-col">
                                <div class="w-[90px] h-[90px] bg-[#2D2D2D] rounded-full flex items-center justify-center">
                                   <svg width="92" height="57" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M96 96C113.7 96 128 110.3 128 128L128 464C128 472.8 135.2 480 144 480L544 480C561.7 480 576 494.3 576 512C576 529.7 561.7 544 544 544L144 544C99.8 544 64 508.2 64 464L64 128C64 110.3 78.3 96 96 96zM208 288C225.7 288 240 302.3 240 320L240 384C240 401.7 225.7 416 208 416C190.3 416 176 401.7 176 384L176 320C176 302.3 190.3 288 208 288zM352 224L352 384C352 401.7 337.7 416 320 416C302.3 416 288 401.7 288 384L288 224C288 206.3 302.3 192 320 192C337.7 192 352 206.3 352 224zM432 256C449.7 256 464 270.3 464 288L464 384C464 401.7 449.7 416 432 416C414.3 416 400 401.7 400 384L400 288C400 270.3 414.3 256 432 256zM576 160L576 384C576 401.7 561.7 416 544 416C526.3 416 512 401.7 512 384L512 160C512 142.3 526.3 128 544 128C561.7 128 576 142.3 576 160z" fill="#F8B900"/></svg>
                                </div>
                                <h3 class="text-3xl font-bold text-white mt-6">SLEDOVÁNÍ POKROKU</h3>
                                <p class="text-lg text-white mt-3 flex-grow">Měj své výsledky pod kontrolou. Náš systém ti ukáže, kde máš mezery a na co se ještě zaměřit.</p>
                                <a href="#" class="text-lg font-bold text-[#f8b900] mt-6 flex items-center group">Začít cvičit<svg width="56" height="24" viewBox="0 0 56 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="ml-2 transition-transform group-hover:translate-x-1 transform scale-75"><path d="M55.0607 13.0607C55.6465 12.4749 55.6465 11.5251 55.0607 10.9393L45.5147 1.3934C44.9289 0.807611 43.9792 0.807611 43.3934 1.3934C42.8076 1.97919 42.8076 2.92893 43.3934 3.51472L51.8787 12L43.3934 20.4853C42.8076 21.0711 42.8076 22.0208 43.3934 22.6066C43.9792 23.1924 44.9289 23.1924 45.5147 22.6066L55.0607 13.0607ZM0 12L0 13.5L54 13.5V12V10.5L0 10.5L0 12Z" fill="#F8B900"/></svg></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Navigační tečky --}}
            <div class="flex justify-center space-x-3 mt-6">
                <template x-for="i in items" :key="i">
                    <button
                        @click="activeIndex = i - 1"
                        class="w-3 h-3 rounded-full transition-colors"
                        :class="activeIndex === i - 1 ? 'bg-[#2D2D2D]' : 'bg-[#3c3c3c]/[0.44]  hover:bg-gray-400'"
                    ></button>
                </template>
            </div>
        </div>
    </div>
</section>
