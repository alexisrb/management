<?php

namespace App\Http\Livewire\Admin\Disbursements;

use Livewire\Component;

class DisbursementsIndex extends Component
{
    public $user;
    public function render()
    {
        return view('livewire.admin.disbursements.disbursements-index');
    }
}
