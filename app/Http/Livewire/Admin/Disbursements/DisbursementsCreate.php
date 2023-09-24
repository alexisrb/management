<?php

namespace App\Http\Livewire\Admin\Disbursements;

use Livewire\Component;

class DisbursementsCreate extends Component
{
    public $name;
    public function render()
    {
        return view('livewire.admin.disbursements.disbursements-create');
    }
}
