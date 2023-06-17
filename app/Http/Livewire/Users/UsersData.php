<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class UsersData extends Component
{
    public $user;

    public $edit = 'disabled';

    public function render()
    {
        return view('livewire.users.users-data')->layout('layout.app');
    }

    public function mount($user): void
    {
        $this->user = User::all()->find($user);
    }

    public function editable(): void
    {
        $this->edit = '';
    }

    public function updateUsers(): void
    {
        
    }
}
