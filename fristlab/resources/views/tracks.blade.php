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
            border-radius: 50%;
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
    <x-h2>Track List</x-h2>
<a href="{{ route('students') }}" class="btn btn-info btn-sm btn-custom">Students</a>

    <table class="table table-striped table-bordered w-100">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Number of Courses</th>
                <th scope="col">Number of Students</th>
                <th scope="col">Logo</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tracks as $track)
                <tr>
                    <td>{{ $track['id'] }}</td>
                    <td>{{ $track['name'] }}</td>
                    <td>{{ $track['Number_of_courses'] }}</td>
                    <td>{{ $track['Number_of_Students'] }}</td>
                    <td>
                        <img src="{{ asset('uploads/traks/' . $track->logo) }}" alt="Track Logo" style="width: 60px; height: 60px;">
                    </td>
                    <td>
                        <div class="action-buttons">
                            <a href="{{ route('Track', $track->id) }}" class="btn btn-primary btn-sm btn-custom">View</a>
                            <a href="{{ route('Track.edit', $track->id) }}" class="btn btn-warning btn-sm btn-custom">Update</a>
                            <a href="{{ route('Track.destroy', $track) }}" class="btn btn-danger btn-sm btn-custom">Delete</a>
                            {{-- <form action="{{route('Track.destroy',$track)}}" method="post">
                                @method('DELETE')
                                @csrf
                                 <button class="btn btn-danger" type="submit">Delete</button>
                            </form> --}}
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('Track.create', $track->id) }}" class="btn btn-success btn-sm btn-custom">Create</a>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
