<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TrackController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',function(){
    echo "Ayaat";
});
Route::get('/users',function()
{
   $users=[
    ["id"=>1,"name"=>"ayaat","age"=>24],
    ["id"=>2,"name"=>"nada","age"=>27],
    ["id"=>3,"name"=>"eman","age"=>25],
   ];

return view('usersData',["users"=>$users]);
});


Route::get('/user/{id}', function ($id) {
    $users = [
        ["id" => 1, "name" => "Ayaat", "age" => 24],
        ["id" => 2, "name" => "Nada", "age" => 27],
        ["id" => 3, "name" => "Eman", "age" => 25],
    ];


    $user = null;
    foreach ($users as $userid) {
        if ($userid['id'] == $id) {
            $user = $userid;
            break;
        }
    }
    return view('userData', ['user' => $user]);
});
Route::get('/users/{id}',function($id)
{
   $users=[
    ["id"=>1,"name"=>"ayaat","age"=>24],
    ["id"=>2,"name"=>"nada","age"=>27],
    ["id"=>3,"name"=>"eman","age"=>25],
   ];
//    return $users;
if($id<count($users))
{
    return $users[$id-1];
}else{
    return abort(404);
}
})->where('id','[0-9]+');


 Route::get('/students',[StudentController::class,'index'])->name('students');
//  Route::get('/students/{id}',[StudentController::class,'view'])->name('students.view');
 Route::get('/students/create',[StudentController::class,'create'])->name('student.create');
 Route::post('/students/store',[StudentController::class,'store'])->name('student.store');
 Route::get('/students/{id}', [StudentController::class, 'destroy'])->name('student.destroy');
 Route::get('/student/{id}',[StudentController::class,'view'])->name('student');
 Route::get('/student/{id}/edit',[StudentController::class,'edit'])->name('student.edit');
 Route::put('/students/{id}/update',[StudentController::class,'update'])->name('students.update');






 Route::get('/tracks',[TrackController::class,'index'])->name('Tracks');
 Route::get('/track/{id}',[TrackController::class,'view'])->name('Track');
 Route::get('/delete/{track}', [TrackController::class, 'destroy'])->name('Track.destroy');
 Route::get('/tracks/{id}/create',[TrackController::class,'create'])->name('Track.create');
 Route::post('/tracks/store',[TrackController::class,'store'])->name('Track.store');
 Route::get('/tracks/{id}/edit',[TrackController::class,'edit'])->name('Track.edit');
 Route::put('/tracks/{id}/update',[TrackController::class,'update'])->name('Track.update');



