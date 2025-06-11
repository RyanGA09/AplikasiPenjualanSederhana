@extends('layouts.admin')

@section('content')
<h1 class="text-2xl font-bold mb-4">Tambah Produk</h1>
<form action="{{ route('products.store') }}" method="POST" class="space-y-4">
    @csrf
    <div>
        <label class="block">Nama Produk</label>
        <input type="text" name="name" class="w-full border p-2 rounded" required>
    </div>
    <div>
        <label class="block">Harga</label>
        <input type="number" name="price" class="w-full border p-2 rounded" required>
    </div>
    <div>
        <label class="block">Stok</label>
        <input type="number" name="stock" class="w-full border p-2 rounded" required>
    </div>
    <div>
        <label class="block">Deskripsi</label>
        <textarea name="description" class="w-full border p-2 rounded"></textarea>
    </div>
    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Simpan</button>
</form>
@endsection
