<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class UsersTable extends Component
{
    use WithPagination;

    protected $listeners = ['delete'];

    public function render(): View
    {
        $users = User::paginate(20);

        return view('livewire.users.users-table', compact('users'))->layout('layout.app');
    }

    public function delete(User $user): void
    {
        $user->delete();
    }
}
