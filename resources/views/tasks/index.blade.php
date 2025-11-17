@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h2 class="text-xl font-bold mb-4">All Tasks</h2>

    <table class="border w-full">
        <thead>
            <tr>
                <th class="border px-2">Name</th>
                <th class="border px-2">Description</th>
                <th class="border px-2">Type</th>
                <th class="border px-2">Created By Role</th>
                <th class="border px-2">Start Date</th>
                <th class="border px-2">End Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
            <tr>
                <td class="border px-2">{{ $task->name }}</td>
                <td class="border px-2">{{ $task->description }}</td>
                <td class="border px-2">{{ implode(', ', json_decode($task->type)) }}</td>
                <td class="border px-2">{{ $task->created_by_role }}</td>
                <td class="border px-2">{{ $task->start_date }}</td>
                <td class="border px-2">{{ $task->end_date }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
