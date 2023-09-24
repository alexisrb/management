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

    public $documento_de_licitacion_uno, $documento_de_licitacion_dos, $documento_de_licitacion_tres;

    public function rules(){
        
        //users
        $array['name'] = 'required|string|max:255';
        $array['email'] = ['required', 'string', 'email', 'max:255', Rule::unique(User::class)];

        //Docs
        $array['documento_de_licitacion_uno'] = ['nullable','mimes:jpg,jpeg,png,svg,pdf','max:6000'];
        $array['documento_de_licitacion_dos'] = ['nullable','mimes:jpg,jpeg,png,svg,pdf','max:6000'];
        $array['documento_de_licitacion_tres'] = ['nullable','mimes:jpg,jpeg,png,svg,pdf','max:6000'];
        

    }

    public function save(){

        $this->validate();
        //DOCS
        if($this->documento_de_licitacion_uno){
            $documento_de_licitacion_uno = $this->documento_de_licitacion_uno->store('documento_de_licitacion_uno');
        }else{
            $documento_de_licitacion_uno = null;
        }

        if($this->documento_de_licitacion_dos){
            $documento_de_licitacion_dos = $this->documento_de_licitacion_dos->store('documento_de_licitacion_dos');
        }else{
            $documento_de_licitacion_dos = null;
        }

        if(
        $this->documento_de_licitacion_tres){
            $documento_de_licitacion_tres = $this->documento_de_licitacion_tres->store('documento_de_licitacion_tres');
        }else{
            $documento_de_licitacion_tres = null;
        }

        $document = UserDocuments::create([
            'documento_de_licitacion_uno' => $documento_de_licitacion_uno,
            'documento_de_licitacion_dos' => $documento_de_licitacion_dos,
            'documento_de_licitacion_tres' => $documento_de_licitacion_tres,
            
        ]);

        //USER
        $user = User::create([
            
            'name' => $this->name,
            'email' => $this->email,
            'número_de_empleado' => $this->número_de_empleado,

        ]);
        session()->flash('message', 'Licitacion guardada satisfactoriamente');
        return redirect(route('admin.licitaciones.index'));
    }

    public function render()
    {
        return view('livewire.admin.licitaciones.licitaciones-create');
    }
}
