@extends('layout.main-layout')

{{--@section('navbar-color', 'navbar-about')--}}

@section('content')
    <!-- About Content -->
    <section class=" py-4 bg-orange about-bg " style="min-height: 1600px; height: calc(100vh - 65px) ">
        <div class="container-fluid ">
            <!-- Centered Smile Face (if needed) -->

            <div class="d-flex flex-column justify-content-center ">
                <div class="col-12 d-flex justify-content-center pb-5 ">
                    <span class="smile-face"></span>
                </div>

                <!-- Content Section -->
                <div class="  offset-1">
                    <div class="col-lg-6 col-xl-5">
                        <div class="about-content">
                            <h1 class="about-title mb-4">WHO WE ARE</h1>

                            <div class="about-intro mb-4">
                                <p class="lead">WELCOME TO BROIL – FAST FOOD WITH FLAVOR AND HERITAGE</p>
                            </div>

                            <div class="about-body">
                                <p class="mb-4">AT BROIL, WE SERVE BOLD FLAVORS, FRESH INGREDIENTS, AND FAST SERVICE –
                                    ALL WRAPPED IN A CASUAL AND WELCOMING EXPERIENCE. WHETHER YOU'RE STOPPING BY FOR A
                                    QUICK SNACK OR A FULL MEAL, BROIL DELIVERS QUALITY YOU CAN TASTE IN EVERY BITE.</p>

                                <p class="mb-4">WE'RE MORE THAN JUST A FAST FOOD RESTAURANT – WE'RE THE NEW GENERATION
                                    OF A TIME-HONORED TRADITION. BROIL IS PROUDLY OWNED AND OPERATED BY THE SAME TEAM
                                    BEHIND STATION, A BELOVED LOCAL SNACK SPOT THAT HAS BEEN SERVING CUSTOMERS WITH CARE
                                    AND PASSION SINCE 1979.</p>

                                <p class="mb-4 fw-bold">FROM OUR CLASSIC ROOTS TO OUR MODERN MENU, EVERYTHING WE DO
                                    REFLECTS A COMMITMENT TO FLAVOR, CONSISTENCY, AND COMMUNITY.</p>
                            </div>

                            <div class="contact-info mt-5">
                                <p class="mb-1">For more info:</p>
                                <p class="mb-1">
                                    <a href="tel:+963115122333" class="text-white">+963 11 5122 333</a>
                                </p>
                                <p>
                                    <a href="mailto:broilsyria@gmail.com" class="text-white">broilsyria@gmail.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
