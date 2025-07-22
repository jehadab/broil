@extends('layout.main-layout')

@section('content')
    <!-- Hero Section -->
    <!-- <section class="hero">
        <div class="hero__overlay">
            <h1 class="hero__title">Welcome to Broil</h1>
            <p class="hero__subtitle">Experience the finest dining in town</p>
        </div>
    </section> -->

    <!-- Featured Section -->
    <section class="image-slider">
        <div class="col-12 px-0 ">
            <div class="row hide-small-screen">
                <div class="col-12 d-flex justify-content-center align-items-center py-4">
                    <span class="smile-face">
                </span>
                </div>
            </div>
            <div class="row ">
                <div class="col-12 " style="z-index: 5">
                    <div id="specialtiesCarousel" class="carousel slide" data-bs-ride="carousel">
                        <!-- Carousel Indicators -->
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#specialtiesCarousel" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#specialtiesCarousel" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#specialtiesCarousel" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                        </div>

                        <!-- Carousel Items -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="slide-content">
                                    <div class="slide-image"
                                         style="background-image: url({{ asset(('images/home-slider/SliderSmall-01.png')) }})"></div>
                                    <div class="carousel-caption">
                                        <h3 class="slide-title">your Cravings Our Creation</h3>
                                        <p class="slide-description">Premium & high quality ingredients</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="slide-content">
                                    <div class="slide-image"
                                         style="background-image: url({{ asset(('images/home-slider/SliderSmall-03.png')) }})"></div>
                                    <div class="carousel-caption">
                                        <h3 class="slide-title">The burger You Deserve</h3>
                                        <p class="slide-description">HOME OF BURGERS WORTH A STANDING OVATION</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="slide-content">
                                    <div class="slide-image"
                                         style="background-image: url({{ asset(('images/home-slider/SliderSmall-02.png')) }})"></div>
                                    <div class="carousel-caption">
                                        <h3 class="slide-title">The burger You Love</h3>
                                        <p class="slide-description">From the first bite</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Carousel Controls -->
                        <button class="carousel-control-prev d-none d-md-flex" type="button"
                                data-bs-target="#specialtiesCarousel"
                                data-bs-slide="prev">
                        <span class="" aria-hidden="true">
                            <img src="{{ asset('images/icons/arrow-left.svg') }}" alt="Previous">
                        </span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next d-none d-md-flex" type="button"
                                data-bs-target="#specialtiesCarousel"
                                data-bs-slide="next">
                        <span class="" aria-hidden="true">
                            <img src="{{ asset('images/icons/arrow-right.svg') }}" alt="Next">
                        </span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Preview Section -->
    <section class="bg-orange">
        <div class="row">
            <div class="col-12">
                <div class="broil-background position-relative">
                    <img src="{{ asset('images/home/broil-text.png') }}" class="broil-background-text" alt="">

                    <div class="branch-text-container position-absolute bottom-0 start-0 p-4">
                        <h2 class="branch-title">SINCE<br><span>1973</span></h2>
                        <p class="branch-description">WE ARE DELIVERING FOOD FOR MORE THAN 50 YEARS OUR BRANCHES ARE
                            FROM THE FIRST WHO INTRODUCED FAST FOOD <span class="orange2-text">TO SYRIA</span>.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu Preview Section -->
    <section id="top-selling" class="bg-orange">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 text-center pb-md-5">
                    <p class="top-selling-text ">TOP SELLING ITEMS</p>
                </div>
            </div>

            <!-- Desktop Layout -->
            <div class="d-flex flex-row justify-content-lg-center d-none d-md-flex " style="gap: 5rem;">

                <!-- Menu Item 1 -->
                <div class="col-md-4 col-lg-2  ">
                    <div class=" border-0 ">
                        <div class="  align-items-center justify-content-center">
                            <img class="top-sell-img " style="z-index: 101"
                                 src="{{ asset('images/top-selling/TopSelling01.png') }}" alt="top-selling01">
                        </div>
                    </div>
                </div>

                <!-- Menu Item 3 -->
                <div class="col-md-4 col-lg-2  ">
                    <div class=" border-0 ">
                        <div class=" d-flex align-items-center justify-content-center">
                            <img class="top-sell-img " src="{{ asset('images/top-selling/TopSelling03.png') }}"
                                 alt="top-selling03">
                        </div>
                    </div>
                </div>

                <!-- Menu Item 2 -->
                <div class="col-md-4 col-lg-2 ">
                    <div class=" border-0 ">
                        <div class=" d-flex align-items-center justify-content-center">
                            <img class="top-sell-img " src="{{ asset('images/top-selling/TopSelling02.png') }}"
                                 alt="top-selling02">
                        </div>
                    </div>
                </div>


                <!-- Menu Item 4 -->
                <div class="col-md-4 col-lg-2  ">
                    <div class=" border-0 ">
                        <div class=" d-flex align-items-center justify-content-center">
                            <img class="top-sell-img " src="{{ asset('images/top-selling/TopSelling04.png') }}"
                                 alt="top-selling04">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Mobile Swipeable Carousel --}}
            <div class="d-md-none">
                <div class="mobile-slider">
                    <div class="mobile-slider__track d-flex">
                        {{-- repeat for as many items as you have --}}
                        <div class="mobile-slider__item">
                            <img
                                src="{{ asset('images/top-selling/TopSelling01.png') }}"
                                class=""
                                alt="top-selling01"
                            >
                        </div>
                        <div class="mobile-slider__item">
                            <img
                                src="{{ asset('images/top-selling/TopSelling02.png') }}"
                                class=""
                                alt="top-selling02"
                            >
                        </div>
                        <div class="mobile-slider__item">
                            <img
                                src="{{ asset('images/top-selling/TopSelling03.png') }}"
                                class=""
                                alt="top-selling03"
                            >
                        </div>
                        <div class="mobile-slider__item">
                            <img
                                src="{{ asset('images/top-selling/TopSelling04.png') }}"
                                class=""
                                alt="top-selling04"
                            >
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
