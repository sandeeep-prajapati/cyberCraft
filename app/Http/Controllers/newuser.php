<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Session;

class newuser extends Controller
{
    //
    function registration(Request $req){
        $req->validate([
            'userName'=>'required',
            'gender'=>'required',
            'age'=>'required',
            'address'=>'required',
            'collegeName'=>'required',
            'collegeCity'=>'required',
            'year'=>'required',
            'mobileNumber'=>'required',
            'email'=>'required|unique:users',
            'password'=>'required'
        ]);
        $num = $req->input('year');
        $int = (int)$num;
        $result = DB::table('users')->insert([
            // 'id'=> Session::get('loginId'),
            // 'fname'=>$req->input('sfname'),
            // // img
            // 'img'=>"imagesS/".$imageName,
            // 'status'=>1
            'userName'=>$req->input('userName'),
            'gender'=>$req->input('gender'),
            'age'=>$req->input('age'),
            'address'=>$req->input('address'),
            'collegeName'=>$req->input('collegeName'),
            'collegeCity'=>$req->input('collegeCity'),
            'year'=>$int,
            'mobileNumber'=>$req->input('mobileNumber'),
            'email'=>$req->input('email'),
            'password'=>$req->input('password'),
            'otp'=>00000
        ]);
        if($result){
            $req->Session()->put('loginId',$req->input('userName'));
            // return redirect('userdashboard')->with('success','you have successfully add a student there');
            echo "good";

        }
        else{
            echo "bad";
        }
    }
    function login(Request $req){
        $req->validate([
            'userName'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]); 
        $email = $req->input('email');
        $userName = $req->input('userName');
        $password = $req->input('password'); 
        $result = DB::table('users')->where('email', $email)->first();
        if(($email = $result->email)&&($password == $result->password)&&($userName == $result->userName)){
            echo "good";
        }
        else{
            echo "bad";
        }

    }
}
