<?php

namespace App\Http\Livewire\Admin\ControlObra;

use Livewire\Component;

class ControlObraCreate extends Component
{
    public $user, $name, $email;




    public function render()
    {
        return view('livewire.admin.control-obra.control-obra-create');
    }
}
