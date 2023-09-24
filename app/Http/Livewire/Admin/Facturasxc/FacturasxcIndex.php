<?php

namespace App\Http\Livewire\Admin\Facturasxc;

use Livewire\Component;

class FacturasxcIndex extends Component
{
    public $user, $name;
    public function render()
    {
        return view('livewire.admin.facturasxc.facturasxc-index');
    }
}
