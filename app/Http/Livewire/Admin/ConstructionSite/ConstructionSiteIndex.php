<?php

namespace App\Http\Livewire\Admin\ConstructionSite;

use Livewire\Component;

class ConstructionSiteIndex extends Component
{
    public $user;
    public function render()
    {
        return view('livewire.admin.construction-site.construction-site-index');
    }
}
