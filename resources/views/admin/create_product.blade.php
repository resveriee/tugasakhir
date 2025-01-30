@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add New Product</h1>
    <form action="{{ route('admin.product.store') }}" method="POST"enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Product Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" name="price" id="price" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control" required>
        </div>
        <div class="form-group">
            <input type="hidden" name="recommend" value="0">
            <input type="checkbox" name="recommend" id="recommend" class="form-check-input" value="1">
            <label for="recommend" class="form-check-label">Recommend</label>   
            <small class="form-text text-muted"> Check if you want to mark this product as recommended.</small>
        </div>
        <button type="submit" class="btn btn-primary">Add Product</button>
    </form>
</div>
@endsection
