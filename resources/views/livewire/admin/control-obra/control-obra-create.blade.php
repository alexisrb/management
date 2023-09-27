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
                    
                            {{--<div class="form-group col-12">
                                <label class="col-form-label">
                                    {{ __('Whatsapp') }}
                                </label>
                                <div class="row">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text" id="basic-addon1">+</span>
                                            </div>
                                            <input type="number" id="código_del_país" class="form-control" wire:model="código_del_país" placeholder="Código del país">
                                            @error('código_del_país') <span class="text-danger error">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <input type="number" id="número_de_teléfono" class="form-control" wire:model="número_de_teléfono" placeholder="Número de teléfono">
                                        @error('número_de_teléfono') <span class="text-danger error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-12">
                                <label class="col-form-label">
                                    {{ __('CURP') }}
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" id="curp" class="form-control" wire:model="curp" placeholder="Ingrese el CURP" oninput="this.value = this.value.toUpperCase()">
                                @error('curp') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <label class="col-form-label">
                                    {{ __('Número de inscripción al IMSS') }}
                                </label>
                                <input type="text" id="número_de_inscripción_al_imss" class="form-control" wire:model="número_de_inscripción_al_imss" placeholder="Ingrese el número de inscripción al IMSS">
                                @error('número_de_inscripción_al_imss') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            
                            <div class="form-group col-12">
                                <label class="col-form-label">
                                    {{ __('Número del infonavit') }}
                                </label>
                                <input type="text" id="número_del_infonavit" class="form-control" wire:model="número_del_infonavit" placeholder="Ingrese el número del infonavit">
                                @error('número_del_infonavit') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>--}}
                        </div>
                    </div>
                </div>
                {{--Resumen de Estimacion --}}
                <div class="row rounded border mb-4">
                    <div class="bg-lime rounded-left">
                        <div class="m-3">
                            <div class="my-auto"><i class="fa fa-tag"></i></div>
                        </div>
                    </div>
                    <div class="col m-2">
                        <div class="border-bottom">
                            <h5 class="py-1 text-center">Resumen del Control de Obra</h5>
                        </div>
                        <div class="row">
                            <div class="form-group col-12 col-md-6">
                                <label class="col-form-label">
                                    {{ __('Folio de la Estimación') }}
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" id="número_de_estimación" class="form-control" wire:model="número_de_estimación" placeholder="Ingrese su numero de empleado">
                                @error('número_de_estimación') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group col-12">
                                <label class="col-form-label">
                                    {{ __('Obra') }}
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" id="obra" class="form-control" wire:model="obra" placeholder="Ingrese el nombre de la obra">
                                @error('obra') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <label class="col-form-label">
                                    {{ __('Contrato') }}
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" id="contrato" class="form-control" wire:model="contrato" placeholder="Ingrese el Objeto del Contrato">
                                @error('contrato') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <label class="col-form-label">
                                    {{ __('Cliente') }}
                                </label>
                                <input type="text" id="cliente" class="form-control" wire:model="cliente" placeholder="Ingrese el nombre de la empresa">
                                @error('cliente') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <label class="col-form-label">
                                    {{ __('Periodo del registro') }}
                                </label>
                                <input type="date" id="fecha_de_registro" class="form-control" wire:model="fecha_de_registro" placeholder="Ingrese el periodo">
                                @error('fecha_de_registro') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <label class="col-form-label">
                                    {{ __('RFC') }}
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" id="rfc" class="form-control" wire:model="rfc" placeholder="Ingrese el RFC" oninput="this.value = this.value.toUpperCase()">
                                @error('rfc') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            
                            <div class="form-group col-12 col-md-6">
                                <label class="col-form-label">
                                    {{ __('IMPORTE DE LA ESTIMACIÓN') }}
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" id="importe_estimacion" class="form-control" wire:model="importe_estimacion" placeholder="Ingrese el importe de estimacion">
                                @error('importe_estimacion') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group col-12 ">
                                <label class="col-form-label">
                                    {{ __('SUBTOTAL') }}
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" id="subtotal" class="form-control" wire:model="subtotal" placeholder="Ingrese el subtotal ">
                                @error('subtotal') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <label class="col-form-label">
                                    {{ __('AMORTIZACIÓN DEL ANTICIPO') }}
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" id="amortizacion_anticipo" class="form-control" wire:model="amortizacion_anticipo" placeholder="Ingrese el anticipo">
                                @error('amortizacion_anticipo') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group col-12 ">
                                <label class="col-form-label">
                                    {{ __('Inspección y vigilancia para la SFP') }}
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" id="total_monto" class="form-control" wire:model="total_monto" placeholder="Ingrese su total del monto">
                                @error('total_monto') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group col-12 ">
                                <label class="col-form-label">
                                    {{ __('Total del Monto') }}
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" id="total_monto" class="form-control" wire:model="total_monto" placeholder="Ingrese su total del monto">
                                @error('total_monto') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                        </div>
                    </div>
                </div>
                {{--Documentos--}}
                <div class="row rounded border mb-4">
                    <div class="bg-green rounded-left">
                        <div class="m-3">
                            <div class="my-auto"><i class="fa fa-upload"></i></div>
                        </div>
                    </div>
                    <div class="col m-2">
                        <div class="border-bottom">
                            <h5 class="py-1 text-center">Documentos</h5>
                        </div>
                        <div class="row">
                            <div class="form-group col-12 col-sm-6 col-md-4 col-xl-4">
                                <label class="col-form-label">
                                    {{ __('Archivo de Estimación') }}
                                    {{-- <span class="text-danger">*</span> --}}
                                </label>
                                <input type="file" class="form-control-file" id="documento_de_estimacion" wire:model.defer="documento_de_estimacion">
                                @error('documento_de_estimacion') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-footer">
            <div class="text-center">
                <button type="button" wire:loading.attr="disabled" wire:click.prevent="save()" wire:target="save, foto, documento_de_identificación_oficial" class="btn btn-success">Guardar</button>
            </div>
        </div>
    </div>
</div>
