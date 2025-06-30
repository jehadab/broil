@extends('layout.main-layout')

@section('navbar-color', 'navbar-menu')
@section('navbar-text-color', 'nav-link-menu')
@section('footer-class', 'footer-menu')  <!-- Add your menu footer background color class -->
@section('navbar-logo', asset('images/logo-down.png'))  <!-- Path to your menu navbar logo -->
@section('footer-logo', asset('images/logo-down.png'))  <!-- Path to your menu footer logo -->
@section('back-to-top', asset('images/icons/back-to-top.svg'))  <!-- Path to your menu footer logo -->


@section('content')

    <!-- Menu Categories -->
    <section class="menu-header " >
        <div class="container-fluid" style="padding: 100px">
            <div class="row justify-content-center" >
                <div class="col-md-10 col-lg-8 text-center" style="min-height: calc(100vh - 100px)">

                    <!-- Main Heading -->
                    <div class="d-flex flex-column justify-content-center " >
                        <div class="col-12 d-flex justify-content-center align-items-start  gap-4 ">
                            <div class="flex-row">
                                {{--                            <div class="flex-column">--}}
                                <h2 class="our">OUR <br><span class="menu">MENU</span></h2>
                                <h2 class="menu"></h2>
                            </div>
                            {{--                            </div>--}}
                            {{--                            <div class="flex-column">--}}
                            <span class="face-img"></span>

                            {{--                            </div>--}}
                        </div>
                    </div>

                    <!-- Subheading -->
                    <div class="d-flex col-12 align-items-start justify-content-center mb-5">
                        <img src="{{ asset('images/menu/lets.svg') }}" style="width: 53rem;" alt="image">
                    </div>
                    <div class="d-flex col-12 align-items-start justify-content-center">

                        <img src="{{ asset('images/menu/lines.svg') }}" style="width: 25rem;height: 25rem" alt="image">

                    </div>
                    <!-- Decorative Line -->
                    {{--                <div class="divider mx-auto my-4"></div>--}}

                </div>
            </div>

            <div class="d-flex flex-column gap-5">

                <div class="d-flex align-items-start justify-content-center">

                    <img src="{{ asset('images/menu/menus/beef-burger.png') }}" style="width: 100%;height: 100%"
                         alt="image">
                </div>
                <div class="d-flex align-items-start justify-content-center">

                    <img src="{{ asset('images/menu/menus/grilled-beef.png') }}" style="width: 100%;height: 100%"
                         alt="image">
                </div>
                <div class="d-flex align-items-start justify-content-center">

                    <img src="{{ asset('images/menu/menus/chicken-burger.png') }}" style="width: 100%;height: 100%"
                         alt="image">
                </div>
                <div class="d-flex align-items-start justify-content-center">

                    <img src="{{ asset('images/menu/menus/grilled-chicken.png') }}" style="width: 100%;height: 100%"
                         alt="image">
                </div>
                <div class="d-flex align-items-start justify-content-center">

                    <img src="{{ asset('images/menu/menus/chicken-sandwich.png') }}" style="width: 100%;height: 100%"
                         alt="image">
                </div>

                <div class="d-flex align-items-start justify-content-center">

                    <img src="{{ asset('images/menu/menus/beef-meals.png') }}" style="width: 100%;height: 100%"
                         alt="image">
                </div>
            <div class="d-flex align-items-start justify-content-center">

                    <img src="{{ asset('images/menu/menus/Appetizers.png') }}" style="width: 100%;height: 100%"
                         alt="image">
                </div>
        </div>
        </div>
    </section>
@endsection

@section('navbar-color', 'navbar-menu')
