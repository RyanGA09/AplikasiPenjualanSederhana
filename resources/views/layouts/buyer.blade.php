<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel — @yield('title', 'Dashboard')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- @vite('resources/css/app.css') --}}
</head>
<body class="bg-gray-100 text-gray-900">
    <div class="flex min-h-screen">
        <!-- Sidebar/Navbar -->
        <aside class="w-64 bg-white shadow-md hidden md:block">
            <div class="p-4 font-bold text-xl border-b">Admin Panel</div>
            <nav class="p-4 space-y-2 text-sm">
                <a href="{{ route('admin.dashboard') }}" class="block px-3 py-2 rounded hover:bg-gray-200">Dashboard</a>
                <a href="{{ route('admin.products.index') }}" class="block px-3 py-2 rounded hover:bg-gray-200">Manajemen Produk</a>
                <a href="{{ route('admin.buyers.index') }}" class="block px-3 py-2 rounded hover:bg-gray-200">Data Pembeli</a>
                <a href="{{ route('admin.transactions.index') }}" class="block px-3 py-2 rounded hover:bg-gray-200">Data Transaksi</a>
                <a href="{{ route('admin.logs.index') }}" class="block px-3 py-2 rounded hover:bg-gray-200">Log Aktivitas</a>
                <a href="{{ route('admin.settings.index') }}" class="block px-3 py-2 rounded hover:bg-gray-200">Pengaturan</a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="w-full text-left px-3 py-2 rounded hover:bg-red-100 text-red-600">Logout</button>
                </form>
            </nav>
            <div class="p-4 font-bold text-lg border-b">Admin Panel</div>
            <ul class="mt-4 space-y-2 p-4">
                <li><a href="{{ route('admin.dashboard') }}" class="block p-2 rounded hover:bg-gray-200">Dashboard</a></li>
                <li><a href="{{ route('products.index') }}" class="block p-2 rounded hover:bg-gray-200">Produk</a></li>
                <li><a href="{{ route('admin.buyers') }}" class="block p-2 rounded hover:bg-gray-200">Data Pembeli</a></li>
            </ul>
        </aside>

        <!-- Content Area -->
        <div class="flex-1 flex flex-col">
            <!-- Top Navbar -->
            <header class="bg-white shadow px-4 py-3 flex items-center justify-between">
                <h1 class="text-lg font-semibold">@yield('title', 'Admin Dashboard')</h1>
                <div class="text-sm text-gray-500">Admin: {{ Auth::user()->name ?? 'Administrator' }}</div>
            </header>
            @include('layouts.admin.navbar')

            <!-- Main Content -->
            <main class="p-6 flex-1">
                @yield('content')
            </main>

            <!-- Footer -->
            @include('layouts.admin.footer')
            <footer class="text-center py-4 bg-white border-t">
                <p class="text-sm text-gray-500">© {{ date('Y') }} Aplikasi Penjualan Sederhana — Admin Panel</p>
            </footer>
        </div>
    </div>
</body>
</html>
