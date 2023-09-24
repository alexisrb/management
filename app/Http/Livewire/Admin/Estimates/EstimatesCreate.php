<?php

namespace App\Http\Livewire\Admin\Estimates;

use Livewire\Component;

class EstimatesCreate extends Component
{
    public $user, $name;
    public function render()
    {
        return view('livewire.admin.estimates.estimates-create');
    }
}
