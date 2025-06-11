@extends('layouts.admin')

@section('content')
<h1 class="text-2xl font-bold mb-4">Edit Produk</h1>
<form action="{{ route('products.update', $product->id) }}" method="POST" class="space-y-4">
    @csrf @method('PUT')
    <div>
        <label class="block">Nama Produk</label>
        <input type="text" name="name" value="{{ $product->name }}" class="w-full border p-2 rounded" required>
    </div>
    <div>
        <label class="block">Harga</label>
        <input type="number" name="price" value="{{ $product->price }}" class="w-full border p-2 rounded" required>
    </div>
    <div>
        <label class="block">Stok</label>
        <input type="number" name="stock" value="{{ $product->stock }}" class="w-full border p-2 rounded" required>
    </div>
    <div>
        <label class="block">Deskripsi</label>
        <textarea name="description" class="w-full border p-2 rounded">{{ $product->description }}</textarea>
    </div>
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Update</button>
</form>
@endsection
