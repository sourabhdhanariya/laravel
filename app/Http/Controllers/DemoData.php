<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoData extends Controller
{
    public function index($user){

        return view ('demo', ['user'=>$user]);
    }
}
