@extends('layout.main-layout')

@section('navbar-color', 'navbar-menu')
@section('navbar-text-color', 'nav-link-menu')
@section('footer-class', 'footer-menu')  <!-- Add your menu footer background color class -->
@section('navbar-logo', asset('images/logo-down.png'))  <!-- Path to your menu navbar logo -->
@section('footer-logo', asset('images/logo-down.png'))  <!-- Path to your menu footer logo -->
@section('back-to-top', asset('images/icons/back-to-top.svg'))  <!-- Path to your menu footer logo -->


@section('content')
    <section class="menu-header">
        <div class="container-fluid px-3 px-md-5">
            <div class="row justify-content-center align-items-center"
                 style="min-height: calc(100vh - 120px);">
                <div class="col-12 col-md-10 col-lg-8 text-center">

                    {{-- Heading + face icon --}}
                    <div class="d-flex flex-wrap justify-content-center align-items-center gap-3 mb-4">
                        <h2 class="our mb-0">
                            OUR<br>
                            <span class="menu">MENU</span>
                        </h2>
                        <span class="face-img"></span>
                    </div>

                    {{-- subheads --}}
                    <div class="mb-5">
                        <img src="{{ asset('images/menu/lets.svg') }}" class="img-fluid mx-auto d-block" style="max-width:24rem;" alt="">
                    </div>
                    <div class="mb-5">
                        <img src="{{ asset('images/menu/lines.svg') }}" class="img-fluid mx-auto d-block" style="max-width:25rem;" alt="">
                    </div>

                </div>
            </div>

            {{-- Gallery --}}
            <div class="row gx-0 gy-4 justify-content-center">
                @foreach ([
                  'beef-burger.png',
                  'grilled-beef.png',
                  'chicken-burger.png',
                  'grilled-chicken.png',
                  'chicken-sandwich.png',
                  'beef-meals.png',
                  'Appetizers.png'
                ] as $img)
                    <div class="col-12 col-sm-10 col-md-10 col-lg-10">
                        <img
                            src="{{ asset('images/menu/menus/'.$img) }}"
                            class="img-fluid rounded"
                            alt=""
                        >
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@section('navbar-color', 'navbar-menu')
