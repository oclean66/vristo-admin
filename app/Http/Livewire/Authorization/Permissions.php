<?php

namespace App\Http\Livewire\Authorization;

use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;
use Spatie\Permission\Models\Permission;

class Permissions extends Component
{
    /** @var Collection<int, Permission> */
    public $permissions;

    public function render(): View
    {
        $this->permissions = Permission::all();

        return view('livewire.authorization.permissions');
    }
}
