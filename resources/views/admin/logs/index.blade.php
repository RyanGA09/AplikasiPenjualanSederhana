@extends('layouts.admin')
@section('title', 'Log Aktivitas')
@section('content')
<h2 class="text-2xl font-bold mb-4">Log Aktivitas Admin</h2>
<table class="min-w-full bg-white border">
<thead><tr class="bg-gray-100">
    <th class="px-4 py-2">#</th>
    <th class="px-4 py-2">Admin</th>
    <th class="px-4 py-2">Aktivitas</th>
    <th class="px-4 py-2">IP</th>
    <th class="px-4 py-2">Waktu</th>
</tr></thead>
<tbody>
@foreach($logs as $log)
<tr class="border-t">
    <td class="px-4 py-2">{{ $log->id }}</td>
    <td class="px-4 py-2">{{ $log->admin->name }}</td>
    <td class="px-4 py-2">{{ $log->activity }}</td>
    <td class="px-4 py-2">{{ $log->ip_address }}</td>
    <td class="px-4 py-2">{{ $log->created_at->diffForHumans() }}</td>
</tr>
@endforeach
</tbody>
</table>
<div class="mt-4">{{ $logs->links() }}</div>

<ul class="bg-white shadow rounded divide-y">
    @foreach ($logs as $log)
    <li class="p-4">
        <span class="text-sm text-gray-500">[{{ $log->created_at }}]</span> -
        {{ $log->description }}
    </li>
    @endforeach
</ul>
@endsection
