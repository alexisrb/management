<?php

namespace App\Http\Livewire\Admin\Estimates;

use Livewire\Component;

class EstimatesIndex extends Component
{
    public $user;
    public function render()
    {
        return view('livewire.admin.estimates.estimates-index');
    }
}
