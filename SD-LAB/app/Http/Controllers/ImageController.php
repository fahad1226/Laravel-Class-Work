<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use Images;


class ImageController extends Controller
{
    public function create()
    {
        return view('pages.create_image');
    }

    public function store(Request $request)
    {

        $originalImage = $request->file('filename');
        $thumbnailImage = Images::make($originalImage);
        $thumbnailPath = public_path().'/uploads/thumbnail/';
        $originalPath = public_path().'/uploads/images/';
        $thumbnailImage->save($originalPath.time().$originalImage->getClientOriginalName());
        $thumbnailImage->resize(200,180);
        $thumbnailImage->save($thumbnailPath.time().$originalImage->getClientOriginalName()); 

        $imagemodel= new Image();
        $imagemodel->image=time().$originalImage->getClientOriginalName();
        $imagemodel->name = $request->name;
        $imagemodel->university = $request->university;
        $imagemodel->save();
        
        return redirect('show_image')->with('msg', 'Your images has been successfully Upload');
    }


    public function show()
    {
        $images = Image::all();
        return view('pages.show_image',compact('images'));
    }


}
