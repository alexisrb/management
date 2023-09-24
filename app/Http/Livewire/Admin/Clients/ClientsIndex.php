<?php

namespace App\Http\Livewire\Admin\Clients;

use Livewire\Component;

class ClientsIndex extends Component
{
    public $client;
    public function render()
    {
        return view('livewire.admin.clients.clients-index');
    }
}
