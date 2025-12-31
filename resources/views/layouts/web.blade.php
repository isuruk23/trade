<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('public/css/styles.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('public/images/favicon.ico') }}">
</head>
<body>
    <div id="app">
        <header>
        <div class="container">
            <nav class="navbar">
                <div class="logo">
                    <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('public/images/logo.png') }}" class="img-fluid logo-img" alt="">
                    {{ config('app.name', 'Zimvex') }}
                </a>

                </div>
                <ul class="nav-links">
                    <li><a href="{{ route('plan') }}">Plan</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('platform') }}">Platform</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
                 <div class="auth-buttons">
                        @guest               
                            @if (Route::has('login'))
                               <a href="{{ route('login') }}" class="btn btn-login">Log In</a>
                            @endif

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-primary">Get Started</a>
                            @endif
                        @else   
                        <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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

                </div>
            </nav>
        </div>
    </header>
    
        

        <main class="py-4">
            @yield('content')
        </main>
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div>
                    <div class="footer-logo">Zimvex</div>
                    <p style="color: #999; margin-bottom: 20px;">Premium trading platform for crypto, forex, and digital assets. Built for modern traders.</p>
                    <div class="social-icons">
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-telegram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div>
                    <h4 class="footer-heading">Company</h4>
                    <ul class="footer-links">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Partnerships</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="footer-heading">Trading</h4>
                    <ul class="footer-links">
                        <li><a href="#">Markets</a></li>
                        <li><a href="#">Platforms</a></li>
                        <li><a href="#">Trading Tools</a></li>
                        <li><a href="#">Fees</a></li>
                        <li><a href="#">API</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="footer-heading">Legal</h4>
                    <ul class="footer-links">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Risk Disclosure</a></li>
                        <li><a href="#">Compliance</a></li>
                        <li><a href="#">Cookie Policy</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="footer-heading">Support</h4>
                    <ul class="footer-links">
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Tutorials</a></li>
                        <li><a href="#">System Status</a></li>
                        <li><a href="#">Community</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>© 2024 Zimvex. All rights reserved. Trading involves risk. Only risk capital you're prepared to lose.</p>
                <p style="margin-top: 10px; font-size: 12px;">Zimvex is a registered trademark.</p>
            </div>
        </div>
    </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    @yield('script')
</body>
</html>
