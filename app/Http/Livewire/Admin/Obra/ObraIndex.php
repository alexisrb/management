<?php

namespace App\Http\Livewire\Admin\Obra;

use Livewire\Component;

class ObraIndex extends Component
{
    public $user;
    public function render()
    {
        return view('livewire.admin.obra.obra-index');
    }
}
