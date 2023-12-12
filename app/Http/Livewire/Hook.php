<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Hook extends Component
{
    public $name="starting state";
    public $counter;
    function mount(){
        $this->name="sourabh";
    }
    function hydrate(){
        $this->counter++;
    }
    function updateName($name){
        $this->name=$name;
    }
    public function render()
    {
        return view('livewire.hook');
    }
}
