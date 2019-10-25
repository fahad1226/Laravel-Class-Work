<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MultipleImages;
use Images;
use App\Image;
use DB;

class MultipleImageController extends Controller
{
    
    public function create_images()
    {
        return view('pages.creates_multiple_image');
    }


    public function show()
    {
        $images = MultipleImages::all();
        return view('pages.multiple_images',compact('images'));
    }

    public  function store_images(Request $request)
    {
        $images = array();
        if($files=$request->file('images')) {
            foreach ( $files as $file ) { 
                $name = $file->getClientOriginalName();
                $file ->move(public_path().'/images/', $name);
                $images[] = $name;

                DB::table('multiple_images')->insert([
                    'multiple_images' => $name
                ]);
            }
        }


        return redirect('multiple_images');
    }

}





    // public function store_images(Request $request)

    // {
    //     $this->validate($request, [

    //             'filename' => 'required',
    //             'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    //     ]);
        
    //     if($request->hasfile('filename'))
    //      {

    //         foreach($request->file('filename') as $image)
    //         {

    //             $name=$image->getClientOriginalName();
    //             $image->move(public_path().'uploads/images/', $name);  
    //             $data[] = $name;  
                
    //         }

    //         // $form = MultipleImages::insert($data);

    //         $form = new MultipleImages();
    //         // $form->multiple_images=json_encode($data);
    //         $form->multiple_images=time().$image->getClientOriginalName();
    //         $form->save();
    //      }

    //     return redirect('multiple_images')->with('success', 'Your images has been successfully');
    // }

   



