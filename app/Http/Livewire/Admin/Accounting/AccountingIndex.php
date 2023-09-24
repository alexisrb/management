<?php

namespace App\Http\Livewire\Admin\Accounting;

use Livewire\Component;

class AccountingIndex extends Component
{
    public $user;
    public function render()
    {
        return view('livewire.admin.accounting.accounting-index');
    }
}
