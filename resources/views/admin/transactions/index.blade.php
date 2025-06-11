@extends('layouts.admin')
@section('title', 'Data Transaksi')
@section('content')
<table class="w-full bg-white shadow rounded overflow-hidden">
    <thead class="bg-gray-100">
        <tr>
            <th class="p-3 text-left">ID Transaksi</th>
            <th class="p-3 text-left">Pembeli</th>
            <th class="p-3 text-left">Total</th>
            <th class="p-3 text-left">Tanggal</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($transactions as $tx)
        <tr>
            <td class="p-3">#{{ $tx->id }}</td>
            <td class="p-3">{{ $tx->buyer->name }}</td>
            <td class="p-3">Rp{{ number_format($tx->total) }}</td>
            <td class="p-3">{{ $tx->created_at->format('d M Y') }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
