<?php

namespace App\Http\Controllers\Api;
use App\Http\Resources\StudentResource;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index(){

            $students=Student::all();
            return StudentResource::collection($students);


    }

    public function show($id)
    {
        $student = Student::findOrFail($id);
        return new StudentResource($student);

    }
    public function store(Request $request)

    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'gender' => 'required',
            'image' => 'nullable|image',
            'grade' => 'required',
        ]);





        $result = Student::create($request->all());
        $students=Student::all();
            return StudentResource::collection($students);
        }
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'gender' => 'required',
            'image' => 'nullable|image',
            'grade' => 'required',
        ]);

        $student = Student::findOrFail($id);


        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $ext = $img->getClientOriginalExtension();
            $name = uniqid() . '.' . $ext;
            $img->move(public_path('uploads/students'), $name);
            $student->image = $name;
        }


        $student->update($request->all());


        $student->save();

        return new StudentResource($student);    }
    public function destroy($id)
    {

        $student = Student::findOrFail($id);
        $student->delete();

        return StudentResource::collection(Student::all());

    }

}
