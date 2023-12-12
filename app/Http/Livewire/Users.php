<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Users extends Component
{
    public $names=['pater', 'bruce', 'tony'];
    public function render()
    {
        return view('livewire.users');
    }
}
