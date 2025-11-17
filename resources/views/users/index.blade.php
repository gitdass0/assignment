@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="card">
        <div class="card-header font-weight-bold bg-success">
           <strong> User List </strong>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead class="thead-light">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Role(s)</th>
                        <th>Created By</th>
                        <th>Image</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ ucfirst($user->gender) }}</td>
                        <td>{{ implode(', ', json_decode($user->role, true) ?? []) }}</td>

                        <td>{{ $user->created_by }}</td>
                        <td>
                            @if($user->image)
                                <img src="{{ asset($user->image) }}" width="50" height="50" class="rounded-circle">
                            @else
                                N/A
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
