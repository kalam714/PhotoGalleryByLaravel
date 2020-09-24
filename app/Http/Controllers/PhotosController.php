<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;

class PhotosController extends Controller
{
    //
    public function create($album_id){
        return view('photos.create')->with('album_id',$album_id);
    }
    public function store(Request $request){
        $this->validate($request,[
            'title' =>'required',
            'description' =>'required',
            
            'photo' =>'image|max:1999',
          ]);

  
            $fileNameWithExt=$request->file('photo')->getClientOriginalName();
            $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            $extension=$request->file('photo')->getClientOriginalExtension();
            $fileNameToStore=$fileName.'_'.time().'.'.$extension;
            $path=$request->file('photo')->storeAS('public/photos/'.$request->input('album_id'),$fileNameToStore);

        
       
        $photo=new Photo();
        $photo->album_id=$request->input('album_id');
        $photo->title=$request->input('title'); 
        $photo->description=$request->input('description');
       
        $photo->photo=$fileNameToStore;
        $photo->size= 2;
        $photo->save();
        return redirect('/album/'.$request->input('album_id'))->with('status','Photo Uploaded Successfully');
    }
}
