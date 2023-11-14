<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Session;
class activity extends Controller
{
    //
    function addchatroom(Request $req){
        $req->validate([
            'groupName'=>'required|unique:chatrooms',
            'groupDiscription'=>'required',
            'collegeName'=>'required',
            'collegeCity'=>'required',
            'year'=>'required',
        ]);
        $result = DB::table('chatrooms')->insert([
            // 'id'=> Session::get('loginId'),
            // 'fname'=>$req->input('sfname'),
            // // img
            // 'img'=>"imagesS/".$imageName,
            // 'status'=>1
            'sessionId'=>"kcdhhsj",
            'groupName'=>$req->input('groupName'),
            'groupDiscription'=>$req->input('groupDiscription'),
            'collegeName'=>$req->input('collegeName'),
            'collegeCity'=>$req->input('collegeCity'),
            'year'=>$req->input('year'),
        ]);
        if($result){
            echo "good";
        }
        else{
            echo "bed";
        }
    }
    function uploadbookDb(Request $req){
        $req->validate([
            'bookTitle'=>'required',
            'bookDiscription'=>'required',
            'itemType'=>'required',
        ]);
        $result = DB::table('bookornotes')->insert([
            'sessionId'=>"kcdhhsj",
            'bookTitle'=>$req->input('bookTitle'),
            'bookDiscription'=>$req->input('bookDiscription'),
            'itemType'=>$req->input('itemType'),
        ]);
        if($result){
            echo "good";
        }
        else{
            echo "bed";
        }
    } 
    function reportSection(Request $req){
        $req->validate([
            'issue'=>'required',
            'issueDiscription'=>'required'
        ]);
        $result = DB::table('report')->insert([
            'cardId'=>11,
            'issue'=>$req->input('issue'),
            'issueDiscription'=>$req->input('issueDiscription'),
            'sessionId'=>"jdjgdjg"
        ]);
        if($result){
            echo "good";
        }
        else{
            echo "bed";
        }
    }
}
