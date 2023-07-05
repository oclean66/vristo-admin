<?php

namespace App\Http\Livewire;

use App\Models\Account;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class AccountData extends Component
{
    use WithPagination;

    public Account|null $account;

    /**
     * Recived events
     *
     * @var array<int, string>
     */
    protected $listeners = ['showAccount'];

    /** This method render the view **Blade** that belongs to this component. */
    public function render(): View
    {
        return view('livewire.account-data');
    }

    /**
     * Event recived that show the selected account data
     *
     * @param  string  $id Id recived from the `AccountRecursive` component
     */
    public function showAccount(int $id): void
    {
        $this->account = Account::find($id);
    }
}
