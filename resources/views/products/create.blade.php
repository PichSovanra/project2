@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-semibold text-gray-800 mb-8">Add Product</h1>

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="max-w-2xl mx-auto bg-white p-8 shadow-lg rounded-lg">
        @csrf
        
        <!-- Title -->
        <div class="mb-6">
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" name="title" id="title" class="mt-1 p-3 w-full border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" value="{{ old('title') }}" required>
        </div>
        
        <!-- Price -->
        <div class="mb-6">
            <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
            <input type="number" name="price" id="price" class="mt-1 p-3 w-full border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" value="{{ old('price') }}" required>
        </div>
        
        <!-- Quantity -->
        <div class="mb-6">
            <label for="quantity" class="block text-sm font-medium text-gray-700">Quantity</label>
            <input type="number" name="quantity" id="quantity" class="mt-1 p-3 w-full border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" value="{{ old('quantity') }}" required>
        </div>
        
        <!-- Discount -->
        <div class="mb-6">
            <label for="discount" class="block text-sm font-medium text-gray-700">Discount (%)</label>
            <input type="number" name="discount" id="discount" class="mt-1 p-3 w-full border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" value="{{ old('discount') }}">
        </div>
        
        <!-- Image -->
        <div class="mb-6">
            <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
            <input type="file" name="image" id="image" class="mt-1 p-3 w-full border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>
        
        <!-- Submit Button -->
        <div class="flex justify-center">
            <button type="submit" class="mt-4 bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50">Save</button>
        </div>
    </form>
@endsection
