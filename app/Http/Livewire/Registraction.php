<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Registraction extends Component
{
    public $name;
    public $password;
    public $email;
    public function render()
    {
        return view('livewire.registraction');
    }

    public function updated($field)
    {
        $this->validateOnly($field, [      
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:3|max:10',
        ]);
    }
    public function submit()
    {

        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:3|max:10',
        ]);
        dd($this->name, $this->email, $this->password);
    }
}
