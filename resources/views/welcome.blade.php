<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-g">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>Angličtina na Střední</title>

    {{-- Tento řádek načte Tailwind CSS --}}
    @vite('resources/css/app.css')
</head>
<body class="antialiased">
    <x-homepage.header />
    {{-- Zde bude obsah stránky (hero sekce, atd.) --}}
    <main>
        <x-homepage.hero />
        <x-homepage.icon-boxes />
        <x-homepage.success-banner/>
    </main>

    {{-- footer komponenty --}}
    <x-footer />

</body>
</html>
