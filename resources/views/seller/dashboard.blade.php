@extends('layouts.seller')
@section('title', 'Dashboard')
@section('content')
<h1 class="text-2xl font-bold mb-4">Dashboard Admin</h1>
<div class="grid grid-cols-3 gap-4">
    <div class="bg-white shadow p-4 rounded">
        <h2 class="text-gray-500">Total Pengguna</h2>
        <p class="text-2xl font-bold">{{ \$total_users }}</p>
    </div>
    <div class="bg-white shadow p-4 rounded">
        <h2 class="text-gray-500">Total Produk</h2>
        <p class="text-2xl font-bold">{{ \$total_products }}</p>
    </div>
    <div class="bg-white shadow p-4 rounded">
        <h2 class="text-gray-500">Total Pembelian</h2>
        <p class="text-2xl font-bold">{{ \$total_purchases }}</p>
    </div>
</div>

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
