@extends('layouts.admin')
@section('title', 'Log Aktivitas')
@section('content')
<ul class="bg-white shadow rounded divide-y">
    @foreach ($logs as $log)
    <li class="p-4">
        <span class="text-sm text-gray-500">[{{ $log->created_at }}]</span> -
        {{ $log->description }}
    </li>
    @endforeach
</ul>
@endsection
