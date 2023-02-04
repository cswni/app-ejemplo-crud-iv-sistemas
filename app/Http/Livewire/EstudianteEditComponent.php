<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Estudiante;

class EstudianteEditComponent extends Component
{
    public $estudiante;
    public function mount(){
        //Get the id from route
        $id = request()->route('id');
        //Get the estudiante from the database
        $this->estudiante = Estudiante::find($id);
    }

    public function rules(){
        return [
            'estudiante.nombres' => 'required',
            'estudiante.apellidos' => 'required',
            'estudiante.direccion' => 'required',
            'estudiante.telefono' => 'required',
            'estudiante.email' => 'required',
            'estudiante.ciudad' => 'required',
        ];
    }

    public function guardar(){
        $this->validate();
        $this->estudiante->save();
        session()->flash('message', 'Estudiante actualizado con éxito');
        return redirect()->route('estudiantes');
    }

    public function render()
    {
        return view('livewire.estudiante-edit-component');
    }
}
