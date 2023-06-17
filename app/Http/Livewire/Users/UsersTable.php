<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class UsersTable extends Component
{
    use WithPagination;
    
    protected $listeners = ['delete'];

    public function render(): View
    {
        $users = User::paginate();

        return view('livewire.users.users-table', compact('users'))->layout('layout.app');
    }
}
