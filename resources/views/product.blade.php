@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Mouse List</h1>
        <p>Check out our amazing selection of Mouse!</p>

        <!-- pencarian -->
        <form method="GET" action="{{ route('product.search') }}" class="mb-4">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search by brand name" value="{{ request()->search }}">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </div>
        </form>

        <!-- khusus admin yang bisa lihat tombol add product -->
        @if(Auth::check() && Auth::user()->role === 'admin')
            <div class="mb-4">
                <a href="{{ route('admin.product.create') }}" class="btn btn-success">Add Product</a>
            </div>
        @endif

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-4">
            {{ $product->links('pagination::bootstrap-4') }}
        </div>
        
        <!-- produk list -->
        <div class="row">
            @foreach($product as $item)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('storage/products/'.$item->image) }}" class="card-img-top" alt="{{ $item->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->name }}</h5>
                            <p class="card-text">{{ $item->description }}</p>
                            <p class="card-text"><strong>Rp. {{ number_format($item->price) }}</strong></p>
                            <a href="{{ route('product.show', $item->id) }}" class="btn btn-primary">View Mouse</a>

                            <!-- kalau admin, bisa lihat tombol edit dan hapus -->
                            @if(Auth::check() && Auth::user()->role === 'admin')
                                <div class="mt-2">
                                    <a href="{{ route('admin.product.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('admin.product.destroy', $item->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                                    </form>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-4">
            {{ $product->links('pagination::bootstrap-4') }}
        </div>
    </div>

    <footer class="bg-dark text-white py-3">
        <div class="container text-center">
            <img src="{{ asset('images/logo.png') }}" alt="Mikey Stores Logo" style="width: 100px;">
            <p class="mt-2">&copy; {{ date('Y') }} Merr Stores. All rights reserved.</p>
        </div>
    </footer>
@endsection
