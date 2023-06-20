<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Illuminate\Validation\Rules\Password;
use Illuminate\View\View;
use Livewire\Component;

class UsersData extends Component
{
    public $user;

    // Form inputs
    public $username;
    public $name;
    public $email;
    public $gender;
    public $state;
    public $mobile;
    public $phone;
    public $password;

    public function render(): View
    {
        return view('livewire.users.users-data')->layout('layout.app');
    }

    public function mount(User $user): void
    {
        $this->user = $user;

        $this->username = $user->username;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->gender = $user->gender;
        $this->state = $user->state;
        $this->mobile = $user->mobile;
        $this->phone = $user->phone;
        $this->password = $user->password;
    }
}
