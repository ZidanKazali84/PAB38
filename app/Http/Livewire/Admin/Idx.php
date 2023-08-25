<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class Idx extends Component
{
   
    public $users;
    public $showAddUserModal = false;
    public $newUserName;
    public $newUserEmail;
    public $confirmingUserDeletion = false;
    public $userToDelete;
    public function render()
    {
        return view('livewire.admin.idx');
    }
   
    public function confirmDeleteUser($userId)
    {
        $this->userToDelete = $userId;
        User::destroy($this->userToDelete);

        $this->emit('userDeleted');
        $this->confirmingUserDeletion = false;
        
    }

    public function deleteUser()
    {
        User::destroy($this->userToDelete);

        $this->emit('userDeleted');
        $this->confirmingUserDeletion = false;
    }

    public function resetInput()
    {
        $this->newUserName = '';
        $this->newUserEmail = '';
    }
}
