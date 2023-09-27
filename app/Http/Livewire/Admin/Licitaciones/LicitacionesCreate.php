<?php

namespace App\Http\Livewire\Admin\Licitaciones;
use Livewire\Component;
use App\Models\User;
use App\Models\Company;
use App\Models\UserDocuments;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;


use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Livewire\WithFileUploads;

class LicitacionesCreate extends Component
{

    use WithFileUploads;

    public $user, $name, $email, $número_de_empleado, $fecha_de_registro, $licitacion;

    public function save(){
        dd('entre');
    }

    public function render()
    {
        return view('livewire.admin.licitaciones.licitaciones-create');
    }
}
