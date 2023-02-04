<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Estudiante;

class EstudiantesComponent extends Component
{
    public $estudiantes;

    public function render()
    {
        $this->estudiantes = Estudiante::all();

        return view('livewire.estudiantes-component');
    }
}
