<?php

namespace App\Http\Livewire\Admin\Clients;

use App\Models\User;
use Livewire\Component;

class ClientsCreate extends Component
{
    public $registrarPor;

    //Users
    public $foto, $numero_de_cliente, $puesto, $name, $email, $password, $estatus, $area, $cost_center_id, $company, $razonsocial, $fecha_de_ingreso, $rfc, $domicilio, 
    $ciudad, $estado, $codigo_postal, $namerep, $tipocliente, $namecontacto, $email_contacto, $código_del_país, $número_de_teléfono, $namecobranza, $emailcobranza;

    public function rules(){
        
        $array = [];
        //User
        $array['foto'] = 'nullable|image|mimes:jpeg,jpg,png|max:5048';
        $array['name'] = 'required|string|max:255';
        $array['email'] = 'required|string|email|max:255';

        //work
        $array['numero_de_cliente'] = 'required|numeric|max:999999999|unique|clients,numero_de_cliente';
        $array['fecha_de_ingreso'] = 'nullable|date|date_format:Y-m-d';
        $array['puesto'] = 'nullable|string|max:255';
        $array['area'] = 'required|string|max:255';

        if ($this->registrarPor == 'password') {
            $array['password'] = 'required|confirmed';
        }
        return $array;

    }

    protected $messages = [
        'name.*.required' => 'el nombre es obligatorio'
    ];

    public function save(){

        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
        ]);

    }

    public function render()
    {
        return view('livewire.admin.clients.clients-create');
    }
}
