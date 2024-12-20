@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6 bg-white shadow-lg rounded-lg">
    <h1 class="text-3xl font-semibold text-gray-800 mb-6">Products</h1>
    <a href="{{ route('products.create') }}" class="bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600 mb-6 inline-block">Add Product</a>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-4 rounded-lg shadow-sm mb-6">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
            <thead>
                <tr>
                    <th class="px-6 py-3 border-b font-medium text-left text-gray-700">Title</th>
                    <th class="px-6 py-3 border-b font-medium text-left text-gray-700">Price</th>
                    <th class="px-6 py-3 border-b font-medium text-left text-gray-700">Quantity</th>
                    <th class="px-6 py-3 border-b font-medium text-left text-gray-700">Discount</th>
                    <th class="px-6 py-3 border-b font-medium text-left text-gray-700">Image</th>
                    <th class="px-6 py-3 border-b font-medium text-left text-gray-700">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr class="odd:bg-gray-50">
                        <td class="px-6 py-4 border-b text-gray-800">{{ $product->title }}</td>
                        <td class="px-6 py-4 border-b text-gray-800">${{ $product->price }}</td>
                        <td class="px-6 py-4 border-b text-gray-800">{{ $product->quantity }}</td>
                        <td class="px-6 py-4 border-b text-gray-800">{{ $product->discount }}%</td>
                        <td class="px-6 py-4 border-b text-gray-800">
                            @if($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}" width="50" class="rounded-lg shadow-sm">
                            @else
                                N/A
                            @endif
                        </td>
                        <td class="px-6 py-4 border-b text-gray-800">
                            <a href="{{ route('products.edit', $product) }}" class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600">Edit</a>
                            <form action="{{ route('products.destroy', $product) }}" method="POST" class="inline-block ml-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
