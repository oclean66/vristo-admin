<?php

namespace App\Http\Livewire\Authorization;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Permissions extends Component
{
    public function render(): View
    {
        // @phpstan-ignore-next-line
        return view('livewire.authorization.permissions')->layout('layout.app');
    }
}
