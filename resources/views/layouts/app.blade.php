<!DOCTYPE html>
<html lang="fr">
<head>
@include('layouts.navbars.headers')
    @livewireStyles
</head>
<body>
@include('layouts.modal')
@include('layouts.navbars.head')

@include('layouts.navbars.nav_mobile')
<main class="main">
    @include('layouts.navbars.nav')
    {{ $slot }}
</main>
@include('layouts.footers.footer')
@include('layouts.footers.scripts')
@livewireScripts
</body>
</html>
