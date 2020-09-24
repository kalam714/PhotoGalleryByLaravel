<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;

class AlbumsController extends Controller
{
    //
    public function index(){
        $albums=Album::with('Photos')->get();
        return view('albums.index')->with('albums',$albums);
    }
    public function create(){
        return view('albums.create');
    }
    public function store(Request $request){
        $this->validate($request,[
            'name' =>'required',
            'description' =>'required',
            'cover_image' =>'image|max:1999',
          ]);

  
            $fileNameWithExt=$request->file('cover_image')->getClientOriginalName();
            $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            $extension=$request->file('cover_image')->getClientOriginalExtension();
            $fileNameToStore=$fileName.'_'.time().'.'.$extension;
            $path=$request->file('cover_image')->storeAS('public/cover_images',$fileNameToStore);

        
       
        $album=new Album();
        $album->name=$request->input('name'); 
        $album->description=$request->input('description');
       
        $album->cover_image=$fileNameToStore;
        $album->save();
        return redirect('/albums')->with('status','Album Created Successfully');

    }
    public function show($id){
        $album=Album::with('Photos')->find($id);
        return view('albums.show')->with('album',$album);
    }
}


