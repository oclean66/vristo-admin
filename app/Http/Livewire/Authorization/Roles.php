<?php

namespace App\Http\Livewire\Authorization;

use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Roles extends Component
{
    /**
     * All roles collection
     *
     * @var Collection<int, Role>
     */
    public $roles;

    /**
     * All permissions collection
     *
     * @var Collection<int, Permission>
     */
    public $permissions;

    /** @var string */
    public $roleName;

    /** @var string */
    public $roleDescription;

    /** @var array<int, string> */
    public $permissionList = [];

    /** @var null|Collection<int, Permission> */
    public $rolePermissions;

    /**
     * Validation Rules.
     *
     * @var array<string|array<int, string>>
     */
    public $rules = [
        'roleName' => ['required', 'string', 'max:255'],
        'roleDescription' => ['max:255'],
    ];

    /** This method render the view **Blade** that belongs to this component. */
    public function render(): View
    {
        $this->roles = Role::all();
        $this->permissions = Permission::all();

        return view('livewire.authorization.roles');
    }

    /**
     * Get the role selected by the user and storage its `name` and `description` in
     * `$roleName` and `$roleDescription`, also put the permission that belongs to rol
     * into `$permissionList`
     *
     * @param  Role  $role Recive a role object or an id
     */
    public function getRole(Role $role): void
    {
        $this->roleName = $role->name;
        // @phpstan-ignore-next-line
        $this->roleDescription = $role->description;

        foreach ($role->getPermissionNames() as $permission) {
            array_push($this->permissionList, $permission);
        }
    }

    /**
     * Create a new role with `$roleName` and `$roleDescription` and give them
     * the selected permission on `$permissionList`
     */
    public function createRole(): void
    {
        $this->validate();

        $role = Role::create([
            'name' => $this->roleName,
            'description' => $this->roleDescription,
        ]);

        $role->givePermissionTo($this->permissionList);
        $this->clearForm();

        $this->emitSelf('created');
    }

    /**
     * Update the given role using the `$roleName` and `$roleDescription` propierties
     *
     * @param  Role  $role Recive a role object or an id
     */
    public function updateRole(Role $role): void
    {
        $role->update([
            'name' => $this->roleName,
            'description' => $this->roleDescription,
        ]);

        $this->clearForm();

        $this->emitSelf('updated');
    }

    /**
     * Delete the given role
     *
     * @param  Role  $role Recive a role object or an id
     */
    public function deleteRole(Role $role): void
    {
        $role->delete();

        $this->emitSelf('deleted');
    }

    /** Reset the form fields */
    public function clearForm(): void
    {
        $this->reset('roleName', 'roleDescription', 'rolePermissions', 'permissionList');
    }

    /**
     * Store the permissions that belongs to the given role in `$rolePermissions`
     *
     * @param  Role  $role Recive a role object or an id
     */
    public function getRolePermissions(Role $role): void
    {
        $this->rolePermissions = $role->getPermissionNames();
    }

    /**
     * Assign the selected permissions from `$permissionList` to the given role
     *
     * @param  Role  $role Recive a role object or an id
     */
    public function addPermissions(Role $role): void
    {
        $role->givePermissionTo($this->permissionList);
        $this->clearForm();
    }

    /**
     * Remove the given permission from the given role
     *
     * @param  Role  $role Recive a role object or an id
     * @param  string  $permission Permission that want to revoke
     */
    public function revokePermission(Role $role, string $permission): void
    {
        $role->revokePermissionTo($permission);
        $this->getRolePermissions($role);
    }
}
