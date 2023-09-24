<?php

namespace App\Http\Livewire\Admin\Licitaciones;

use Livewire\Component;

class LicitacionesIndex extends Component
{
    public $user;
    public function render()
    {
        return view('livewire.admin.licitaciones.licitaciones-index');
    }
}
