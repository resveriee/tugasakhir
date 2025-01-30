@extends('layouts.app')

@section('content')
<div class="container text-center mt-5">
    <div class="card mx-auto" style="width: 50%;">
        <div class="card-body">
            <h1 class="text-success">
                <i class="bi bi-check-circle-fill"></i>
            </h1>
            <h2>Successfully Purchased</h2>
            <p>Thank you for your purchase of {{ $product->name }}! We hope you enjoy your new product.</p>
            <a href="{{ route('product.search') }}" class="btn btn-primary">Continue Shopping</a>
        </div>
    </div>
</div>
@endsection