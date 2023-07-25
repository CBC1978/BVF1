<div class="nav"><a class="btn btn-expanded"></a>
    <div class="nav">
        <nav class="nav-main-menu">
            <ul class="main-menu">
                <li> <a class="dashboard2 {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}"><img src="{{ asset('dashboard/imgs/page/dashboard/dashboard.svg') }}" alt="jobBox"><span class="name">Accueil</span></a>
                </li>
                <li> <a class="dashboard2 {{ request()->routeIs('offers') ? 'active' : '' }}" href="{{ route('offers') }}"><img src="{{ asset('dashboard/imgs/page/dashboard/candidates.svg') }}" alt="jobBox"><span class="name">Offres</span></a>
                </li>
                <li> <a class="dashboard2 {{ request()->routeIs('myoffers') ? 'active' : '' }}" href="{{ route('myoffers') }}"><img src="{{ asset('dashboard/imgs/page/dashboard/recruiters.svg') }}" alt="jobBox"><span class="name">Mes Offres</span></a>
                </li>
                {{-- <li> <a class="dashboard2 {{ request()->routeIs('stat') ? 'active' : '' }}" href="{{ route('stat') }}"><img src="{{ asset('dashboard/imgs/page/dashboard/jobs.svg') }}" alt="jobBox"><span class="name">Statistiques</span></a>
                </li>
                <li> <a class="dashboard2 {{ request()->routeIs('settings') ? 'active' : '' }}" href="{{ route('settings') }}"><img src="{{ asset('dashboard/imgs/page/dashboard/settings.svg') }}" alt="jobBox"><span class="name">Paramètres</span></a>
                </li> --}}
            </ul>
        </nav>
        
    </div>
    
    <div class="border-bottom mb-20 mt-20"></div>
    <div class="box-profile-completed text-center mb-30">
        <div id="circle-staticstic-demo"></div>
        <h6 class="mb-10">Profile Completed</h6>
        <p class="font-xs color-text-mutted">Please add detailed information to your profile. This will help you develop your career more quickly.</p>
    </div>
    <div class="sidebar-border-bg mt-50"><span class="text-grey">WE ARE</span><span class="text-hiring">HIRING</span>
        <p class="font-xxs color-text-paragraph mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto</p>
        <div class="mt-15"><a class="btn btn-paragraph-2" href="#">Know More</a></div>
    </div>
</div>
