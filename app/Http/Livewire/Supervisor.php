<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Supervisor extends Component
{
    public function render()
    {
        return view('livewire.supervisor')->layout('adminlte::page');
    }
}
