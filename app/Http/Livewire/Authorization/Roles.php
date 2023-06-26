<?php

namespace App\Http\Livewire\Authorization;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class Roles extends Component
{
    /**
     * @var \Illuminate\Support\Collection<int, array<string, mixed>>
     */
    public $roles;

    /**
     * New role's name
     *
     * @var string
     */
    public $roleName;

    public function render(): View
    {
        $this->roles = DB::table('roles')->get();

        // @phpstan-ignore-next-line
        return view('livewire.authorization.roles')->layout('layout.app');
    }

    public function createRole(): void
    {
        Role::create(['name' => $this->roleName]);
    }

    public function deleteRole(Role $role): void
    {
        $role->delete();
    }
}
