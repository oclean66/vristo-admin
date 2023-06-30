<?php

namespace App\Http\Livewire\Authorization;

use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Permissions extends Component
{
    /** @var Collection<int, Permission> */
    public $permissions;

    /** @var Collection<int, Role> */
    public $roles;

    public Role|null $role;

    public string|null $roleName;

    /** @var array<null|int, string> */
    public $permissionsNames = [];

    /** @var array<int, string> */
    protected $listeners = ['solectRole'];

    public function render(): View
    {
        $this->permissions = Permission::all();
        $this->roles = Role::all();

        return view('livewire.authorization.permissions');
    }

    public function givePermissions(): void
    {
        $this->role->givePermissionTo($this->permissionsNames);
    }

    public function revokePermissions(string $permission): void
    {
        $name = Permission::findByName($permission);
        $this->role->revokePermissionTo($name);
    }

    public function solectRole(Role $role): void
    {
        $this->role = $role;
    }
}
