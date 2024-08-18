<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
 {{-- <?php
// var_dump($users);
?> --}}
<!-- /***  Blade engine => engine enable you write php in html with out tag php */ -->
{{-- @dump($users); --}}

{{-- /*** display data in table  --}}

<table class="table w-75 m-auto">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">Age</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>

        @foreach ( $users as $user)
        <tr>
            {{-- @dump($user) --}}
            <td>{{$user['id']}}</td>
            <td>{{$user['name']}}</td>
            {{-- <td>{{$user->name}}</td> --}}
            <td>{{$user['age']}}</td>
            <td>
                <a href="/user/{{ $user['id'] }}" class="btn btn-warning">View</a>
                
            </td>
          </tr>
        @endforeach
    </tbody>
  </table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
