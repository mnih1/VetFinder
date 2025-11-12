<?php

namespace App\Livewire;

use Livewire\Component;

class Account extends Component
{
    public function render()
    {
        return view('livewire.pages.account')->layout('layouts.app');
    }
}
