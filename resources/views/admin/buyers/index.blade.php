@extends('layouts.admin')
@section('title', 'Data Pembeli')
@section('content')
<a href="{{ route('admin.export.buyers') }}" class="inline-block px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 mb-4">Export to Excel</a>
<table class="w-full bg-white shadow rounded overflow-hidden">
    <thead class="bg-gray-100">
        <tr>
            <th class="p-3 text-left">Nama</th>
            <th class="p-3 text-left">Email</th>
            <th class="p-3 text-left">Total Transaksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($buyers as $buyer)
        <tr>
            <td class="p-3">{{ $buyer->name }}</td>
            <td class="p-3">{{ $buyer->email }}</td>
            <td class="p-3">{{ $buyer->transactions_count }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
