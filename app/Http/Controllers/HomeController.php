<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        Log::debug("log created ");
        return view('home');
    }
}
