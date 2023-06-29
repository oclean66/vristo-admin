<?php

namespace App\Http\Livewire\Authorization;

use Illuminate\Contracts\View\View;
use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Permissions extends Component
{
    /** @var \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Permission> */
    public $permissions;

    public mixed $roles;

    /** @var string|null */
    public $roleName;

    /** @var array<null|int, string> */
    public $permissionsNames = [];

    public function render(): View
    {
        $this->permissions = Permission::all();
        $this->roles = Role::all();

        return view('livewire.authorization.permissions')->layout('layout.app');
    }

    public function givePermissions(): void
    {
        $role = Role::findByName($this->roleName);
        // @phpstan-ignore-next-line
        $role->syncPermissions($this->permissionsNames);
    }
}
