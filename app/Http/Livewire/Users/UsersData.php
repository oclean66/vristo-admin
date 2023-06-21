<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Illuminate\Support\Facades\Date;
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

    public $editable = false;

    protected $listeners = ['deleteUsers'];

    public function updated($field): void
    {
        $this->validateOnly($field, [
            'username' => ['string', 'max:45'],
            'name' => ['required', 'string', 'max:45'],
            'email' => ['required', 'email', 'max:45'],
            'password' => ['required', 'string', 'min:8', 'max:255'],
        ]);
    }

    public function render(): View
    {
        return view('livewire.users.users-data')->layout('layout.app');
    }

    public function mount(User $user): void
    {
        $this->user = $user;

        $this->fill([
            'username' => $user->username,
            'name' => $user->name,
            'email' => $user->email,
            'gender' => $user->gender,
            'state' => $user->state,
            'mobile' => $user->mobile,
            'phone' => $user->phone,
            'password' => $user->password,
        ]);
    }

    public function activateEdition(): void
    {
        $this->editable = true;
    }

    public function deleteUser(): void
    {
        $this->user->deleted_at = Date::now();
        $this->user->save();

        to_route('users.table');
    }
}
