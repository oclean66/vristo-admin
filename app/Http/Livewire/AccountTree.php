<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class AccountTree extends Component
{
    public $accounts;

    public function mount()
    {
        $this->accounts = Category::whereNull('parent_id')->with('children')->get();
    }
    
    public function render()
    {
        return view('livewire.account-tree');
    }
}
