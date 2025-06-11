@extends('layouts.admin')
@section('title', 'Data Transaksi')
@section('content')
<h2 class="text-2xl font-bold mb-4">Manajemen Transaksi</h2>
<table class="min-w-full bg-white border">
    <thead><tr class="bg-gray-100">
        <th class="px-4 py-2">#</th>
        <th class="px-4 py-2">Pembeli</th>
        <th class="px-4 py-2">Total</th>
        <th class="px-4 py-2">Status</th>
        <th class="px-4 py-2">Aksi</th>
    </tr></thead>
    <tbody>
    @foreach($transactions as $t)
        <tr class="border-t">
            <td class="px-4 py-2">{{ $t->id }}</td>
            <td class="px-4 py-2">{{ $t->buyer->name }}</td>
            <td class="px-4 py-2">Rp{{ number_format($t->total_price, 2, ',', '.') }}</td>
            <td class="px-4 py-2">{{ $t->status }}</td>
            <td class="px-4 py-2">
                <form action="{{ route('admin.transactions.update', $t) }}" method="POST">
                    @csrf @method('PATCH')
                    <select name="status" class="border rounded" onchange="this.form.submit()">
                        <option {{ $t->status == 'pending' ? 'selected' : '' }}>pending</option>
                        <option {{ $t->status == 'paid' ? 'selected' : '' }}>paid</option>
                        <option {{ $t->status == 'cancelled' ? 'selected' : '' }}>cancelled</option>
                    </select>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="mt-4">{{ $transactions->links() }}</div>

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
