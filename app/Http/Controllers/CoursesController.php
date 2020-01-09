<?php

namespace App\Http\Controllers;

use App\Courses;
use App\Images;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function addCourse(){
        return (view('addCourses'));
    }
    public function submitCourse(Request $request){
        $parameters=$request->except(['_token']);
        $courses = new Courses();
        $images = new Images();
        $courses->name = $parameters['name'];
        $courses->description = $parameters['description'];
        $courses->Slug = $parameters['slug'];
        //upload image
        if($request->hasFile('file')){
            $filename = $request->file->getClientOriginalName();
            $extension = $request->file->getClientOriginalExtension();
            $images->file_name = $filename;
            $images->imageable_type = $extension;
            $request->file->storeAs('/public/upload', $filename);
        }
        $images->save();
        $courses->save();
        return redirect()->route('showCourse');
    }
    public function showCourse(){
        $courses=Courses::all();
        return view('showCourses')->with('Courses',$courses);
    }

    public function delete($id){
        $courses = Courses::find($id);
        $courses->delete();
        return redirect()->route('showCourse');
    }

    public function update1($id){
        $courses = Courses::find($id);
        return view('updateCourses')->with('courses',$courses);
    }

    public function update2(Request $request){
        $parameters=$request->all();
        $id=$parameters['id'];
        $oldCourse = Courses::find($id);
        $oldCourse->name=$parameters['name'];
        $oldCourse->description=$parameters['description'];
        $oldCourse->Slug=$parameters['slug'];
        $oldCourse->save();
        return redirect()->route('showCourse');
    }

    public function __invoke(Request $request)
    {
        //
    }
}
