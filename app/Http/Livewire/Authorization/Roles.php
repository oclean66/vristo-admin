<?php

namespace App\Http\Livewire\Authorization;

use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Roles extends Component
{
    /** @var Collection<int, Role> */
    public $roles;

    /** @var Collection<int, Permission> */
    public $permissions;

    /** @var string */
    public $roleName;

    /** @var string */
    public $roleDescription;

    /** @var array<int, string> */
    public $permissionList = [];

    /** @var null|Collection<int, Permission> */
    public $rolePermissions;

    /** @var array<string|array<int, string>> */
    public $rules = [
        'roleName' => ['required', 'string', 'max:255'],
        'roleDescription' => ['string', 'max:255'],
    ];

    /**
     * Renderize the view of the component
     */
    public function render(): View
    {
        $this->roles = Role::all();
        $this->permissions = Permission::all();

        return view('livewire.authorization.roles');
    }

    public function getRole(Role $role): void
    {
        $this->roleName = $role->name;
        // @phpstan-ignore-next-line
        $this->roleDescription = $role->description;

        foreach ($role->getPermissionNames() as $permission) {
            array_push($this->permissionList, $permission);
        }
    }

    public function createRole(): void
    {
        $this->validate();

        $role = Role::create([
            'name' => $this->roleName,
            'description' => $this->roleDescription,
        ]);

        $role->givePermissionTo($this->permissionList);
        $this->clearForm();
    }

    public function updateRole(Role $role): void
    {
        $role->update([
            'name' => $this->roleName,
            'description' => $this->roleDescription,
        ]);

        $this->clearForm();
    }

    public function deleteRole(Role $role): void
    {
        $role->delete();
    }

    public function clearForm(): void
    {
        $this->reset('roleName', 'roleDescription', 'rolePermissions', 'permissionList');
    }

    public function getRolePermissions(Role $role): void
    {
        $this->rolePermissions = $role->getPermissionNames();
    }

    public function addPermissions(Role $role): void
    {
        $role->givePermissionTo($this->permissionList);
        $this->clearForm();
    }

    public function revokePermission(Role $role, string $permission): void
    {
        $role->revokePermissionTo($permission);
        $this->getRolePermissions($role);
    }
}
