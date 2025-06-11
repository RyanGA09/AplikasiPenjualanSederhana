@extends('layouts.admin')
@section('title', 'Pengaturan Toko')
@section('content')
<form action="{{ route('admin.settings.update') }}" method="POST" class="space-y-4">
    @csrf
    @foreach($settings as $s)
        <div>
            <label class="block font-medium">{{ $s->key }}</label>
            <input type="text" name="{{ $s->key }}" value="{{ $s->value }}" class="w-full border rounded px-2 py-1" />
        </div>
    @endforeach
    <div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
    </div>
</form>

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
