@extends('layout.main-layout')

@section('navbar-color', 'navbar-about')

@section('content')
<!-- Hero Section -->
<section class="hero">
    <div class="hero__overlay">
        <h1 class="hero__title">About Broil</h1>
        <p class="hero__subtitle">Our Story, Our Passion, Our Commitment</p>
    </div>
</section>

<!-- About Content -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- Story Section -->
                <div class="text-center mb-5">
                    <h2 class="display-4 mb-3 text-dark">Our Story</h2>
                    <p class="lead text-muted">
                        Founded in 2020, Broil has been serving exceptional cuisine to our community with passion and dedication.
                    </p>
                </div>
                
                <!-- Mission & Vision -->
                <div class="row mb-5">
                    <div class="col-md-6 mb-4 mb-md-0">
                        <h3 class="h4 mb-3 text-dark">Our Mission</h3>
                        <p class="text-muted">
                            To provide an unforgettable dining experience through innovative cuisine, 
                            exceptional service, and a warm, welcoming atmosphere that makes every 
                            guest feel like family.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <h3 class="h4 mb-3 text-dark">Our Vision</h3>
                        <p class="text-muted">
                            To become the premier destination for culinary excellence, known for 
                            our commitment to quality, creativity, and customer satisfaction.
                        </p>
                    </div>
                </div>
                
                <!-- Values Section -->
                <div class="bg-light rounded-3 p-5 text-center">
                    <h3 class="h4 mb-4 text-dark">Our Values</h3>
                    <div class="row">
                        <div class="col-md-4 mb-4 mb-md-0">
                            <h4 class="h5 text-primary mb-2">Quality</h4>
                            <p class="text-muted">We use only the finest ingredients</p>
                        </div>
                        <div class="col-md-4 mb-4 mb-md-0">
                            <h4 class="h5 text-primary mb-2">Innovation</h4>
                            <p class="text-muted">Constantly evolving our menu</p>
                        </div>
                        <div class="col-md-4">
                            <h4 class="h5 text-primary mb-2">Service</h4>
                            <p class="text-muted">Exceeding expectations</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection 