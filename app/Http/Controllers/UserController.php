<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function getUser(){
        return "Niharika Bansal";
    }

    function aboutUser(){
        return "Hello! This is Niharika";
    }

    function getUserName($name){
        return "Hello! This is ". $name;
    }
}
