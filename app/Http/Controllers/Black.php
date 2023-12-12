<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Blade;
use Illuminate\Http\Request;

class Black extends Controller
{
    public function index(){
        echo "hii";
        $totalProduct="sourabh";
        return Blade::render('<h1> {{$total}} 
        Product List <h1>', ['total'=>$totalProduct]);
    }
}
