<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Http extends Controller
{
    function textRequest(Request $req){
    // return response("Hellow",200)->header('Content-Type','text/plain');
    // return response("Hellow",200)->withoutCookie('name', 'sourabh');
    
    return $req->input();
    }
}
