<?php

namespace App\Http\Livewire\Admin\ControlObra;

use Livewire\Component;

class ControlObraCreate extends Component
{
    public $user, $name, $email, $descripcion;

    public function rules(){
        $array = [];

        $array['descripcion'] = ['nullable', 'string', 'max=429496729'];

        return $array;
    }
    public function save(){
        dd('entre');
    }


    public function render()
    {
        return view('livewire.admin.control-obra.control-obra-create');
    }
}
