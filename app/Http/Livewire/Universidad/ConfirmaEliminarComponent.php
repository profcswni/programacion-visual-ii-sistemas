<?php

namespace App\Http\Livewire\Universidad;

use App\Models\Universidad;
use Livewire\Component;

class ConfirmaEliminarComponent extends Component
{
    public function mount()
    {
        $this->universidad = new Universidad();
        if (isset(request()->id)) {
            $universidad = request()->id;
            //Cargar la universidad que se va a actualizar
            $this->universidad = Universidad::findOrFail($universidad);
        }

    }

    public function render()
    {
        return view('livewire.universidad.confirma-eliminar-component');
    }

    public function eliminar(Universidad $universidad)
    {
        //Eliminar la universidad
        $universidad->delete();

        //Redireccionar a la lista de universidades
        return redirect(route('universidad', ['show' => 1]));

    }

    public function cancelar()
    {
        //Redireccionar a la lista de universidades
        return redirect(route('universidad', ['show' => 0]));

    }
}
