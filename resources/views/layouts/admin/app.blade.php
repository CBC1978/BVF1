<!DOCTYPE html>
<html lang="fr">
<head>
@include('layouts.admin.navbars.headers')
    @livewireStyles
</head>
<body>
@include('layouts.admin.modal')
@include('layouts.admin.navbars.head')
@include('layouts.admin.navbars.nav_mobile')
<main class="main">
    @include('layouts.admin.navbars.nav')
    {{ $slot }}
</main>
@include('layouts.admin.footers.footer')
@include('layouts.admin.footers.scripts')
@livewireScripts
</body>
</html>
