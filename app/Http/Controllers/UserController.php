<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// To check whether the view exists or not
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    //
    function getUser(){
        // return "Niharika Bansal";
        return view('user');
    }

    function aboutUser(){
        return "Hello! This is Niharika";
    }

    function getUserName($name){
        // echo "Hello! This is ". $name;
        return view('getuser',['name'=>$name]);
    }

    function adminlogin(){
        if(View::exists('admin.login')){
            return view('admin.login');
        } else{
            echo "No view found";
        }
        
    }
}
