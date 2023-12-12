<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Routedata extends Component
{
    public  $msg="message from search components";
   
    public function updateMsg(){
        $this->msg="message from update";
    }
    public function render()
    {
         return view('livewire.routedata');
    }
}
