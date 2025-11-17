<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users & Teachers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">

    <div class="container">
        <h2 class="text-center mb-4">Dashboard</h2>

        <!-- ✅ Users Table -->
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                Users Table
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Post</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($users->posts as $user)
                        <tr>
                            
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->title }}</td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>

        <!-- ✅ Teachers Table -->
        <div class="card">
            <div class="card-header bg-success text-white">
                Teachers Table
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>User Name</th>
                            <th>Teacher</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <!-- You can loop teachers here later -->
                        <tr>
                            <td>1</td>
                            <td>1</td>
                            <td>Math</td>
                            
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</body>
</html>
