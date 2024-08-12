<?php

namespace App\Http\Controllers;

use App\Models\course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $courses=course::orderBy('created_at',"desc")->paginate(5);

    return view('courses.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('courses.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // dd($request);
        //  validation on data
        $request->validate([
            'name'=>'required|unique:courses|min:2',
            'description'=>'required|unique:courses|min:10|max:250',
            'grade' => 'required|integer|min:50|max:100',
            'instractor'=>'required|unique:courses|min:2'


        ],[
            'name.unique' => "This course name already exists.",
            'name.min' => "The course name must be more than 2 characters.",
            'description.unique' => 'This course description already exists.',
            'description.min' => "The course description must be at least 10 characters.",
            'description.max' => "The course description cannot be more than 250 characters.",
            'grade.min' => "The course grade must be at least 50 grades.",
            'grade.max' => "The course grade cannot be more than 100 grades.",
            'instructor.min' => "The instructor name must be more than 2 characters.",
            'instructor.unique' => "This instructor name already exists."
        ]

    );
    // course::create([
    //     'name' => $request->name,
    //     'description' => $request->description,
    //     'instractor' => $request->instractor,
    //     'grade' => $request->grade,

    //    ]);
        $requestData=$request->all();
        $course=course::create($requestData);
        return to_route('courses.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(course $course)
    {
        return view('courses.show',compact('course'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(course $course)
    {
        return view('courses.edit',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, course $course)
    {
        // dd($course,$request->all());
        $requestData = $request->all();
        $course->update($requestData);

        $course->save();

        return to_route('courses.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(course $course)
    {
        $course->delete();
        // handle delete image
        return to_route('courses.index');
    }
}
