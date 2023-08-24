<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Idx extends Component
{
   
    public $UserTab = false;
    public $DataTab = false;
    public function render()
    {
        return view('livewire.admin.idx');
    }
    public function selectMenu($menu){
        if(!is_null($menu)){
            if($menu == 'Data'){
                $this->emit('selectMenu', $menu);
                $this->DataTab = true;
                $this->UserTab = false;
            }
            if($menu == 'User'){
                $this->emit('selectMenu', $menu);
                $this->DataTab = false;
                $this->UserTab = true;
                
            }
           
        }
    }
}
