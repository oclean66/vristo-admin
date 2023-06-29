<?php

namespace App\Http\Livewire\Authorization;

use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class Roles extends Component
{
    /** @var Collection<int, Role> */
    public $roles;

    public Role|null $role;

    /** @var string */
    public $roleName;

    /** @var string */
    public $roleDescription;

    /**
     * Renderize the view of the component
     */
    public function render(): View
    {
        $this->roles = Role::all();

        return view('livewire.authorization.roles');
    }

    public function createRole(): void
    {
        Role::create([
            'name' => $this->roleName,
            'description' => $this->roleDescription,
        ]);
    }

    public function updateRole(): void
    {
        if (isset($this->role)) {
            $this->role->update([
                'name' => $this->roleName,
                'description' => $this->roleDescription,
            ]);
        }
    }

    public function deleteRole(Role $role): void
    {
        $role->delete();
    }

    public function getRole(Role $role): void
    {
        $this->role = $role;
        $this->roleName = $role->name;
        // @phpstan-ignore-next-line
        $this->roleDescription = $role->description;
    }
}
