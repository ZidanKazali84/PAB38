<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Presensi extends Component
{
    public function render()
    {
        return view('livewire.presensi')->layout('adminlte::page');
    }
}
