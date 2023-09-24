<?php

namespace App\Http\Livewire\Admin\WorkProgram;

use Livewire\Component;

class WorkProgramIndex extends Component
{
    public $user;
    public function render()
    {
        return view('livewire.admin.work-program.work-program-index');
    }
}
