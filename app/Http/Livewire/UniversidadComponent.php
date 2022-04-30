<?php

namespace App\Http\Livewire;

use App\Models\Universidad;
use Livewire\Component;

class UniversidadComponent extends Component
{
    public function render()
    {
        //Traer los datos de la universidad
        return view('livewire.universidad-component');
    }
}
