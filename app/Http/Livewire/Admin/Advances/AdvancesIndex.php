<?php

namespace App\Http\Livewire\Admin\Advances;

use Livewire\Component;

class AdvancesIndex extends Component
{
    public $user;
    public function render()
    {
        return view('livewire.admin.advances.advances-index');
    }
}
