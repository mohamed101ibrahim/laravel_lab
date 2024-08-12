<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: #eef2f7;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .container {
            margin-top: 50px;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        }
        .table {
            margin-top: 20px;
        }
        .table thead {
            background-color: #007bff;
            color: white;
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f7f9fb;
        }
        .table img {
            /* border-radius: 50%; */
            object-fit: cover;
        }
        .btn-custom {
            margin-right: 5px;
            border-radius: 50px;
        }
        h2 {
            color: #333;
            font-weight: bold;
        }
        .action-buttons {
            display: flex;
            gap: 5px; /* Space between buttons */
        }
        .action-buttons a {
            flex-grow: 1;
        }
    </style>
</head>
<body>
<div class="container">
    <h2 class="text-center mb-4">Track List</h2>
    <table class="table table-striped table-bordered w-75 m-auto">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Grade</th>
                <th scope="col">Grender</th>
                <th scope="col">Image</th>
                <th scope="col">address</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>

                <tr>
                    <td>{{ $student['id'] }}</td>
                    <td>{{ $student['name'] }}</td>
                    <td>{{ $student['email'] }}</td>
                    <td>{{ $student['grade'] }}</td>
                    <td>{{ $student['gender'] }}</td>
                    <td>                        <img src="{{ asset('uploads/students/' . $student->image) }}" alt="Student Image" style="width: 80px;  height: auto;">
                    </td>
                    <td>{{ $student['address'] }}</td>

                    <td>
                        <a href="{{ route('students', $student->id) }}" class="btn btn-primary btn-sm btn-custom">back</a>
                        <a href="{{ route('student.edit', $student->id) }}" class="btn btn-warning btn-sm btn-custom">Update</a>
                        <a href="{{ route('student.destroy', $student->id) }}" class="btn btn-danger btn-sm btn-custom">Delete</a>
                    </td>
                </tr>

        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
