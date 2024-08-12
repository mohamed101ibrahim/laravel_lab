<?php

namespace App\Http\Controllers;

use App\Models\Track;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    //
    function index(){
        $tracks=Track::all();
        // dump($students);
        // return view('studentsData',["students"=>$students]);
        return view('tracks',compact("tracks"));
    }
    function view(Track $track){

        // dump($students);
        // return view('studentsData',["students"=>$students]);
        return view('track',compact("track"));
    }
    public function destroy(Track $track)
    {
        $track->delete();
        return to_route('Tracks');
    }
    function create()
    {
       return view('createTrack');
    }

    function store(Request $requestData)
    {
    //    dump($requestData);
    //    dump($track);

    $logo= $requestData->file('logo');
    $ext = $logo->getClientOriginalExtension();
    $name = uniqid() . '.' . $ext;
    $logo->move(public_path('uploads/traks'), $name);
    $track= new Track();

       $track->name=$requestData['name'];
       $track->grade=$requestData['grade'];
       $track->logo= $name;
       $track->Number_of_courses=$requestData['ncourses'];
       $track->Number_of_Students=$requestData['nstudents'];
       $track->save();
       return  redirect()->route('Tracks');

    }
    function edit($id)
    {
       $track=Track::findOrFail($id);
       return view('updateTrack',compact("track"));
    }

    function update(Request $request, $id)
    {
       $track=Track::findOrFail($id);
       //$updatedData=request()->all();
       if ($request->hasFile('logo')) {
        $logo= $request->file('logo');
        $ext = $logo->getClientOriginalExtension();
        $name = uniqid() . '.' . $ext;
        $logo->move(public_path('uploads/traks'), $name);
        $track->logo = $name;
    }

    $track->update([
        'name' => $request->name,
        'email' => $request->email,
        'ncourses' => $request->address,
        'nstudents' => $request->gender,
        'grade' => $request->grade,
    ]);
    $track->save();

       return  redirect()->route('Tracks');
        }
}
