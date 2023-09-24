<div class="py-4">
    <div class="card">
        <div class="card-header bg-green">
            <h5 class="text-center my-2">{{$name}}</h5>
        </div>
        <div class="card-body">
            <form>
                <div class="row rounded border mb-4">
                    <div class="bg-primary rounded-left">
                        <div class="m-3">
                            <div class="my-auto"><i class="fa fa-user"></i></div>
                        </div>
                    </div>
                    <div class="col m-2">
                        <div class="border-bottom">
                            <h5 class="py-1 text-center">Datos del usuario</h5>
                        </div>
                        <div class="row">
                            <div class="form-group col-12">
                                <label class="col-form-label">
                                    {{ __('Nombre completo') }}
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" id="name" class="form-control" wire:model="name" placeholder="Ingrese el nombre">
                                @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group col-12">
                                <label class="col-form-label">
                                    {{ __('Correo') }}
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" id="email" class="form-control" wire:model="email" placeholder="Ingrese el correo">
                                @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <label class="col-form-label">
                                    {{ __('Numero de Empleado') }}
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" id="número_de_empleado" class="form-control" wire:model="número_de_empleado" placeholder="Ingrese su numero de empleado">
                                @error('número_de_empleado') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <label class="col-form-label">
                                    {{ __('Fecha de registro') }}
                                </label>
                                <input type="date" id="fecha_de_registro" class="form-control" wire:model="fecha_de_registro" placeholder="Ingrese la fecha">
                                @error('fecha_de_registro') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group col-12">
                                <label class="col-form-label">
                                    {{ __('Nombre de la Licitación ') }}
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" id="licitacion" class="form-control" wire:model="licitacion" placeholder="Ingrese el nombre de la licitación">
                                @error('licitacion') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            
                           
                        </div>
                    </div>
                </div>
                {{--Documentos--}}
                <div class="row rounded border mb-4">
                    <div class="bg-gray rounded-left">
                        <div class="m-3">
                            <div class="my-auto"><i class="fa fa-file"></i></div>
                        </div>
                    </div>
                    <div class="col m-2">
                        <div class="border-bottom">
                            <h5 class="py-1 text-center">Documentos</h5>
                        </div>
                        <div class="row">
                            <div class="form-group col-12 col-sm-6 col-md-4 col-xl-4">
                                <label class="col-form-label">
                                    {{ __('Licitación 1') }}
                                    {{-- <span class="text-danger">*</span> --}}
                                </label>
                                <input type="file" class="form-control-file" id="documento_de_licitacion_uno" wire:model.defer="documento_de_licitacion_uno">
                                @error('documento_de_licitacion_uno') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group col-12 col-sm-6 col-md-4 col-xl-4">
                                <label class="col-form-label">
                                    {{ __('Licitación 2') }}
                                    {{-- <span class="text-danger">*</span> --}}
                                </label>
                                <input type="file" class="form-control-file" id="documento_de_licitacion_dos" wire:model.defer="documento_de_licitacion_dos">
                                @error('documento_de_licitacion_dos') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group col-12 col-sm-6 col-md-4 col-xl-4">
                                <label class="col-form-label">
                                    {{ __('Licitación 3') }}
                                    {{-- <span class="text-danger">*</span> --}}
                                </label>
                                <input type="file" class="form-control-file" id="documento_de_licitacion_tres" wire:model.defer="documento_de_licitacion_tres">
                                @error('documento_de_licitacion_tres') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-footer">
            <div class="text-center">
                <button type="button" wire:loading.attr="disabled" wire:click.prevent="save()" wire:target="save, foto, documento_de_identificación_oficial, documento_del_comprobante_de_domicilio, documento_de_no_antecedentes_penales, documento_de_la_licencia_de_conducir, documento_de_la_cedula_profesional, documento_de_la_carta_de_pasante, documento_del_curriculum_vitae" class="btn btn-success">Guardar</button>
            </div>
        </div>
    </div>
    
    

</div>
