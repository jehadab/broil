<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Broil Restaurant</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;900&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-md fixed-top">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand logo-brand" href="{{ route('home') }}">
                <img src="{{ asset("images/logo.png") }}" alt="Broil Logo" class="logo-image">
            </a>

            <!-- Hamburger menu for mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapsible Navigation Menu -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                            HOME
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">
                            ABOUT US
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('menu') ? 'active' : '' }}" href="{{ route('menu') }}">
                            MENU
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Home Icon (moved to the left) -->
{{--            <a href="{{ route('home') }}" class=" home-icon me-2">--}}
{{--                <img src="{{ asset('images/icons/home.svg') }}" alt="Home">--}}
{{--            </a>--}}
        </div>
    </nav>

    <!-- Main Content -->
    <main class="main-content">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <!-- Left Column -->
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="d-flex align-items-center mb-3">
                        <h2 class="fw-bold mb-0">BRCiIL</h2>
                    </div>
                    <div class="mb-3">
                        <p class="mb-1">Call us: +963 11 5122 333</p>
                        <p class="mb-1">broilsyria@gmail.com</p>
                    </div>
                    <div class="social-icons">
                        <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>

                <!-- Middle Column -->
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5 class="mb-3">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Home</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Who we are</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Contact us</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Visit us</a></li>
                    </ul>
                </div>

                <!-- Right Column -->
                <div class="col-md-4">
                    <h5 class="mb-3">Visit Us</h5>
                    <address class="mb-4">
                        Damascus / Syria<br>
                        Al Shaalan st,<br>
                        Qassion Mall
                    </address>
                    <div class="mb-4">
                        <a href="#top" class="btn btn-outline-light">BACK TO THE TOP</a>
                    </div>
                </div>
            </div>

            <!-- Copyright Section -->
            <div class="row mt-4 pt-3 border-top">
                <div class="col-12 text-center">
                    <p class="mb-0">Powered by <a href="#" class="text-white">Chroma CCS</a></p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
