<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public $title = "";

    public function __construct($componentName)
    {
        $this->title = $componentName;
    }

    public function render()
    {
        return view('components.alert');
    }
}
