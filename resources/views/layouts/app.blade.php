<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'ARKAN') }}</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&family=Radley:ital,wght@0,400;1,400&display=swap" rel="stylesheet">

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @stack('styles')
    </head>
    <body class="antialiased font-sans {{ $bodyClass ?? '' }}">
    @php
        $navbarTheme = $navbarTheme ?? '';
        $navDark = $navDark ?? false;
        $navbarEntrance = $navbarEntrance ?? true;
    @endphp
    
    @include('partials.loader')
    @include('partials.navbar', ['navbarTheme' => $navbarTheme, 'navDark' => $navDark, 'navbarEntrance' => $navbarEntrance])

    @yield('content')
    
    @unless($noFooter ?? false)
        @include('partials.footer')
    @endunless

    @stack('scripts')
</body>
</html>
