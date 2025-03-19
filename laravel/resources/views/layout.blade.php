<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>@yield("title", "Trial & Victory")</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <meta name="description"
          content="@yield('meta-description', 'Twee gepassioneerde webontwikkelaars die op maat gemaakte weboplossingen bieden, van datadashboards tot WordPress websites. Wij maken jouw website werkend zoals jij wilt.')">
    @yield("custom_css")
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.scss', 'resources/js/app.ts'])
    @else
        <script>console.error("Er ging iets mis met de static files.")</script>
    @endif

</head>
<body class="landing is-preload">

<!-- Page Wrapper -->
<div id="page-wrapper">

    <!-- Header -->
    <header id="header"
            @if (Route::current()->getName() == "index")
                class="alt"
            @endif
    >
        <h1><a href="{{route('index')}}">Trial & Victory</a></h1>
        <nav id="nav">
            <ul>
                <li class="special">
                    <a href="#menu" class="menuToggle"><span>Menu</span></a>
                    <div id="menu">
                        <ul>
                            <li><a href="{{route('index')}}">Home</a></li>
                            <li><a href="{{route("about_us")}}">Over ons</a></li>
                            <li><a href="{{route("services")}}">Onze diensten</a></li>
                            <li><a href="{{route("portfolio")}}">Portfolio</a></li>
                            <li><a href="{{route("pricing")}}">Tarieven</a></li>
                            <li><a href="{{route("contact")}}">Contact</a></li>
                            @if (App::environment('local'))
                                <li><a href="{{route("elements")}}">Elements</a></li>
                                <li><a href="{{route("generic")}}">Generiek</a></li>
                            @endif
                            {{-- <li><a href="#">Sign Up</a></li> --}}
                            {{-- <li><a href="#">Log In</a></li>  --}}
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
    </header>


    @yield('content')

    <!-- Footer -->
    <footer id="footer">
        <ul class="icons">
            <li><a href="mailto:contact@trialandvictory.nl" class="icon solid fa-envelope"><span
                        class="label">Email</span></a></li>
        </ul>
        <ul class="copyright">
            <li>&copy; Trial & Victory <?= date("Y") ?></li>
        </ul>
    </footer>

</div>

<!-- Scripts -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery.scrollex.min.js')}}"></script>
<script src="{{asset('js/jquery.scrolly.min.js')}}"></script>
<script src="{{asset('js/browser.min.js')}}"></script>
<script src="{{asset('js/breakpoints.min.js')}}"></script>
<script src="{{asset('js/util.js')}}"></script>
<script src="{{asset('js/theme.js')}}"></script>
@yield("custom_js")
</body>
</html>
