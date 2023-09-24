<?php

namespace App\Http\Livewire\Admin\Obra;

use Livewire\Component;
use App\Models\User;
use App\Models\Company;
use App\Models\UserDocuments;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;


use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Livewire\WithFileUploads;


class ObraCreate extends Component
{
    use WithFileUploads;   

    public $users, $nameobra, $name, $encargado, $user, $costcenter, $cliente_empresa, $domicilio_obra, $cobranza, $estimaciones, $facturacion;

    public function rules(){
        $array =[];

        $array['nameobra'] = 'required|string|max:255';
        $array['empresa'] = 'required|string|max:255';
        $array['domicilio_obra'] = 'required|string|max:255';
        $array['ciudad'] = 'required|string|max:255';
        $array['estado'] = 'required|string|max:255';
        
        $array['costcenter'] = ['nullable'];
    }

    public function render()
    {
        return view('livewire.admin.obra.obra-create');
    }
}
