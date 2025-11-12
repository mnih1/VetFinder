<?php

namespace App\Livewire;

use Livewire\Component;

class Clinic extends Component
{
    public function render()
    {
        return view('livewire.pages.clinic')->layout('layouts.app');
    }
}
