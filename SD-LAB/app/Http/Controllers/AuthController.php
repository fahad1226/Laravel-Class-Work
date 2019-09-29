<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use Session;
class AuthController extends Controller
{
    public function login(){
        if(Session::has('userid')){
            return redirect()->to('dashboard');
        }
        return view('pages.login');
    }

    public function loginstore(Request $request){
        $email = $request->email;
        $password = $request->password;
        // select * from employees where email='' AND password=''
        $obj = Employee::where('email','=',$email)
                ->where('password','=', md5($password))
                ->first();

        if($obj){
            // echo 'Successfully Logged in';
            Session::put('userid', $obj->id);
            Session::put('username', $obj->name);
            Session::put('userrole', $obj->role);
            return redirect()->to('dashboard');
        }
        else{
           // echo 'Invalid Email or password';
           return redirect()->back()->with('msg', 'Wrong Email or Password');// set msg in session for only once
        }
        
    }

    public function dashboard(){
        return view('pages.dashboard');
    }

    public function logout(){
        Session::flush();
        return redirect()->to('login');
    }

    public function teacher1(){
        echo 'Teacher 1';
    }

    public function teacher2(){
        echo 'Teacher 2';
    }
    public function teacher3(){
        echo 'Teacher 3';
    }

    public function student1(){
        echo 'Student 1';
    }

    public function student2(){
        echo 'Student 2';
    }
    public function student3(){
        echo 'Student 3';
    }
}
