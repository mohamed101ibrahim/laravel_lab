<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index(){
        $students = Student::get();
        return response()->json($students);
    }

    public function show($id)
    {
        $student = Student::findOrFail($id);
        return response()->json($student);
    }
    public function store(Request $request)
    {
        $result = Student::create($request->all());
        return response($result,201);
    }
    public function update(Request $request, $id)
    {
        $result = Student::findOrFail($id);
        $result->update($request->all());
        return response($result,200);
    }
    public function delete($id)
    {
        $result = Student::findOrFail($id);
        $result = Student::destroy($id);
        return response()->json(['message'=>'student deleted'],200);
    }








}
