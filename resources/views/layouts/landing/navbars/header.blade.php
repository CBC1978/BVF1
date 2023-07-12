<header>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-expand-lg navbar-light navigation">
					<a class="navbar-brand" href="{{ route('Landing') }}">
						<img src="{{('landing/images/logo.png')}}" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto main-nav ">
							<li class="nav-item active">
								<a class="nav-link" href="{{ route('Landing') }}">Accueil</a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="{{ route('about-us') }}">A propos</a>
							</li>
							 {{-- <li class="nav-item active">
								<a class="nav-link" href="{{ route('blog') }}">Blog</a>
							</li>  --}}
							<li class="nav-item active">
								<a class="nav-link" href="{{ route('contact-us') }}">Nous contacter</a>
							</li>
							
						</ul>
						<ul class="navbar-nav ml-auto mt-10">
							<li class="nav-item">
								<a class="nav-link login-button" href="{{ route('login') }}">Connexion</a>
							</li>
							<li class="nav-item">
								<a class="nav-link text-white add-button" href="{{ route('register') }}"><i class="fa fa-plus-circle"></i> Inscription</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</header>
