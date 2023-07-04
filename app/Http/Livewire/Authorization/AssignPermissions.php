<?php

namespace App\Http\Livewire\Authorization;

use Illuminate\View\View;
use Livewire\Component;

class AssignPermissions extends Component
{
    public function render(): View
    {
        return view('livewire.authorization.assign-permissions')->layout('layout.app');
    }
}
