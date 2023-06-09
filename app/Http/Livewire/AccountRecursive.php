<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AccountRecursive extends Component
{
    public $parent;
    
    public function render()
    {
        return view('livewire.account-recursive');
    }

    public function getAccount($id)
    {
        $this->emitTo('account-data', 'showAccount', $id);
    }
}
