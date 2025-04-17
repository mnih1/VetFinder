<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class VetResults extends Component
{
    public $perPage = 10;

    // Paginacja
    public function render()
    {
        $results = User::select('vet_firstName', 'vet_lastName')
            ->paginate($this->perPage);

        return view('livewire.vet-results', compact('results'));
    }
}
