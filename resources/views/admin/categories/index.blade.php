@extends('layouts.admin')

@section('content')
<h1 class="text-2xl font-bold mb-4">Kategori Produk</h1>
<a href="{{ route('admin.categories.create') }}" class="mb-4 inline-block bg-blue-600 text-white px-4 py-2 rounded">Tambah Kategori</a>
<table class="min-w-full bg-white rounded shadow">
    <thead>
        <tr class="text-left border-b">
            <th class="px-4 py-2">#</th>
            <th class="px-4 py-2">Nama</th>
            <th class="px-4 py-2">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($categories as $category)
        <tr class="border-b hover:bg-gray-50">
            <td class="px-4 py-2">{{ $loop->iteration }}</td>
            <td class="px-4 py-2">{{ $category->name }}</td>
            <td class="px-4 py-2 space-x-2">
                <a href="{{ route('admin.categories.edit', $category) }}" class="text-blue-600">Edit</a>
                <form action="{{ route('admin.categories.destroy', $category) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600" onclick="return confirm('Yakin hapus kategori?')">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="3" class="px-4 py-2 text-center">Belum ada kategori.</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection
