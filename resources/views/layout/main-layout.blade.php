<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover"
    />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Welcome to Broil Restaurant—savor the best steaks & seafood in town.">
    <!-- Open Graph (optional) -->
    <meta property="og:title" content="Broil Restaurant">
    <meta property="og:description" content="Savor the best steaks & seafood in town.">
    <meta property="og:image" content="{{ asset('images/social-preview.jpg') }}">
    <meta property="og:url" content="https://broil.chromaccs.com/">
    <meta name="twitter:card" content="summary_large_image">

    <title>Broil Restaurant</title>

    <!-- Performance hints -->
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">

    <!-- Favicons -->
    <link rel="icon" href="{{ asset('images/icons/smile-face.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('images/icons/smile-face.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/icons/smile-face.png') }}">

    <!-- CSS/JS Bundles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Font Awesome -->
    <link
        rel="preload"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        as="style"
        integrity="sha384-…"
        crossorigin="anonymous"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    </noscript>

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;900&display=swap"
        rel="stylesheet"
        media="print"
        onload="this.media='all'">
    <noscript>
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;900&display=swap"
            rel="stylesheet">
    </noscript>

    <!-- Theme color for Chrome on Android -->
    <meta name="theme-color" content="#ffffff">
</head>

<body>
<nav class="navbar navbar-expand-md fixed-top navbar-dark position-fixed">
    <div class="container-fluid">

        {{-- MOBILE HEADER --}}
        <div class="d-md-none position-relative w-100 d-flex justify-content-center align-items-center"
             style="height:65px;">
            <!-- Centered: Smile face -->
            <span class="smile-face nav-smile"></span>

            <!-- Left: Logo -->
            <a
                class="navbar-brand position-absolute start-0 ps-3"
                href="{{ route('home') }}"
            >
                <img src="{{ asset('images/logo.png') }}" class="logo-image" alt="Broil Logo">
            </a>

            <!-- Right: Hamburger -->
            <button
                class="navbar-toggler position-absolute end-0 pe-3"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNavMobile"
                aria-controls="navbarNavMobile"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        {{-- MOBILE COLLAPSE --}}
        <div class="collapse navbar-collapse d-md-none" id="navbarNavMobile">
            <ul class="navbar-nav w-100 text-center bg-dark2">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">HOME</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">ABOUT US</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('menu') }}">MENU</a></li>
            </ul>
        </div>

        {{-- DESKTOP HEADER (logo centered + desktop menu) --}}
        <div class="d-none d-md-flex w-100 justify-content-center align-items-center position-relative">
            <a class="navbar-brand mx-auto" href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Broil Logo" class="logo-image">
            </a>

            <div class="collapse navbar-collapse" id="navbarNavDesktop">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">ABOUT US</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('menu') }}">MENU</a></li>
                </ul>
            </div>
        </div>

    </div>
</nav>

<!-- Preloader -->
<div id="preloader">
    <div class="image-switcher">
        <img src="{{ asset('images/icons/smile-face.png') }}" alt="Loading…" class="switcher-img img1">
        <img src="{{ asset('images/icons/smile-face2.svg') }}" alt="Loading…" class="switcher-img img2">
    </div>
</div>
<!-- Main Content -->
<main class="main-content">
    @yield('content')
</main>

<!-- Footer -->
<footer class="@yield("footer-class" , "bg-black") pb-4 minimal">
    <a href="#top" class="back-to-top-link">
        <img class="back-to-top-icon" src="@yield('back-to-top',asset('images/icons/back-to-top.svg'))"
             alt="Back to top">
    </a>
    <div class="row align-items-center">
        <!-- Logo and Contact Column -->
        <div class="col-12 col-md-3 d-flex justify-content-center align-items-center mb-4 mb-md-0">
            <div class="text-center">
                <p>
                    <img src="@yield('navbar-logo', asset('images/logo-down.png'))" alt="Broil Logo" class="img-fluid">
                </p>
                <p class="footer-broil-text mb-1">
                    Call us: <a href="tel:+963115122333" class="text-white text-decoration-none">+963 11 5122 333</a>
                </p>
                <p class="footer-broil-text">broilsyria@gmail.com</p>
            </div>
        </div>


        <!-- Navigation and Social Column -->
        <div class="col-12 col-md-6">
            <div class="d-flex flex-column align-items-center">
                <!-- Back to top -->
                <div class="mb-3">
                    <span class="back-to-top">BACK TO THE TOP</span>
                </div>

                <!-- Navigation Links -->
                <div class="d-flex justify-content-between w-75 align-items-center by-4">
                    <a class="footer-broil-text-link text-decoration-none" href="{{ route('home') }}">Home</a>
                    <a class="footer-broil-text-link text-decoration-none" style="padding-left: 2.5rem"
                       href="{{ route('menu') }}">Our Menu</a>
                    <a class="footer-broil-text-link text-decoration-none " href="{{ route('home') }}">Contact Us</a>
                </div>

                <!-- Social Media -->
                <div class="d-flex justify-content-between align-items-center w-75 mb-4">
                    <a target="_blank" rel="noopener noreferrer"
                       href="https://www.instagram.com/broilrest?igsh=MXRkcmRnbnY0Y3hiZA=="
                       class="bold-footer-text text-white text-decoration-none">Instagram</a>
                    <a target="_blank" rel="noopener noreferrer"
                       href="https://www.instagram.com/chroma.ccs?igsh=MWJ0cmNlZ3doMGhucQ==">
                        <img src="{{ asset('images/Star.png') }}" class="mx-3" style="height: 60px; width: 60px"
                             alt="Divider">

                    </a>
                    <a class="bold-footer-text text-white text-decoration-none">Facebook</a>
                </div>

                <!-- Bottom Logo -->
                <a target="_blank" rel="noopener noreferrer"
                   href="https://www.instagram.com/chroma.ccs?igsh=MWJ0cmNlZ3doMGhucQ==">
                    <img src="{{ asset('images/p-chroma.png') }}" class="img-fluid" alt="Partner Logo">
                </a>
            </div>
        </div>

        <!-- Address Column -->
        <div class="col-12 col-md-3 d-flex mt-4 mt-md-0 justify-content-center align-items-center">
            <div class="text-center">
                <h6 class="bold-footer-text text-white mb-3">Visit us</h6>
                <p class="footer-broil-text mb-1">Damascus / Syria</p>
                <p class="footer-broil-text mb-1">Al Shaalan st</p>
                <p class="footer-broil-text mb-0">Qassion Mall</p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>

