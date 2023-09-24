<?php

namespace App\Http\Livewire\Admin\WorkProgram;

use Livewire\Component;

class WorkProgramCreate extends Component
{
    public $name;

    public function render()
    {
        return view('livewire.admin.work-program.work-program-create');
    }
}
