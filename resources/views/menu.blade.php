@extends('layout.main-layout')

@section('content')

<!-- Menu Categories --><section class="menu-header py-5">
    <div class="container-fluid " style="padding: 100px">
        <div class="row justify-content-center" >
            <div class="col-md-10 col-lg-8 text-center">

                <!-- Main Heading -->
                <div class="d-flex align-items-start justify-content-center my-3">
                    <img src="{{ asset('images/menu/our-menu.png') }}" style="width: 40%;height: 40%" alt="fefe">
                </div>

                <!-- Subheading -->
                <div class="d-flex align-items-start justify-content-center mb-5">
                    <img src="{{ asset('images/menu/lets.svg') }}" style="width: 80%;height: 80%" alt="fefe">
                </div>
                <div class="d-flex align-items-start justify-content-center">

                    <img src="{{ asset('images/menu/lines.svg') }}" style="width: 40%;height: 40%" alt="fefe">

                </div>
                <!-- Decorative Line -->
{{--                <div class="divider mx-auto my-4"></div>--}}

            </div>
        </div>

        <div class="d-flex flex-column gap-5">

        <div class="d-flex align-items-start justify-content-center">

            <img src="{{ asset('images/menu/menus/beef-burger.png') }}" style="width: 100%;height: 100%" alt="fefe">
        </div>
        <div class="d-flex align-items-start justify-content-center">

            <img src="{{ asset('images/menu/menus/beef-burger.png') }}" style="width: 100%;height: 100%" alt="fefe">
        </div>
        <div class="d-flex align-items-start justify-content-center">

            <img src="{{ asset('images/menu/menus/beef-burger.png') }}" style="width: 100%;height: 100%" alt="fefe">
        </div>
        <div class="d-flex align-items-start justify-content-center">

            <img src="{{ asset('images/menu/menus/beef-burger.png') }}" style="width: 100%;height: 100%" alt="fefe">
        </div>
        </div>
    </div>
</section>
@endsection

@section('navbar-color', 'navbar-menu')
