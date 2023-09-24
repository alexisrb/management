<div class="py-4">
    <div class="card">
        <div class="card-header bg-green">
            <h5 class="text-center my-2">{{$name}}</h5>
        </div>
        <div class="card-body">
            <form>
                <div class="row rounded border mb-4">
                    <div class="bg-blue rounded-left">
                        <div class="m-3">
                            <div class="my-auto"><i class="fa fa-file"></i></div>
                        </div>
                    </div>
                    <div class="col m-2">
                        <div class="border-bottom">
                            <h5 class="py-1 text-center">Datos de la Obra / Proyecto</h5>
                        </div>
                        <div class="row">
                            <div class="form-group col-12">
                                <label class="col-form-label">
                                    {{ __('Nombre de la Obra') }}
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" id="nameobra" class="form-control" wire:model="nameobra" placeholder="Ingrese el nombre">
                                @error('nameobra') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            
                            <div class="form-group col-12">
                                <div wire:ignore>
                                    <label class="col-form-label">
                                        {{ __('Gerente de Obra') }}
                                    </label>
                                    <select class="form-control" id="users" wire:model="encargado">
                                        <option value="">Selecciona una opción</option>
                                        {{--@foreach($users as $encargado)
                                            <option value="{{ $encargado->id}}">{{ $encargado->name }}</option>
                                        @endforeach--}}
                                    </select>
                                </div>
                                @error('encargado') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group col-12">
                                <label class="col-form-label">
                                    {{ __('Centro de Costo') }}
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" id="costcenter" class="form-control" wire:model="costcenter" placeholder="Ingrese el centro de costo">
                                @error('costcenter') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group col-12">
                                <div>
                                    <label class="col-form-label">
                                        {{ __('Cliente') }}
                                    </label>
                                    <select class="form-control" id="cliente_empresa" wire:model="cliente_empresa">
                                        <option value="">Selecciona una opción</option>
                                        {{--@foreach($empresa as $dependencia)
                                            <option value="{{ $dependencia->id}}">{{ $dependencia->empresa }}</option>
                                        @endforeach--}}
                                    </select>
                                </div>
                                @error('cliente_empresa') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group col-12">
                                <label class="col-form-label">
                                    {{ __('Domicilio de la Obra') }}
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" id="domicilio_obra" class="form-control" wire:model="domicilio_obra" placeholder="Ingrese el domicilio de la obra">
                                @error('domicilio_obra') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <label class="col-form-label">
                                    {{ __('Ciudad') }}
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" id="ciudad" class="form-control" wire:model="ciudad" placeholder="Ingrese la ciudad">
                                @error('ciudad') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <label class="col-form-label">
                                    {{ __('Estado') }}
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" id="estado" class="form-control" wire:model="estado" placeholder="Ingrese el estado">
                                @error('estado') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>                      
                        </div>
                    </div>
                    
                </div>
                <div class="row rounded border mb-4">
                    <div class="bg-green rounded-left">
                        <div class="m-3">
                            <div class="my-auto"><i class="fa fa-unlock"></i></div>
                        </div>
                    </div>
                    <div class="col m-2">
                        <div class="border-bottom">
                            <h5 class="py-1 text-center">Metodos de Cobranzas</h5>
                        </div>
                        <div class="row">
                            <div class="form-group col-10 col-md-6">
                                <label class="col-form-label">
                                    {{ __('Metodo de Cobranza') }}
                                </label>
                                <select class="form-control" id="cobranza" wire:model="cobranza">
                                    <option value="">Selecciona una opción</option>
                                    <option value="Semanal">8 de cada mes</option>
                                    <option value="Quincenal">15 de cada mes</option>
                                    <option value="Mensual">30 de cada mes</option>
                                </select>
                                @error('cobranza') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group col-10 col-md-6">
                                
                                    <label class="col-form-label">
                                        {{ __('Metodo de Estimaciones') }}
                                        
                                    </label>
                                    <select class="form-control" id="estimaciones" wire:model="estimaciones">
                                        <option value="">Selecciona una opción</option>
                                        <option value="Semanal">8 de cada mes</option>
                                        <option value="Quincenal">15 de cada mes</option>
                                        <option value="Mensual">30 de cada mes</option>
                                    </select>
                                
                                @error('') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                        
                            <div class="form-group col-10 col-md-6">
                                
                                    <label class="col-form-label">
                                        {{ __('Facturacion') }}
                                        
                                    </label>
                                    <select class="form-control" id="facturacion" wire:model="facturacion">
                                        <option value="">Selecciona una opción</option>
                                        <option value="Semanal">8 de cada mes</option>
                                        <option value="Quincenal">15 de cada mes</option>
                                        <option value="Mensual">30 de cada mes</option>
                                    </select>
                                
                                @error('facturacion') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row rounded border mb-4">
                    <div class="bg-primary rounded-left">
                        <div class="m-3">
                            <div class="my-auto"><i class="fa fa-unlock"></i></div>
                        </div>
                    </div>
                    <div class="col m-2">
                        <div class="border-bottom">
                            <h5 class="py-1 text-center">Subida de Archivos</h5>
                        </div>
                        <div class="row">
                            <div class="form-group col-12 col-sm-6 col-md-4 col-xl-4">
                                <label class="col-form-label">
                                    {{ __('Adjuntar Archivo / Proyecto Ejecutivo') }}
                                    {{-- <span class="text-danger">*</span> --}}
                                </label>
                                <input type="file" class="form-control-file" id="documento_de_proyecto" wire:model.defer="documento_de_proyecto">
                                @error('documento_de_proyecto') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group col-12 col-sm-6 col-md-4 col-xl-4">
                                <label class="col-form-label">
                                    {{ __('Ingrese el Contrato firmado') }}
                                    {{-- <span class="text-danger">*</span> --}}
                                </label>
                                <input type="file" class="form-control-file" id="documento_del_contrato" wire:model.defer="documento_del_contrato">
                                @error('documento_del_contrato') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group col-12 col-sm-6 col-md-4 col-xl-4">
                                <label class="col-form-label">
                                    {{ __('Adjuntar Facturas') }}
                                    {{-- <span class="text-danger">*</span> --}}
                                </label>
                                <input type="file" class="form-control-file" id="documento_de_factura" wire:model.defer="documento_de_factura">
                                @error('documento_de_factura') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-center">
                        <button type="button" wire:loading.attr="disabled" wire:click.prevent="save()" class="btn btn-success">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    
</div>
