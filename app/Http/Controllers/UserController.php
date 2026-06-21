<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('admin.login');
    }
}
