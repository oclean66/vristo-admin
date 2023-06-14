<?php

namespace App\Http\Livewire;

use App\Models\Account;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class AccountData extends Component
{
    use WithPagination;
    
    public $data = null;

    public $accountId = 0;

    protected $listeners = ['showAccount'];

    public function render()
    {
        $accounts = null;

        if (isset($this->data->accounts)) {
            $accounts = Account::where('category_id', $this->accountId)->orderBy('id', 'asc')->paginate(10);
        }

        return view('livewire.account-data', compact('accounts'));
    }

    public function showAccount($id)
    {
        $this->data = Category::find($id);
        $this->accountId = $id;
    }
}
