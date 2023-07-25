<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layouts.navbars.headers')
    @livewireStyles
    <title>Login - Job Portal HTML Template </title>
  </head>
  <body>
    <div id="preloader-active">
      <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
          <div class="text-center"><img src="assets/imgs/template/loading.gif" alt="jobBox"></div>
        </div>
      </div>
    </div>
   
    <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
    <div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
      <div class="mobile-header-wrapper-inner">
        
      </div>
    </div>
    <main class="main">
     <!-- Contenu de la page d'inscription -->
     @yield('content-register')
    </main>
    {{-- @if (session()->has('error'))
    <div class="alert alert-danger" role="alert">
        {{ session('error') }}
    </div>
@endif --}}
    @include('layouts.footers.scripts')
@livewireScripts
  </body>
</html>