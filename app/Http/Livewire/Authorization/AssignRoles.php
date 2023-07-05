<?php

namespace App\Http\Livewire\Authorization;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;

class AssignRoles extends Component
{
    use WithPagination;

    /** @var Collection<int, Role> */
    public $roles;

    public string $roleName = '';

    /** @var array<int, User> */
    public $selectedUsers = [];

    public string $search = '';

    public function render(): View
    {
        $users = User::where('name', 'like', '%'.$this->search.'%')->orWhere('email', 'like', '%'.$this->search.'%')->whereNull('deleted_at')->paginate(10);

        return view('livewire.authorization.assign-roles', compact('users'))->layout('layout.app');
    }

    public function mount(): void
    {
        $this->roles = Role::all();
    }

    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    public function getRole(string $name): void
    {
        $this->roleName = $name;
    }

    public function assignRole(): void
    {
        if (empty($this->selectedUsers) || $this->roleName == '') {
            return;
        }

        foreach ($this->selectedUsers as $user) {
            $user = User::findOrFail($user);
            $user->assignRole($this->roleName);
        }
    }

    public function revokeRole(): void
    {
        if (empty($this->selectedUsers) || $this->roleName == '') {
            return;
        }

        foreach ($this->selectedUsers as $user) {
            $user = User::findOrFail($user);
            $user->removeRole($this->roleName);
        }
    }
}
