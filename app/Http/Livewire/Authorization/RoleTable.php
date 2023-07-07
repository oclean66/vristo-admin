<?php

namespace App\Http\Livewire\Authorization;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;

class RoleTable extends Component
{
    use WithPagination;

    /** @var null|array<string, array<int, string>> */
    public $permissionList;

    /** This method render the view **Blade** that belongs to this component */
    public function render(): View
    {
        $roles = Role::all();

        return view('livewire.authorization.role-table', compact('roles'))->layout('layout.app');
    }

    /**
     * Get the permissions that belongs to the role given
     *
     * @param  Role  $role Recive a role object or an id
     */
    public function getRolePermissions(Role $role): void
    {
        $permissionsCollection = $role->getPermissionNames();
        $permissions = $permissionsCollection->all();

        $permissionsName = array_unique(array_map(function ($permission) {
            preg_match('/[a-z]+$/', $permission, $match);

            return $match[0];
        }, $permissions));

        foreach ($permissionsName as $name) {
            $permissionGroup = [];

            foreach ($permissions as $permission) {
                if (preg_match("/$name/", $permission)) {
                    $permissionGroup[] = $permission;
                }
            }

            $this->permissionList[Str::plural($name)] = $permissionGroup;
        }
    }
}
