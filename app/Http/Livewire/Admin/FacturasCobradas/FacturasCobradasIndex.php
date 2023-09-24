<?php

namespace App\Http\Livewire\Admin\FacturasCobradas;

use Livewire\Component;

class FacturasCobradasIndex extends Component
{
    public  $user;
    public function render()
    {
        return view('livewire.admin.facturas-cobradas.facturas-cobradas-index');
    }
}
