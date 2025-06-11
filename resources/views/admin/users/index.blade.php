@extends('layouts.admin')

@section('content')
<h1 class="text-2xl font-bold mb-4">Data Pembeli</h1>
<table class="min-w-full bg-white rounded shadow">
    <thead>
        <tr class="text-left border-b">
            <th class="px-4 py-2">#</th>
            <th class="px-4 py-2">Nama</th>
            <th class="px-4 py-2">Email</th>
            <th class="px-4 py-2">Tanggal Daftar</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($users as $user)
        <tr class="border-b hover:bg-gray-50">
            <td class="px-4 py-2">{{ $loop->iteration }}</td>
            <td class="px-4 py-2">{{ $user->name }}</td>
            <td class="px-4 py-2">{{ $user->email }}</td>
            <td class="px-4 py-2">{{ $user->created_at->format('d-m-Y') }}</td>
        </tr>
        @empty
        <tr>
            <td colspan="4" class="px-4 py-2 text-center">Tidak ada data pembeli.</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection
