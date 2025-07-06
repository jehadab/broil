@extends('layout.main-layout')

@section('content')
    <section class="about-section position-relative text-white">
        {{-- Background layer --}}
        <div class="about-bg position-absolute w-100 h-100"></div>

        <div class="container py-5 position-relative">
            {{-- Smile face (hidden on xs) --}}
            <div class="row justify-content-center mb-4">
                <div class="col-auto d-none d-sm-flex justify-content-center">
                    <span class="smile-face"></span>
                </div>
            </div>

            {{-- Main content --}}
            <div class="row justify-content-center">
                <div class="col-11 col-md-8 col-lg-6">
                    <div class="about-content text-center text-lg-start">
                        <h1 class="about-title mb-4">WHO WE ARE</h1>
                        <p class="about-intro lead mb-4">
                            WELCOME TO BROIL – FAST FOOD WITH FLAVOR AND HERITAGE
                        </p>
                        <div class="about-body mb-5">
                            <p>AT BROIL, WE SERVE BOLD FLAVORS, FRESH INGREDIENTS, AND FAST SERVICE – ALL WRAPPED IN A CASUAL AND WELCOMING EXPERIENCE. WHETHER YOU'RE STOPPING BY FOR A QUICK SNACK OR A FULL MEAL, BROIL DELIVERS QUALITY YOU CAN TASTE IN EVERY BITE.</p>
                            <p>WE'RE MORE THAN JUST A FAST FOOD RESTAURANT – WE'RE THE NEW GENERATION OF A TIME-HONORED TRADITION. BROIL IS PROUDLY OWNED AND OPERATED BY THE SAME TEAM BEHIND STATION, A BELOVED LOCAL SNACK SPOT THAT HAS BEEN SERVING CUSTOMERS WITH CARE AND PASSION SINCE 1979.</p>
                            <p class="fw-bold">FROM OUR CLASSIC ROOTS TO OUR MODERN MENU, EVERYTHING WE DO REFLECTS A COMMITMENT TO FLAVOR, CONSISTENCY, AND COMMUNITY.</p>
                        </div>
                        <div class="contact-info">
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
    </section>
@endsection

