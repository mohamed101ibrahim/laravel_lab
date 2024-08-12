<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <h1 class="text-center text-info m-5">Update {{$student->name}}</h1>
    <form class=" border p-2 bordered w-75 m-auto" method="post" action="{{route('students.update',$student->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleInputName1" class="form-label">Name </label>
            <input name="name" type="Name" class="form-control" id="exampleInputName1" aria-describedby="NameHelp" value="{{ $student['name'] }}">

          </div>


          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $student['email'] }}">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>


          <div class="mb-3">
            <label for="exampleInputgrade1" class="form-label">grade </label>
            <input name="grade" type="number" class="form-control" id="exampleInputgrade1" aria-describedby="gradeHelp" value="{{$student['grade']}}">
          </div>


          <div class="mb-3">
            <label for="exampleInputImage1" class="form-label">Image </label>
            <input name="image" type="file" class="form-control" id="exampleInputImage1" aria-describedby="ImageHelp">
          </div>


          <div class="mb-3">
            <label for="exampleInputAddress1" class="form-label">Address </label>
            <input name="address" type="text" class="form-control" id="exampleInputAddress1" aria-describedby="AddressHelp" value="{{ $student['address'] }}">
          </div>


          <label class="form-check-label" for="flexRadioDefault1">
              Gender
            </label>
          <div class="form-check" >

              <input name="gender" class="form-check-input" type="radio"  id="flexRadioDefault1" value="male">
              <label class="form-check-label" for="flexRadioDefault1">
                male
              </label>
            </div>
            <div class="form-check">
              <input name="gender" class="form-check-input" type="radio"   id="flexRadioDefault2" value="female" >
              <label class="form-check-label" for="flexRadioDefault2">
             Female
              </label>
            </div>

        <button type="submit" class="btn btn-primary">Update</button>
      </form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
