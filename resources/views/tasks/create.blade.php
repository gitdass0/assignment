@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h2 class="text-xl font-bold mb-4">Add Task</h2>
    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf
        <div>
            <label><b>Task Name </b></label>
            <input type="text" name="name" class="border p-2 w-full" required>
        </div>

        <div class="mt-2">
            <label><b>Task Description </b></label>
            <textarea name="description" class="border p-2 w-full"></textarea>
        </div>

        <div class="mt-2">
            <label><b>Task Type</b></label>
            <select name="type[]" multiple class="border p-2 w-full" required>
                <option value="a-task">A-task</option>
                <option value="b-task">B-task</option>
                <option value="c-task">C-task</option>
                <option value="d-task">D-task</option>
                <option value="e-task">E-task</option>
            </select>
        </div>

        <div class="mt-2">
            <label><b>Start Date</b></label>
            <input type="date" name="start_date" class="border p-2" required>
        </div>

        <div class="mt-2">
            <label><b>End Date</b> </label> 
            <input type="date" name="end_date" class="border p-2" required>
        </div>

        <center>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2">Submit</button>
       </center>
    </form>
</div>
@endsection
