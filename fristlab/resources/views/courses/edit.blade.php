<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update Course</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <h1 class="text-center text-info m-5">Update {{$course->name}}</h1>
    <form class=" border p-2 bordered w-75 m-auto" method="post" action="{{route('courses.update',$course)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleInputName1" class="form-label">Name </label>
            <input name="name" type="Name" class="form-control" id="exampleInputName1" aria-describedby="NameHelp" value="{{ $course['name'] }}">

          </div>


          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Description</label>
            <input name="description" type="text" class="form-control" id="exampleInputEmail1"  value="{{ $course['description'] }}">
          </div>


          <div class="mb-3">
            <label for="exampleInputgrade1" class="form-label">grade </label>
            <input name="grade" type="number" class="form-control" id="exampleInputgrade1" aria-describedby="gradeHelp" value="{{$course['grade']}}">
          </div>

          <div class="mb-3">
            <label for="exampleInputAddress1" class="form-label">instractor </label>
            <input name="instractor" type="text" class="form-control" id="exampleInputAddress1" aria-describedby="AddressHelp" value="{{ $course['instractor'] }}">
          </div>



        <button type="submit" class="btn btn-primary">Update</button>
      </form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
