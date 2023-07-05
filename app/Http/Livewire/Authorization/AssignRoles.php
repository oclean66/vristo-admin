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

    public null|Role $selectedRole;

    /** @var null|Collection<int, User> */
    public $authorizeUsers;

    /** @var array<int, User> */
    public $selectedUsers = [];

    /** @var array<int, User> */
    public $authorizeSelectedUsers = [];

    public string $search = '';

    public string $authorizeSearch = '';

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

    public function getRole(Role $role): void
    {
        $this->selectedRole = $role;
        $this->authorizeUsers = User::role($role->name)->get();
    }

    public function assignRole(): void
    {
        if (isset($this->selectedRole) && ! empty($this->selectedUsers)) {
            foreach ($this->selectedUsers as $user) {
                $user = User::findOrFail($user);
                $user->assignRole($this->selectedRole->name);
            }
            $this->getRole($this->selectedRole);
        }

    }

    public function revokeRole(): void
    {
        if (isset($this->selectedRole) && ! empty($this->authorizeSelectedUsers)) {
            foreach ($this->authorizeSelectedUsers as $user) {
                $user = User::findOrFail($user);
                $user->removeRole($this->selectedRole->name);
            }
            $this->getRole($this->selectedRole);
        }
    }
}
