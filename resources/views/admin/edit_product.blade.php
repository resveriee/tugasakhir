@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Product</h1>
    <form action="{{ route('admin.product.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Product Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}" required>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" name="price" id="price" class="form-control" value="{{ $product->price }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" required>{{ $product->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>
        <div class="form-group">
            <input type="hidden" name="recommend" value="0">
            <input type="checkbox" name="recommend" id="recommend" class="form-check-input" value="1" {{ $product->recommend ? 'checked' : '' }}>
            <label for="recommend" class="form-check-label">Recommended</label>
            <small class="form-text text-muted"> Check if you want to mark this product as recommended.</small>
        </div>
        <button type="submit" class="btn btn-success">Update Product</button>
    </form>
</div>
@endsection
