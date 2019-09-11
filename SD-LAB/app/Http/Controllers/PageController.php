<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
