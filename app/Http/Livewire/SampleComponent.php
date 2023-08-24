<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SampleComponent extends Component
{
    public $message = "ini Home";

    public function render()
    {
        return view('livewire.sample-component');
    }
}
