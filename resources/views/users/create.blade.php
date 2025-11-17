@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4" style="margin-left: 2px;">
    <div class="card">
        <div class="card-header font-weight-bold bg-success text-white">
           <strong style="color:black;font-size: larger;">
            Add New User
           </strong>
        </div>
        <div class="card-body">
            <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Name -->
                <div class="form-group">
                    <label for="name">User Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <br>
                <!-- Image Upload -->
                <div class="form-group">
                    <label for="image">User Image</label>
                    <input type="file" name="image" class="form-control-file" accept=".jpg, .jpeg, .png, .webp">
                </div>
                <br>
                <!-- Email -->
                <div class="form-group">
                    <label for="email">User Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <br>
                <!-- Gender -->
                <div class="form-group">
                    <label>User Gender</label><br>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="gender" value="male" class="form-check-input" required>
                        <label class="form-check-label">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="gender" value="female" class="form-check-input">
                        <label class="form-check-label">Female</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="gender" value="others" class="form-check-input">
                        <label class="form-check-label">Others</label>
                    </div>
                </div>
                <br>
                <!-- Role -->
                <div class="form-group">
                    <label>User Role</label><br>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" name="role[]" value="Super-admin" class="form-check-input">
                        <label class="form-check-label">Super-admin</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" name="role[]" value="Admin" class="form-check-input">
                        <label class="form-check-label">Admin</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" name="role[]" value="Manager" class="form-check-input">
                        <label class="form-check-label">Manager</label>
                    </div>
                </div>

                <!-- Created By -->
                <div class="form-group">
                    <label for="created_by">Created By (Role)</label>
                    <input type="text" name="created_by" class="form-control" value="{{ Auth::user()->role ?? 'Admin' }}" readonly>
                </div>

                <!-- Submit -->
                <button type="submit" class="bg-blue-500 text-white px-4 py-2">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
