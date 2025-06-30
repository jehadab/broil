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
            <!-- Logo Centered -->
            <div class="d-flex justify-content-center align-items-center order-md-1 order-1 position-absolute">
                <a class="navbar-brand logo-brand mx-auto mx-md-0" href="{{ route('home') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="Broil Logo" class="logo-image">
                </a>
            </div>

            <!-- Collapsible Navigation Menu Centered -->
            <div class="collapse navbar-collapse order-md-2 order-2" id="navbarNav">
                <ul class="navbar-nav mx-auto">
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

            <!-- Hamburger menu for mobile - moved to right -->
            <button class="navbar-toggler order-3 ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="main-content">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-black pb-4 minimal">
        <a href="#top" class="back-to-top-link">
            <img class="back-to-top-icon" src="{{asset('images/back-to-top.svg')}}" alt="Back to top">
        </a>
            <div class="row">
                <!-- Logo and Contact Column -->
                <div class="col-12 col-md-3 d-flex justify-content-center align-items-center mb-4 mb-md-0">
                    <div class="text-center">
                        <p>
                            <img src="{{ asset('images/logo-down.png') }}" alt="Broil Logo" class="img-fluid">
                        </p>
                        <p class="footer-broil-text mb-1">
                            Call us: <a href="tel:+963115122333" class="text-white text-decoration-none">+963 11 5122 333</a>
                        </p>
                        <p class="footer-broil-text">broilsyria@gmail.com</p>
                    </div>
                </div>

                <!-- Navigation and Social Column -->
                <div class="col-12 col-md-6 d-flex flex-column align-items-center">
                    <div class="d-flex flex-row justify-content-center ">
                        <a class="back-to-top" style="text-decoration: none!important;">BACK TO THE TOP</a>
                    </div>
                    <div class="d-flex flex-row justify-content-center align-items-center mb-3">
                        <p class="footer-broil-text text-center me-4" style="font-size: 20px">Home</p>
                        <p class="footer-broil-text text-center me-4" style="font-size: 20px">Our Menu</p>
                        <p class="footer-broil-text" style="font-size: 20px">Contact Us</p>
                    </div>

                    <div class="d-flex flex-row  align-items-center ">
                        <p class="bold-footer-text ">Instagram</p>
                        <img src="{{ asset('images/Star.png') }}" style="height: 100px; width: 100px" alt="" class="mx-3">
                        <p class="bold-footer-text ">Facebook</p>
                    </div>

                    <div class="text-center">
                        <a>
                            <img src="{{ asset('images/p-chroma.png') }}" alt="">
                        </a>
                    </div>
                </div>

                <!-- Address Column -->
                <div class="col-12 col-md-3 d-flex justify-content-center align-items-center mt-4 mt-md-0">
                    <div class="text-center">
                        <p class="bold-footer-text">Visit us</p>
                        <p class="footer-broil-text">Damascus / Syria </p>
                        <p class="footer-broil-text"> Al Shaalan st </p>
                        <p class="footer-broil-text"> Qassion Mall </p>
                    </div>
                </div>
            </div>
    </footer>
</body>
</html>
