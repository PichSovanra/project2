@extends('layouts.app')

@section('content')

    <h1 class="text-3xl font-semibold text-gray-800 mb-8">Edit Product</h1>
    <div class="container mx-auto p-8 bg-white shadow-lg rounded-lg max-w-4xl">
    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Title -->
        <div class="mb-6">
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" name="title" id="title" class="mt-1 p-3 w-full border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500" value="{{ old('title', $product->title) }}" required>
        </div>

        <!-- Price -->
        <div class="mb-6">
            <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
            <input type="number" name="price" id="price" class="mt-1 p-3 w-full border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500" step="0.01" value="{{ old('price', $product->price) }}" required>
        </div>

        <!-- Quantity -->
        <div class="mb-6">
            <label for="quantity" class="block text-sm font-medium text-gray-700">Quantity</label>
            <input type="number" name="quantity" id="quantity" class="mt-1 p-3 w-full border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500" value="{{ old('quantity', $product->quantity) }}" required>
        </div>

        <!-- Discount -->
        <div class="mb-6">
            <label for="discount" class="block text-sm font-medium text-gray-700">Discount (%)</label>
            <input type="number" name="discount" id="discount" class="mt-1 p-3 w-full border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500" step="0.01" value="{{ old('discount', $product->discount) }}">
        </div>

        <!-- Image -->
        <div class="mb-6">
            <label for="image" class="block text-sm font-medium text-gray-700">Product Image</label>
            <input type="file" name="image" id="image" class="mt-1 p-3 w-full border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            @if ($product->image)
                <div class="mt-4">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}" width="150" class="rounded-lg shadow-md">
                </div>
            @endif
        </div>

        <!-- Submit Button -->
        <div class="flex justify-center">
            <button type="submit" class="mt-6 bg-blue-600 text-white px-6 py-3 rounded-lg shadow-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Update Product</button>
        </div>
    </form>
</div>
@endsection
