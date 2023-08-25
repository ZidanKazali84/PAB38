<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Pembukuan extends Component
{
    public $tabs;
    
    public function render()
    {
        $this->tabs = [
            ['id' => 'tab-a', 'label' => 'Tab A'],
            ['id' => 'tab-b', 'label' => 'Tab B'],
        ];
        return view('livewire.admin.pembukuan');
    }
}
