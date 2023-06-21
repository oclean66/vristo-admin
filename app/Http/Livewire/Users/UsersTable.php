<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class UsersTable extends Component
{
    use WithPagination;

    public $name;
    public $username;
    public $email;
    public $gender;
    public $state;
    public $mobile;
    public $phone;
    public $password;
    public $password_confirmation;

    protected $listeners = ['delete'];


    public function render(): View
    {
        $users = User::whereNull('deleted_at')->paginate();

        return view('livewire.users.users-table', compact('users'))->layout('layout.app');
    }

    public function updated($field): void
    {
        $this->validateOnly($field, [
            'username' => ['string', 'max:45'],
            'name' => ['required', 'string', 'max:45'],
            'email' => ['required', 'email', 'max:45'],
            'password' => ['required', 'string', 'min:8', 'max:255'],
        ]);
    }

    public function resetFields(): void
    {
        $this->reset('name', 'username', 'email', 'gender', 'state', 'mobile', 'phone', 'password', 'password_confirmation');
    }
}
