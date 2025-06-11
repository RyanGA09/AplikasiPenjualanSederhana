@extends('layouts.admin')
@section('title', 'Manajemen Produk')
@section('content')
<div class="mb-4">
    <a href="{{ route('admin.products.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Tambah Produk</a>
</div>
<table class="w-full bg-white shadow rounded overflow-hidden">
    <thead class="bg-gray-100">
        <tr>
            <th class="p-3 text-left">Nama</th>
            <th class="p-3 text-left">Harga</th>
            <th class="p-3 text-left">Stok</th>
            <th class="p-3 text-left">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td class="p-3">{{ $product->name }}</td>
            <td class="p-3">Rp{{ number_format($product->price) }}</td>
            <td class="p-3">{{ $product->stock }}</td>
            <td class="p-3">
                <a href="{{ route('admin.products.edit', $product->id) }}" class="text-blue-600">Edit</a>
                <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-600 ml-2" onclick="return confirm('Yakin hapus produk ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
