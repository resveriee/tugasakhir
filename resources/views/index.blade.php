@extends('layouts.app')

@section('content')
    <!-- banner -->
    <div class="container-fluid bg-primary text-white text-center py-5">
        @auth
            <h1>Welcome to Merr Stores, {{ Auth::user()->name }}!</h1>
        @else
            <h1>Welcome to Merr Stores!</h1>
        @endauth
        <p>Your one-stop shop for amazing products at unbeatable prices.</p>
    </div>

    <!-- quotes -->
    <div class="container my-4 text-center">
        <blockquote class="blockquote">
            <p class="mb-0">"The right tool can unlock the best performance." - Anonymous</p>
        </blockquote>
    </div>

    <!-- about us -->
    <div class="container my-5 text-center">
        <h2>About Us</h2>
        <p>At Mikey Stores, we specialize in high-quality gaming mice and accessories, carefully selected to meet the needs of professional and casual gamers alike. For over 10 years, we've been serving the gaming community, offering products that elevate your gaming experience.</p>
    </div>

    <!-- best seller view -->
    <div class="container my-5">
        <h2 class="text-center">Our Best Seller</h2>
        @if($bestseller)
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <img src="{{ asset('storage/products/' . $bestseller->image) }}" class="card-img-top" alt="Best Seller Product">
                        <div class="card-body">
                            <h5 class="card-title">{{ $bestseller->name }}</h5>
                            <p class="card-text">{{ $bestseller->description }}</p>
                            <a href="{{ route('product.show', $bestseller->id) }}" class="btn btn-primary">View Product</a>
                            <a href="/product" class="btn btn-primary">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <p>No best seller product found.</p>
        @endif
    </div>

    <!-- product view -->
    <div class="container my-3">
        <h2 class="text-center">Most Recommended Gaming Mice</h2>
        <div class="row justify-content-center">
            @foreach($recommend as $item)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('storage/products/' . $item->image) }}" class="card-img-top" alt="{{ $item->name }}" style="width: 100%; height: 200px; object-fit: contain;">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $item->name }}</h5>
                            <p class="card-text">{{ $item->description }}</p>
                            <p class="card-text"><strong>Rp. {{ number_format($item->price, 0,'','.') }}</strong></p>
                            <a href="{{ route('product.show', $item->id) }}" class="btn btn-primary">View Mouse</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- contact us -->
    <div class="container my-5 text-center">
        <h2>How to Contact Us</h2>
        <p>Have questions about our gaming mice or need recommendations? Get in touch with our experts!</p>
        <a href="/contact" class="btn btn-secondary">Contact Us</a>
    </div>

    <!-- footer -->
    <footer class="bg-dark text-white py-3">
        <div class="container text-center">
            <img src="{{ asset('images/logo.png') }}" alt="Merr Stores Logo" style="width: 100px;">
            <p class="mt-2">&copy; {{ date('Y') }} Merr Stores. All rights reserved.</p>
        </div>
    </footer>
@endsection
