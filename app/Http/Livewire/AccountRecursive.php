<?php

namespace App\Http\Livewire;

use App\Models\Account;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class AccountRecursive extends Component
{
    /** @var Account */
    public $parent;

    /** This method render the view **Blade** that belongs to this component */
    public function render(): View
    {
        return view('livewire.account-recursive');
    }

    /**
     * Send an event to `AccountData` component that contains the account id
     *
     * @param  int  $id Id of the account that you want to send
     */
    public function getAccount(int $id): void
    {
        $this->emitTo('account-data', 'showAccount', $id);
    }
}
