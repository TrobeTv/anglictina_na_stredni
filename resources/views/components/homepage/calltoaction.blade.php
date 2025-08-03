{{--
  CTA Banner Component
  Uses the provided SVG as a responsive background.
--}}

<section aria-label="Výzva k registraci" class="relative bg-[#FFD14B]">
  {{-- Background SVG --}}
  <div class="absolute inset-0 z-0 overflow-hidden">
    <svg class="h-full w-full object-cover" id="visual" viewBox="0 0 1920 300" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"><rect x="0" y="0" width="1920" height="300" fill="#FFD14B"></rect><defs><linearGradient id="grad1_0" x1="84.4%" y1="0%" x2="100%" y2="100%"><stop offset="-78%" stop-color="#ffd14b" stop-opacity="1"></stop><stop offset="178.00000000000006%" stop-color="#ffd14b" stop-opacity="1"></stop></linearGradient></defs><defs><linearGradient id="grad2_0" x1="0%" y1="0%" x2="15.6%" y2="100%"><stop offset="-78%" stop-color="#ffd14b" stop-opacity="1"></stop><stop offset="178.00000000000006%" stop-color="#ffd14b" stop-opacity="1"></stop></linearGradient></defs><g transform="translate(1920, 0)"><path d="M0 285C-38.5 284.2 -76.9 283.3 -112.5 271.6C-148.1 259.9 -180.8 237.3 -210 210C-239.3 182.7 -265.1 150.6 -277.2 114.8C-289.3 79 -287.6 39.5 -286 0L0 0Z" fill="#F8B900"></path></g><g transform="translate(0, 300)"><path d="M0 -290C39.5 -288 79 -286 111.7 -269.8C144.5 -253.6 170.4 -223.1 194.5 -194.5C218.5 -165.8 240.5 -138.9 257.8 -106.8C275 -74.7 287.5 -37.3 300 0L0 0Z" fill="#F8B900"></path></g></svg>
  </div>

  {{-- Content Overlay --}}
  <div class="relative z-10 mx-auto max-w-7xl px-1 py-10 sm:px-6 lg:px-1">
    {{-- MODIFIED: This now uses Flexbox for mobile and CSS Grid for desktop to achieve perfect centering. --}}
    <div class="flex flex-col items-center gap-6 lg:grid lg:grid-cols-[1fr_auto_1fr] lg:items-center lg:gap-8">

      {{-- MODIFIED: Added lg:text-right to align text to the right on desktop --}}
      <p class="text-4xl font-semibold text-[#969696] lg:text-right">
        Na nic nečekej
      </p>

      <a href="#" class="text-center transform rounded-lg bg-[#969696] px-10 py-4 text-3xl font-extrabold uppercase text-[#FFD14B] shadow-lg transition-transform duration-200 hover:scale-105 hover:bg-[#828282]">
        Registruj se zdarma!
      </a>

      {{-- MODIFIED: Added lg:text-left to align text to the left on desktop --}}
      <p class="text-4xl font-semibold text-[#969696] lg:text-left text-center">
        Zvládni maturitu levou zadní
      </p>

    </div>
  </div>
</section>
