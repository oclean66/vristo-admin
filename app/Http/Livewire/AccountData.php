<?php

namespace App\Http\Livewire;

use App\Models\Account;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class AccountData extends Component
{
    use WithPagination;

    /** @var \App\Models\Account|null */
    public $account;

    /**
     * Trapped events
     *
     * @var array<int, string>
     */
    protected $listeners = ['showAccount'];

    public function render(): View
    {
        return view('livewire.account-data');
    }

    public function showAccount(int $id): void
    {
        $this->account = Account::find($id);
    }
}
