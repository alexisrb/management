<?php

namespace App\Http\Livewire\Admin\Users;
use  App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class UserCreate extends Component
{
    use WithPagination;

    public $registrarPor;

    //Users
    public $foto, $numero_de_empleado, $puesto, $name, $email, $password, $estatus, $area, $cost_center_id, $company;

    public function rules(){
        
        $array = [];
        //User
        $array['foto'] = 'nullable|image|mimes:jpeg,jpg,png|max:5048';
        $array['name'] = 'required|string|max:255';
        $array['email'] = ['required', 'string', 'email', 'max:255', Rule::unique(User::class)];

        //work
        $array['numero_de_empleado'] = 'required|numeric|max:999999999|unique|users,numero_de_empleado';
        $array['fecha_de_ingreso'] = 'nullable|date|date_format:Y-m-d';
        $array['puesto'] = 'nullable|string|max:255';
        $array['area'] = 'required|string|max:255';

        if ($this->registrarPor == 'password') {
            $array['password'] = 'required|confirmed';
        }
        return $array;
    }

    public function render()
    {
        return view('livewire.admin.users.user-create');
    }
}
