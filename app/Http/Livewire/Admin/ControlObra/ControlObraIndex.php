<?php

namespace App\Http\Livewire\Admin\ControlObra;

use Livewire\Component;

class ControlObraIndex extends Component
{
    public $user;

    public function render()
    {
        return view('livewire.admin.control-obra.control-obra-index');
    }
}
