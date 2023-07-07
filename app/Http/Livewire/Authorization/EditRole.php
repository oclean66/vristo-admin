<?php

namespace App\Http\Livewire\Authorization;

use Illuminate\Support\Str;
use Illuminate\View\View;
use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class EditRole extends Component
{
    public Role $role;

    /** @var null|array<string, array<int, string>> */
    public $permissionList;

    /** This method render the view **Blade** that belongs to this component */
    public function render(): View
    {
        return view('livewire.authorization.edit-role')->layout('layout.app');
    }

    public function mount(int $id): void
    {
        $this->role = Role::findOrFail($id);

        $this->getPermissions();
    }

    /** Get the permissions that belongs to the role given */
    public function getPermissions(): void
    {
        $permissionsCollection = Permission::all('name');
        $permissions = $permissionsCollection->toArray();

        $permissions = array_map(fn ($permission) => $permission['name'], $permissions);

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
