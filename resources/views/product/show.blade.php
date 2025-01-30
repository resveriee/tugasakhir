@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <!-- Product Details -->
    <h2>{{ $product->name }}</h2>
    <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" style="width: 100%; height: 450px; object-fit: contain;">
    <p class="mt-3">{{ $product->description }}</p>
    <p><strong>Rp. {{ number_format($product->price, 0, '', '.') }}</strong></p>

    <!-- Checkout Button -->
    @auth
        <form action="{{ route('checkout.process', $product->id) }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-success mb-3">Checkout</button>
        </form>
    @else
        <p>Please <a href="{{ route('login') }}">login</a> to purchase this product.</p>
    @endauth

    <!-- Comments Section -->
    <h3>Comments</h3>
    <div class="comments">
        @forelse($product->comments as $comment)
            <div class="comment mb-3">
                <p><strong>{{ $comment->user->name }}</strong>: {{ $comment->content }}</p>
            </div>
        @empty
            <p>No comments yet. Be the first to comment!</p>
        @endforelse
    </div>

    <!-- Comment Form -->
    @auth
        <form action="{{ route('comment.store', $product->id) }}" method="POST">
            @csrf
            <div class="form-group mt-3">
                <textarea name="content" class="form-control" placeholder="Leave a comment..." required></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Submit Comment</button>
        </form>
    @else
        <p>Please <a href="{{ route('login') }}">login</a> to comment on this product.</p>
    @endauth
</div>
@endsection
