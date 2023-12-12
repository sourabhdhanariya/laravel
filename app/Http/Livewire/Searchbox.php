<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Searchbox extends Component
{
    public function render()
    {
       $data=["name"=>"sourabh", "email"=>"kumawatsourabh65@gmail.com"];     
        return view('livewire.searchbox',['data'=> $data]);
    }
}
