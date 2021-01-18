<div class="py-1 bg-black top">
			<div class="container">
				<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
					<div class="col-lg-12 d-block">
						<div class="row d-flex">
							<div class="col-md pr-4 d-flex topper align-items-center">
								<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
								<span class="text">+ 880 1732379393</span>
							</div>
							<div class="col-md pr-4 d-flex topper align-items-center">
								<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
								<span class="text">diuproject@email.com</span>
							</div>
							<div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
                                <marquee>We Are Medstepbd A Health Information Provider and Emergency Ambulance Service Provider Platform</marquee>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
			<div class="container">
				<a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('med/images/mainlogo.png') }}" alt="logo" height="50" width="200"></a>
				<button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
				</button>
				<div class="collapse navbar-collapse" id="ftco-nav">
					<ul class="navbar-nav nav ml-auto">
						<li class="nav-item"><a href="{{ url('/') }}" class="nav-link"><span>Home</span></a></li>
						<li class="nav-item"><a href="{{ url('/#about-section') }}" class="nav-link"><span>About</span></a></li>
						<li class="nav-item"><a href="{{ url('/service') }}" class="nav-link"><span>Services</span></a></li>

						<li class="nav-item"><a href="{{ url('/#blog-section') }}" class="nav-link"><span>Blog</span></a></li>
                        <li class="nav-item"><a href="{{ url('/#contact-section') }}" class="nav-link"><span>Contact</span></a></li>

                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown cta mr-md-2">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/profile">Profile</a>
                                    @if(Auth::user()->roll_as == "admin")
                                        <a class="dropdown-item" href="/dashboard">Dashboard</a>
                                        <a class="dropdown-item" href="{{ url('notify')}}">Notification</a>
                                    @endif
                                    @if(Auth::user()->roll_as == "vendor")
                                        <a class="dropdown-item" href="/vendor-dashboard">Dashboard</a>
                                    @endif
                                    @if(Auth::user()->roll_as == NULL)
                                        <a class="dropdown-item" href="{{ url('notify')}}">Notification</a>
                                    @endif
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

                    </ul>
                </div>
            </div>
      </nav>
