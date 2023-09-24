<?php

namespace App\Http\Livewire\Admin\Accounting;

use Livewire\Component;

class AccountingCreate extends Component
{
    public $name;
    
    public function render()
    {
        return view('livewire.admin.accounting.accounting-create');
    }
}
