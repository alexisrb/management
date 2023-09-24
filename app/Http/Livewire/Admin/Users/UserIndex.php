<?php

namespace App\Http\Livewire\Admin\Users;

use Livewire\Component;

class UserIndex extends Component
{
    public $user;
    public function render()
    {
        return view('livewire.admin.users.user-index');
    }
}
