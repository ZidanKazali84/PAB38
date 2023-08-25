<?php

namespace App\Http\Livewire\Admin;

use App\Models\Role;
use App\Models\User as UserModel;
use Livewire\Component;

class User extends Component
{
    public $users,$roles;
    public $showAddUserModal = false;
    public $newUserName;
    public $newUserEmail;
    public $confirmingUserDeletion = false;
    public $userToDelete;

    public function render()
    {
        $this->roles = Role::all();
        $this->users = UserModel::all();
        return view('livewire.admin.user');
    }

    public function showAddUserModal()
    {
        $this->showAddUserModal = true;
    }

    public function addUser()
    {
        // Lakukan validasi jika diperlukan
       $this->validate([
            'newUserName'=>'required',
            'newUserEmail'=>'required',
            
        ]);
        
        UserModel::create([
            'name' => $this->newUserName,
            'email' => $this->newUserEmail,
            'password'=>$this->newUserName,
        ]);
        $this->newUserName ='';
        $this->newUserEmail='';

        $this->emit('userAdded');
        $this->resetInput();
        
    }

    public function confirmDeleteUser($userId)
    {
        $this->userToDelete = $userId;
        $this->confirmingUserDeletion = true;
    }

    public function deleteUser()
    {
        UserModel::destroy($this->userToDelete);

        $this->emit('userDeleted');
        $this->confirmingUserDeletion = false;
    }

    public function resetInput()
    {
        $this->newUserName = '';
        $this->newUserEmail = '';
    }
}
