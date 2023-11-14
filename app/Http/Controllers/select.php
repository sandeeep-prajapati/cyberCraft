<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Session;

class select extends Controller
{
    function messageDb(Request $req){
        $req->validate([
            'message'=>'required',
        ]);
        $result = DB::table('messsages')->insert([
           'sender' => "iyyaut",
           'reciver' => "gsjghgh",
           'message' => $req->input('message'),
           'time' => "12:23:23"
        ]);
        if($result){
            echo "good";
        }
        else{
            echo "bed";
        }
    }
    function allMessageDashboard(Request $req){
        $data1 = DB::table('bookornotes')->get();
        $data2 = DB::table('chatrooms')->get();
        $data3 = DB::table('chatrooms')->where('sessionId',1)->get();
        return view('select.userMessageDashboard',['data1'=>$data1,'data2'=>$data2, 'data3'=>$data3]);
        // echo $data;
    }
    function maindashboard(Request $req){
        $data1 = DB::table('chatrooms')->where('sessionId',1)->get();
        $data2 = DB::table('users')->where('year',1)->get();
        $data3 = DB::table('bookornotes')->get();
        $data4 = DB::table('users')->where('year', '>',1)->get();
        return view('select.maindashboard',['data1'=>$data1,'data2'=>$data2,'data3'=>$data3,'data4'=>$data4]);
    }
}
