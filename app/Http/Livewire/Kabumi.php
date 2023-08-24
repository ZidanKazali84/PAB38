<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Kabumi extends Component
{
    public function render()
    {
        return view('livewire.kabumi')->layout('adminlte::page');
    }
}
