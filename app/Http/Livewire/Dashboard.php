<?php

namespace App\Http\Livewire;

use App\Models\Currency;
use Livewire\Component;

class Dashboard extends Component
{

    public function render()
    {
        $currencies = Currency::paginate();
        return view('livewire.dashboard',compact('currencies'))->layout('layout.app');
    }
    
}
