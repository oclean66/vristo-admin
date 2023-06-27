<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class AccountRecursive extends Component
{
    /**
     * @var \App\Models\Account
     */
    public $parent;

    public function render(): View
    {
        return view('livewire.account-recursive');
    }

    public function getAccount(int $id): void
    {
        $this->emitTo('account-data', 'showAccount', $id);
    }
}
