<?php

namespace App\Http\Livewire\Admin\Facturasxc;

use App\Models\User;
use App\Models\Company;
use App\Models\UserDocuments;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;


use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;


class FacturasxcCreate extends Component
{
    use WithFileUploads;

    //Users
    public $name, $email, $número_de_empleado, $num_factura, $número_de_factura, $domicilio, $obra, $fecha_de_registro;
    //Documents
    public $documento_de_factura, $documento_de_factura_dos, $documento_de_factura_tres, $documento_de_factura_cuatro;

    public function rules(){
        $array = [];

        //users
        $array['name'] = 'required|string|max:255';
        $array['email'] = ['required', 'string', 'email', 'max:255', Rule::unique(User::class)];

        $array['curp'] = ['required', 'string', 'min:18', 'max:18', /*'regex:/^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/',*/ 'unique:users,curp'];
        $array['fecha_de_nacimiento'] = 'nullable|date|date_format:Y-m-d';
        $array['número_de_inscripción_al_imss'] = 'nullable|string|max:255';
        $array['rfc'] = ['required', /*'regex:/^([A-ZÑ&]{3,4}) ?(?:- ?)?(\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])) ?(?:- ?)?([A-Z\d]{2})([A\d])$/',*/ 'string','max:255'];
        $array['número_del_infonavit'] = 'nullable|string|max:255';

        //Work
        $array['número_de_empleado'] = 'required|numeric|max:99999999|unique:users,número_de_empleado';
        $array['fecha_de_ingreso'] = 'nullable|date|date_format:Y-m-d';
        $array['puesto'] = 'nullable|string|max:255';
        $array['tipo_de_puesto'] = 'nullable|string|max:255';
        $array['company'] = ['required'];
        $array['cost_center'] = ['nullable'];

        //Docs
        $array['documento_de_identificación_oficial'] = ['nullable','mimes:jpg,jpeg,png,svg,pdf','max:6000'];
        $array['documento_del_comprobante_de_domicilio'] = ['nullable','mimes:jpg,jpeg,png,svg,pdf','max:6000'];
        $array['documento_de_no_antecedentes_penales'] = ['nullable','mimes:jpg,jpeg,png,svg,pdf','max:6000'];
        

        //Role
        $array['role'] = ['required'];

        return $array;
    }

    public function save(){

        $this->validate();
        //DOCS
        if($this->documento_de_identificación_oficial){
            $documento_de_identificación_oficial = $this->documento_de_identificación_oficial->store('identificaciones_oficiales');
        }else{
            $documento_de_identificación_oficial = null;
        }

        if($this->documento_del_comprobante_de_domicilio){
            $documento_del_comprobante_de_domicilio = $this->documento_del_comprobante_de_domicilio->store('comprobantes_de_domicilio');
        }else{
            $documento_del_comprobante_de_domicilio = null;
        }

        if(
        $this->documento_de_no_antecedentes_penales){
            $documento_de_no_antecedentes_penales = $this->documento_de_no_antecedentes_penales->store('documentos_de_no_antecedentes_penales');
        }else{
            $documento_de_no_antecedentes_penales = null;
        }

        $document = UserDocuments::create([
            'documento_de_identificación_oficial' => $documento_de_identificación_oficial,
            'documento_del_comprobante_de_domicilio' => $documento_del_comprobante_de_domicilio,
            'documento_de_no_antecedentes_penales' => $documento_de_no_antecedentes_penales,
            
        ]);

        //USER
        $user = User::create([
            
            'name' => $this->name,
            'email' => $this->email,
            
            'número_de_empleado' => $this->número_de_empleado,
            'fecha_de_ingreso' => $this->fecha_de_ingreso,
            'company_id' => $this->company,
            
            'puesto' => $this->puesto,
            'tipo_de_puesto' => $this->tipo_de_puesto,
            'rh' => $this->rh,
            'tipo' => 'Empleado',
            
            //'password' => Hash::make($this->password),
            'estatus' => $this->estatus,
            
            'document_id' => $document->id,
            'slug' => Str::random(30)
        ]);

        session()->flash('message', 'Factura guardada satisfactoriamente');
        return redirect(route('admin.facturasxc.index'));

    }


    public function render()
    {
        return view('livewire.admin.facturasxc.facturasxc-create');
    }
}
