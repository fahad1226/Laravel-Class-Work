<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class PageController extends Controller
{
    public function profile()
    {
        $data = array(
            'Name '=>'Fahad Bin Munir',
            'Email '=>'fahadbinmnr@gmail.com',
            'ID '=>'1226',
            'University '=>'Premier University',
            'Country '=>'Bangladesh',
            'City '=>'Chittagong'
        );
        return view('pages.profile',[
            'information'=>$data,
        ]);
    }

    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        $name = "Test Application";
        $email = "test@email.com";
        $plan = "not yet decided";
        return view('pages.about',[
            'name'=>$name,
            'email'=>$email,
            'plan'=>$plan
        ]);
    }

    public function contact()
    {
       return view('pages.contact');
    }

    public function storeFeedback(Request $request)
    {
        $name = request('name');
        $email = request('email');
        $msg = request('msg');
        return view('pages.feedback',[
            'fname'=>$name,
            'femail'=>$email,
            'fmsg'=>$msg
        ]);
    }

    public function team()
    {
        $team_member = array(
            'member_1'=>'Fahad Bin Munir',
            'member_2'=>'Ishmam Bin Azim',
            'member_3'=>'Susmoy Sen Gupta',
            'member_4'=>'Ashim Shil',
        );
        return view('pages.team',[
            'team_members'=>$team_member,
        ]);
    }

   

    public function create()
    {
        return view('pages.create');
    }

    public function store(Request $req)
    {
        $cs = new Customer();
        $cs->name = $req->name;
        $cs->email = $req->email;
        $cs->uni_id = $req->uni_id;
        $cs->country = $req->country;
        $cs->university = $req->university;
        $cs->city = $req->city;
        $cs->save();
        return redirect('list');
    }
    public function list()
    {
        $customers = Customer::all();
        return view('pages.list',compact('customers'));
    }
    public function edit($id)
    {
        $customers = Customer::find($id);
        return view('pages.edit',compact('customers'));
    }


    public function update(Request $req,$id)
    {
        $cs = Customer::find($id);
        $cs->name = $req->name;
        $cs->email = $req->email;
        $cs->uni_id = $req->uni_id;
        $cs->country = $req->country;
        $cs->university = $req->university;
        $cs->city = $req->city;
        $cs->save();
        return redirect('list')->with('message','successfully updated');
    }


    public function destroy($id)
    {
        $customers = Customer::find($id);
        $customers ->delete();
        return redirect('list')->with('message','Customer Deleted');
    }

}
