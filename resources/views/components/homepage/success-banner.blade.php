<!-- Desktop Version (EXACTLY as you provided - never changes) -->
<section class="relative w-full overflow-hidden hidden md:block">
    <div class="absolute inset-0 z-0">
        <svg id="visual" viewBox="0 0 960 540" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" class="w-full h-full">
            <rect x="0" y="0" width="960" height="540" fill="#f8b900"></rect>
            <g transform="translate(960, 540)"><path d="M-378 0C-328.5 -42.9 -279.1 -85.8 -253.7 -146.5C-228.4 -207.2 -227.3 -285.8 -189 -327.4C-150.7 -368.9 -75.4 -373.5 0 -378L0 0Z" fill="#ffd14b"></path></g>
            <g transform="translate(0, 0)"><path d="M378 0C370.8 70.7 363.6 141.5 327.4 189C291.1 236.5 225.9 260.8 166.5 288.4C107.1 316 53.6 347 0 378L0 0Z" fill="#ffd14b"></path></g>
        </svg>
    </div>

    <div class="relative z-10 flex items-end h-[500px] max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-12 gap-8 w-full">
            <div class="col-span-5 flex justify-center relative min-h-[400px]">
                <img
                    src="{{ asset('images/avatar-anglictinanastredi.png') }}"
                    alt="Avatar"
                    class="absolute bottom-[-450px] h-[980px] w-auto max-w-none left-1/2 -translate-x-1/2"
                >
            </div>
            <div class="col-span-7 text-center pb-12">
                <h2 class="text-4xl lg:text-5xl xl:text-6xl font-black text-black">
                    Pro úspěch stačí 3 kroky
                </h2>
                <div class="mt-8 space-y-4">
                    <p class="text-2xl lg:text-3xl xl:text-4xl text-black font-extrabold">
                        1. ZAREGISTRUJ SE
                    </p>
                    <p class="text-2xl lg:text-3xl xl:text-4xl text-black font-extrabold">
                        2. VYBER TÉMA
                    </p>
                    <p class="text-2xl lg:text-3xl xl:text-4xl text-black font-extrabold">
                        3. PROCVIČUJ
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Mobile Version (Updated with exact avatar positioning match) -->
<section class="relative w-full overflow-hidden md:hidden">
    <div class="absolute inset-0 z-0">
        <svg id="visual" viewBox="0 0 960 540" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" class="w-full h-full">
            <rect x="0" y="0" width="960" height="540" fill="#f8b900"></rect>
            <g transform="translate(960, 540)"><path d="M-378 0C-328.5 -42.9 -279.1 -85.8 -253.7 -146.5C-228.4 -207.2 -227.3 -285.8 -189 -327.4C-150.7 -368.9 -75.4 -373.5 0 -378L0 0Z" fill="#ffd14b"></path></g>
            <g transform="translate(0, 0)"><path d="M378 0C370.8 70.7 363.6 141.5 327.4 189C291.1 236.5 225.9 260.8 166.5 288.4C107.1 316 53.6 347 0 378L0 0Z" fill="#ffd14b"></path></g>
        </svg>
    </div>

    <div class="relative z-10 flex items-end min-h-[200px] max-w-7xl mx-auto px-0 py-0">
        <div class="grid grid-cols-12 gap-4 w-full items-end">
            <!-- Avatar - Adjusted to sit exactly on bottom -->
            <div class="col-span-5 flex justify-center relative min-h-[210px] overflow-hidden">
                <img
                    src="{{ asset('images/avatar-anglictinanastredi.png') }}"
                    alt="Avatar"
                    class="absolute bottom-[-140px] w-[200px] h-auto origin-bottom"
                    style="left: 55%; transform: translateX(-50%) scale(2);"
                >
            </div>

            <!-- Text - Right Side (Centered) -->
            <div class="col-span-7 text-center pb-4">
                <h2 class="text-2xl font-black text-black">
                    Pro úspěch stačí 3 kroky
                </h2>
                <div class="mt-4 space-y-2">
                    <p class="text-lg text-black font-extrabold">
                        1. ZAREGISTRUJ SE
                    </p>
                    <p class="text-lg text-black font-extrabold">
                        2. VYBER TÉMA
                    </p>
                    <p class="text-lg text-black font-extrabold">
                        3. PROCVIČUJ
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>
