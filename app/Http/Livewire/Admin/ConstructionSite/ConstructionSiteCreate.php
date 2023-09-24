<?php

namespace App\Http\Livewire\Admin\ConstructionSite;

use Livewire\Component;

class ConstructionSiteCreate extends Component
{
    public $name;
    public function render()
    {
        return view('livewire.admin.construction-site.construction-site-create');
    }
}
