<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Images;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function addCat(){
        return (view('addCategories'));
    }
    public function submitCat(Request $request){
        $parameters=$request->except(['_token']);
        $categories = new Categories();
        $images = new Images();
        $categories->name = $parameters['name'];
        $categories->Slug = $parameters['slug'];
        //upload image
        if($request->hasFile('file')){
            $filename = $request->file->getClientOriginalName();
            //$filesize= $request->file->getClientSize();
            $extension = $request->file->getClientOriginalExtension();
            $images->file_name = $filename;
            $images->imageable_type = $extension;
            $request->file->storeAs('/public/upload', $filename);
        }
        $images->save();
        $categories->save();
        return redirect()->route('showCat');
    }
    public function showCat(){
        $categories=Categories::all();
        return view('showCategories')->with('Categories',$categories);
    }

    public function delete($id){
        $categories = Categories::find($id);
        $categories->delete();
        return redirect()->route('showCat');
    }

    public function update1($id){
        $categories = Categories::find($id);
        return view('updateCategories')->with('categories',$categories);
    }

    public function update2(Request $request){
        $parameters=$request->all();
        $id=$parameters['id'];
        $oldCategory = Categories::find($id);
        $oldCategory->name=$parameters['name'];
        $oldCategory->Slug=$parameters['slug'];
        $oldCategory->save();
        return redirect()->route('showCat');
    }

    public function __invoke(Request $request)
    {
        //
    }
}
