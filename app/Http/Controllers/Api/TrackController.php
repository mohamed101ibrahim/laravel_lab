<?php

namespace App\Http\Controllers\Api;
use App\Http\Resources\TrackResource;
use Illuminate\Support\Facades\Validator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Track;
class TrackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    function index(){
        $tracks=Track::all();
        return TrackResource::collection($tracks);

    }
    function show(Track $track){

        $tracks = Track::findOrFail($track);
        return new TrackResource($tracks);
    }
    public function destroy(Track $Track)
    {
        $track = Track::findOrFail($Track);
        $track->delete();

        return TrackResource::collection(Track::all());
    }
    function create()
    {
       return view('createTrack');
    }

    function store(Request $request)
    {

    $validator = Validator::make($request->all(), [
        'name' => 'required',
        'Number_of_courses' => 'required',
        'Number_of_Students' => 'required',
        'grade' => 'required'
    ]);


    $result = Track::create($request->all());
    $tracks=Track::all();
        return TrackResource::collection($tracks);

    }

    function update(Request $request, $id)
    {
       $track=Track::findOrFail($id);
       //$updatedData=request()->all();
       $validator = Validator::make($request->all(), [
        'name' => 'required',
        'Number_of_courses' => 'required',
        'Number_of_Students' => 'required',
        'grade' => 'required'
    ]);



    $track->update($request->all());


    $track->save();

    return new TrackResource($track);
        }

}
