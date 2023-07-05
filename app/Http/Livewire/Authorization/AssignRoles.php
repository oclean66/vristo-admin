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

    /**
     * All roles collection
     *
     * @var Collection<int, Role>
     */
    public $roles;

    /** Role selected */
    public null|Role $selectedRole;

    /**
     * All users with a role assigned
     *
     * @var null|Collection<int, User>
     */
    public $authorizeUsers;

    /**
     * Selected users
     *
     * @var array<int, User>
     */
    public $selectedUsers = [];

    /**
     * Selected users with a role assigned
     *
     * @var array<int, User>
     */
    public $authorizeSelectedUsers = [];

    /** Input search */
    public string $search = '';

    /** Input search of users with a role */
    public string $authorizeSearch = '';

    /** This method render the view **Blade** that belongs to this component */
    public function render(): View
    {
        $users = User::where('name', 'like', '%'.$this->search.'%')->orWhere('email', 'like', '%'.$this->search.'%')->whereNull('deleted_at')->paginate(10);

        return view('livewire.authorization.assign-roles', compact('users'))->layout('layout.app');
    }

    /**
     * Runs once, immediately after the component is instantiated,
     * but before `render()` method is called
     */
    public function mount(): void
    {
        $this->roles = Role::all();
    }

    /** Runs before a propierty called `$search` is updated */
    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    /**
     * Get the role selected by the user and storage it in `$selectedRole`,
     * also save the users with the same role into `$authorizeUsers`
     *
     * @param  Role  $role Recive a role object or an id
     */
    public function getRole(Role $role): void
    {
        $this->selectedRole = $role;
        $this->authorizeUsers = User::role($role->name)->get();
    }

    /** This method assign the `$selectedRole` to `$selectedUsers` */
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

    /** This method remove the `$selectedRole` from `$authorizeSelectedUsers` */
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
