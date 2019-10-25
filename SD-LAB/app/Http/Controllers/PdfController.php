<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\PdfFile;
use PDF;

class PdfController extends Controller
{

    public function showform()
    {
        return view('pages.pdfform');
    }


    public function storepdf(Request $req)
    {
        $this->validate($req,[
            'fname' => 'required|min:5',
            'lname' => 'required|min:5',
            'email' => 'required|email',
            'bio' => 'required'
        ]);

        $obj = new PdfFile();
        $obj ->fname = $req->fname;
        $obj->lname = $req->lname;
        $obj->email = $req->email;
        $obj->bio = $req->bio;

        $obj->save();

        return redirect('showinfo/'.$obj->id);
    
    }


    public function showinfo($id)
    {
        $info = PdfFile::find($id);
        return view('showinfo',compact('info'));

    }

    public function download($id)
    {
        $info = PdfFile::find($id);
        $pdf = PDF::loadView('showinfo', compact('info'));
        return $pdf->download('showinfo.pdf');
    }


}
