@extends('layout.main-layout')

@section('content')
<!-- Hero Section -->
<section class="hero">
    <div class="hero__overlay">
        <h1 class="hero__title">Our Menu</h1>
        <p class="hero__subtitle">Discover our culinary creations</p>
    </div>
</section>

<!-- Menu Categories -->
<section class="py-5 bg-white">
    <div class="container">
        <h2 class="display-4 text-center mb-5 text-dark">Menu Categories</h2>
        
        <!-- Appetizers -->
        <div class="mb-5">
            <h3 class="h2 mb-4 text-primary border-bottom border-primary pb-2">Appetizers</h3>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h4 class="card-title h5 mb-2 text-dark">Bruschetta</h4>
                            <p class="card-text text-muted mb-3">Fresh tomatoes, basil, and mozzarella on toasted bread</p>
                            <span class="fw-bold text-primary fs-5">$12</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h4 class="card-title h5 mb-2 text-dark">Calamari</h4>
                            <p class="card-text text-muted mb-3">Crispy fried squid with marinara sauce</p>
                            <span class="fw-bold text-primary fs-5">$16</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h4 class="card-title h5 mb-2 text-dark">Spinach Artichoke Dip</h4>
                            <p class="card-text text-muted mb-3">Creamy dip served with tortilla chips</p>
                            <span class="fw-bold text-primary fs-5">$14</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Courses -->
        <div class="mb-5">
            <h3 class="h2 mb-4 text-primary border-bottom border-primary pb-2">Main Courses</h3>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h4 class="card-title h5 mb-2 text-dark">Grilled Ribeye Steak</h4>
                            <p class="card-text text-muted mb-3">16oz prime ribeye with garlic mashed potatoes</p>
                            <span class="fw-bold text-primary fs-5">$38</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h4 class="card-title h5 mb-2 text-dark">Lobster Pasta</h4>
                            <p class="card-text text-muted mb-3">Fresh lobster with linguine in white wine sauce</p>
                            <span class="fw-bold text-primary fs-5">$32</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h4 class="card-title h5 mb-2 text-dark">Truffle Burger</h4>
                            <p class="card-text text-muted mb-3">Wagyu beef with truffle aioli and aged cheddar</p>
                            <span class="fw-bold text-primary fs-5">$24</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Desserts -->
        <div>
            <h3 class="h2 mb-4 text-primary border-bottom border-primary pb-2">Desserts</h3>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h4 class="card-title h5 mb-2 text-dark">Chocolate Lava Cake</h4>
                            <p class="card-text text-muted mb-3">Warm chocolate cake with vanilla ice cream</p>
                            <span class="fw-bold text-primary fs-5">$12</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h4 class="card-title h5 mb-2 text-dark">Tiramisu</h4>
                            <p class="card-text text-muted mb-3">Classic Italian dessert with coffee and mascarpone</p>
                            <span class="fw-bold text-primary fs-5">$10</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h4 class="card-title h5 mb-2 text-dark">Crème Brûlée</h4>
                            <p class="card-text text-muted mb-3">Vanilla custard with caramelized sugar</p>
                            <span class="fw-bold text-primary fs-5">$11</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('navbar-color', 'navbar-menu') 