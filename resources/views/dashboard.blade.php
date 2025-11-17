@extends('layouts.app')

@section('content')
<div class="container py-4" style="margin-left: 12px;">

    <!-- Dashboard Card -->
    <div class="card mb-4">
        <div class="card-header font-weight-bold bg-primary text-white">
            
        </div>
        <div class="card-body">
            You're logged in, <strong>{{ Auth::user()->name }}</strong>!
        </div>
    </div>

    <!-- Task Menu -->
    <div class="card mb-4">
        <div class="card-header font-weight-bold bg-info text-white">
           <strong style="color:black"> Task Menu </strong>
        </div>
        <div class="list-group list-group-flush">
            <a href="{{ route('tasks.index') }}" class="list-group-item text-primary">
                📋 All Tasks
            </a> <br>
            <a href="{{ route('tasks.create') }}" class="list-group-item text-primary">
                ➕ Add Task
            </a>
        </div>
    </div>

    <!-- User Menu -->
    <div class="card mb-4">
        <div class="card-header font-weight-bold bg-success text-white">
           <strong style="color:black"> User Menu </strong>
        </div>
        <div class="list-group list-group-flush">
            <a href="{{ route('users.index') }}" class="list-group-item text-primary">
                👥 User List
            </a> <br>
            <a href="{{ route('users.create') }}" class="list-group-item text-primary">
                ➕ Add User
            </a>
        </div>
    </div>

</div>
@endsection
