<?php

namespace App\Http\Livewire;

use App\Models\Account;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class AccountTree extends Component
{
    /** @var Collection<int, Account> */
    public $accounts;

    /** This method render the view **Blade** that belongs to this component. */
    public function render(): View
    {
        return view('livewire.account-tree');
    }

    /**
     * Runs once, immediately after the component is instantiated,
     * but before `render()` method is called
     */
    public function mount(): void
    {
        $this->accounts = Account::whereNull('parent_id')->with('children')->get();
    }
}
