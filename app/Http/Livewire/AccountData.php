<?php

namespace App\Http\Livewire;

use App\Models\Account;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class AccountData extends Component
{
    use WithPagination;
    
    public $account = null;

    protected $listeners = ['showAccount'];

    public function render()
    {
        return view('livewire.account-data');
    }

    public function showAccount($id)
    {
        $this->account = Account::find($id);
    }
}
