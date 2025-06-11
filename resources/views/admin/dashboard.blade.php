@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
    <div class="bg-white p-6 rounded shadow">
        <h3 class="text-lg font-bold">Total Produk</h3>
        <p class="text-2xl">{{ $totalProducts }}</p>
    </div>
    <div class="bg-white p-6 rounded shadow">
        <h3 class="text-lg font-bold">Total Pembeli</h3>
        <p class="text-2xl">{{ $totalBuyers }}</p>
    </div>
    <div class="bg-white p-6 rounded shadow">
        <h3 class="text-lg font-bold">Total Transaksi</h3>
        <p class="text-2xl">{{ $totalTransactions }}</p>
    </div>
</div>
@endsection
