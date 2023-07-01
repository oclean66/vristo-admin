<?php

namespace App\Http\Livewire;

use App\Models\Account;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class AccountTree extends Component
{
    /** @var \Illuminate\Database\Eloquent\Collection<int, \App\Models\Account> */
    public $accounts;

    public function mount(): void
    {
        $this->accounts = Account::whereNull('parent_id')->with('children')->get();
    }

    public function render(): View
    {
        return view('livewire.account-tree');
    }
}
