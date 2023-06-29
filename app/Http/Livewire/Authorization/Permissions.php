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

    /** @var string|null */
    public $roleName;

    /** @var array<null|int, string> */
    public $permissionsNames = [];

    public function render(): View
    {
        $this->permissions = Permission::all();
        $this->roles = Role::all();

        return view('livewire.authorization.permissions');
    }

    public function givePermissions(): void
    {
        $role = Role::findByName($this->roleName);
        // @phpstan-ignore-next-line
        $role->givePermissionTo($this->permissionsNames);
    }

    public function revokePermissions(): void
    {
        $role = Role::findByName($this->roleName);
        // @phpstan-ignore-next-line
        $role->revokePermissionTo($this->permissionsNames);
    }
}
