@extends('layouts.admin')
@section('title', 'Pengaturan')
@section('content')
<form action="{{ route('admin.settings.update') }}" method="POST" class="space-y-4">
    @csrf
    <div>
        <label class="block font-medium">Nama Toko</label>
        <input type="text" name="store_name" class="w-full border p-2 rounded" value="{{ $settings->store_name }}">
    </div>
    <div>
        <label class="block font-medium">Alamat</label>
        <textarea name="address" class="w-full border p-2 rounded">{{ $settings->address }}</textarea>
    </div>
    <button class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
</form>
@endsection
