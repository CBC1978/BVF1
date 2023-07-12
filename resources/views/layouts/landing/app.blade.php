<!DOCTYPE html>
<html lang="fr">
<head>
@include('layouts.landing.navbars.head')

    @livewireStyles
</head>
<body>

@include('layouts.landing.navbars.header')
<main class="main">
    @include('layouts.landing.navbars.nav')
    {{ $slot }}
</main>

@include('layouts.landing.footers.footer')
@include('layouts.landing.footers.scripts')
@livewireScripts
</body>
</html>
