<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/second-section-accordion.js') }}" defer></script>
    <script src="{{ asset('js/fourth-section-accordion.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black|Montserrat" rel="stylesheet">


    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/landingpage.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/nav.css') }}" rel="stylesheet">
    <link href="{{ asset('css/second-section-accordion.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fourth-section-accordion.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ Auth::check() ? url('/home') : url('/') }}"><h1>
                    {{ config('app.name', 'Laravel') }}
                </h1></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"><h4>{{ __('Login') }}</h4></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}"><h4>{{ __('Register') }}</h4></a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>

        <footer id="footer-Section">
        	<div class="footer-top-layout">
        		<div class="container">
        			<div class="row">
        				<div class="OurBlog">
        					<h4>RIGMA</h4>
        					<p>Lorem ipsum keme keme keme 48 years mashumers , cheapangga jongoloids warla na bakit biway kasi boyband na ang na ang jutay majubis paminta krung-krung at.</p>
        					<div class="post-blog-date">September 2018</div>
        				</div>

        				<div class="col-lg-4 col-md-4 col-sm-4">
        					<div class="footer-col-item">
        							<h4>About us</h4>
        							<address>
        								501,507 your company address<br>
        								400015 Maharashtra, UK
        							</address>
        						</div>
        				</div>

        				<div class="col-lg-4 col-md-4 col-sm-4">
        					<h4>Reach Us</h4>
							<div class="item-contact">
								<a href="tel:630-885-9200"><span class="link-id">P</span>:<span>630-885-9200</span></a> <a href="tel:630-839.2006"><span class="link-id">F</span>:<span>630-839.2006</span></a> <a href="mailto:info@rigma.com"><span class="link-id">E</span>:<span>info@rigmatechnology.com</span></a>
							</div>
        				</div>

        				<div class="col-lg-4 col-md-4 col-sm-4">
        					<h4>Sign up for Newsletter</h4>
							<form class="signUpNewsletter" action="" method="get">
								<input name="" class="gt-email form-control" placeholder="You@youremail.com" type="text">
								<input name="" class="btn-go" value="Go" type="button">
							</form>
        				</div>


        			</div>
        		</div>
        	</div>
        	<div class="footer-bottom-layout">
        		<div class="socialMedia-footer">
        			<div class="col-md-12">
	                    <ul class="social-network social-circle">
	                        <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
	                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
	                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
	                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
	                        <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
	                    </ul>
					</div>
        		</div>
        		<div class="copyright-tag">Copyright © 201 Bugslayers. All Rights Reserved.</div>
        	</div>
        </footer>
    </div>

    <!-- Element Showed -->
    <a id="menu" class="waves-effect waves-light btn btn-floating"></a>

    <!-- Import jQuery -->
    <script type="text/javascript" src="{{ asset('lib/jquery-3.3.1.min.js') }}"></script>

    @yield('individual_javascript')
</body>
</html>
