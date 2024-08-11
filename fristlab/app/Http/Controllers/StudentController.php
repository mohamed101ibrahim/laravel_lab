<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
        function index()
    {
        //* DB=> database
        // $students=DB::table('students')->get();

        /** Use Model Student  */
        $students=Student::all();
        // dump($students);
        // return view('studentsData',["students"=>$students]);
        return view('students.students',compact("students"));
    }

    function view($id)
    {
      $student=Student::find($id);
      return view('students.student',compact("student"));
    }
    function create()
    {
       return view('students.create');
    }
    public function destroy($id)
    {
        $track = Student::findOrFail($id);
        $track->delete();
        return redirect()->route('students');
    }
    function store(Request $requestData)
    {

            $img = $requestData->file('image');
            $ext = $img->getClientOriginalExtension();
            $name = uniqid() . '.' . $ext;
            $img->move(public_path('uploads/students'), $name);

            $student = new Student();
            $student->name = $requestData['name'];
            $student->email = $requestData['email'];
            $student->gender = $requestData['gender'];
            $student->grade = $requestData['grade'];
            $student->address = $requestData['address'];
            $student->image = $name;

            $student->save();

            return redirect()->route('students');

    }
    function edit($id)
    {
       $student=Student::findOrFail($id);
       return view('students.update',compact("student"));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
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


        $student->update([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'gender' => $request->gender,
            'grade' => $request->grade,
        ]);


        $student->save();

        return redirect()->route('students');
    }



}
