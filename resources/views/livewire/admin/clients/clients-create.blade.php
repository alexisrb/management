<div class="py-4">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Nuevo Cliente</li>
        </ol>
    </nav>
    <div class="card">
        <div class="card-header bg-green">
            <h5 class="text-center my-2">{{$name}}</h5>
        </div>
        <div class="card-body">
            <form>
                <div class="g-3">
                    {{--Foto--}}
                    <div class="row rounded border  mb-3">
                        <div class="bg-red rounded-left">
                            <div class="m-3">
                                <div class="my-auto"><i class="fas fa-image"></i></div>
                            </div>
                        </div>
                        <div class="col m-2">
                            <div class="border-bottom">
                                <h5 class="py-1 text-center">Foto</h5>
                            </div>
                            <div class="custom-file mt-3 pt-3">
                                <input type="file" class="custom-file-input" lang="es" wire:model="foto" accept="image/*">
                                <label class="custom-file-label" for="customFileLang">Selecciona una foto</label>
                                @error('foto') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>

                        </div>
                    </div>
                    {{--Pincel--}}
                    <div class="row rounded border mb-4">
                        <div class="bg-blue rounded-left">
                            <div class="m-3">
                                <div class="my-auto"><i class="fas fa-pencil-alt"></i></div>
                            </div>
                        </div>
                        <div class="col m-2">
                            <div class="border-bottom">
                                <h5 class="py-1 text-center">Datos del Cliente</h5>
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
                                        {{ __('Razon Social') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="razonsocial" class="form-control" wire:model="razonsocial" placeholder="Ingrese la Razon Social">
                                    @error('razonsocial') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">
                                        {{ __('Fecha de ingreso') }}
                                    </label>
                                    <input type="date" id="fecha_de_ingreso" class="form-control" wire:model="fecha_de_ingreso" placeholder="Ingrese la fecha de ingreso">
                                    @error('fecha_de_ingreso') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">
                                        {{ __('RFC') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="rfc" class="form-control" wire:model="rfc" placeholder="Ingrese el RFC" oninput="this.value = this.value.toUpperCase()">
                                    @error('rfc') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label class="col-form-label">
                                        {{ __('Domicilio') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="domicilio" class="form-control" wire:model="domicilio" placeholder="Ingrese el Domicilio">
                                    @error('domicilio') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label class="col-form-label">
                                        {{ __('Ciudad') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="ciudad" class="form-control" wire:model="ciudad" placeholder="Ingrese la Ciudad">
                                    @error('ciudad') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label class="col-form-label">
                                        {{ __('Estado') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="estado" class="form-control" wire:model="estado" placeholder="Ingrese el Estado">
                                    @error('estado') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label class="col-form-label">
                                        {{ __('Codigo Postal') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="codigo_postal" class="form-control" wire:model="codigo_postal" placeholder="Ingrese el Codigo Postal">
                                    @error('codigo_postal') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--Representante Legal--}}
                    <div class="row rounded border mb-4">
                        <div class="bg-red rounded-left">
                            <div class="m-3">
                                <div class="my-auto"><i class="fas fa-pencil-alt"></i></div>
                            </div>
                        </div>
                        <div class="col m-2">
                            <div class="border-bottom">
                                <h5 class="py-1 text-center">Representante Legal</h5>
                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <label class="col-form-label">
                                        {{ __('Nombre del Representante') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="namerep" class="form-control" wire:model="namerep" placeholder="Ingrese el nombre">
                                    @error('namerep') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">
                                        {{ __('Tipo de Cliente') }}
                                    </label>
                                    <select class="form-control" id="tipocliente" wire:model="tipocliente">
                                        <option value="">Selecciona una opción</option>
                                        <option value="Publico">Publico</option>
                                        <option value="Privado">Privado</option>
                                        <option value="Extranjero">Extranjero</option>
                                        <option value="intercompania">Intercompania</option>
                                    </select>
                                    @error('tipocliente') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>                        
                            </div>
                           
                            
                        </div>
                    </div>

                    {{--Contacto tecnico--}}
                    <div class="row rounded border mb-4">
                        <div class="bg-gray rounded-left">
                            <div class="m-3">
                                <div class="my-auto"><i class="fas fa-pencil-alt"></i></div>
                            </div>
                        </div>
                        <div class="col m-2">
                            <div class="border-bottom">
                                <h5 class="py-1 text-center">Conctacto Tecnico</h5>
                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <label class="col-form-label">
                                        {{ __('Nombre completo') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="namecontacto" class="form-control" wire:model="namecontacto" placeholder="Ingrese el nombre del contacto">
                                    @error('namecontacto') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">
                                        {{ __('Correo') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="email_contacto" class="form-control" wire:model="email_contacto" placeholder="Ingrese el correo">
                                    @error('email_contacto') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12">
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
                            </div>
                           
                            
                        </div>
                    </div>

                    {{--Contacto de Cobranza--}}
                    <div class="row rounded border mb-4">
                        <div class="bg-gray rounded-left">
                            <div class="m-3">
                                <div class="my-auto"><i class="fas fa-pencil-alt"></i></div>
                            </div>
                        </div>
                        <div class="col m-2">
                            <div class="border-bottom">
                                <h5 class="py-1 text-center">Conctacto Cobranza</h5>
                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <label class="col-form-label">
                                        {{ __('Nombre completo') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="namecobranza" class="form-control" wire:model="namecobranza" placeholder="Ingrese el nombre del contacto">
                                    @error('namecobranza') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">
                                        {{ __('Correo') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="emailcobranza" class="form-control" wire:model="emailcobranza" placeholder="Ingrese el correo">
                                    @error('emailcobranza') <span class="text-danger error">{{ $message }}</span>@enderror
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
                                </div>--}}
                            </div>
                           
                            
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-footer">
            <div class="text-center">
                <button type="button" wire:loading.attr="disabled" wire:click.prevent="save()" wire:target="save, foto" class="btn btn-success">Guardar</button>
            </div>
        </div>
    </div>
</div>

@push('css')
    <style>
    .select2 {
        width:100%!important;
    }
    </style>
@endpush

@push('js')
    <script>
        
    </script>
@endpush

<script>
        // JavaScript definido directamente en el archivo Blade
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("password");
            var passwordIcon = document.querySelector(".password-icon");

                if (passwordInput.type === "password") {
                    passwordInput.type = "text";
                    passwordIcon.innerHTML = '<i class="fas fa-eye-slash"></i>';
                } else {
                    passwordInput.type = "password";
                    passwordIcon.innerHTML = '<i class="fas fa-eye"></i>';
                }
                
        }
        function togglePasswordVisibilitys() {
            var passwordInput = document.getElementById("passwords");
            var passwordIcon = document.querySelector(".password-icon");

                if (passwordInput.type === "passwords") {
                    passwordInput.type = "texts";
                    passwordIcon.innerHTML = '<i class="fas fa-eye-slash"></i>';
                } else {
                    passwordInput.type = "passwords";
                    passwordIcon.innerHTML = '<i class="fas fa-eye"></i>';
                }
                
        }
        // Agregar otras funciones o lógica aquí
</script>


@push('css')
    <style>
    .select2 {
        width:100%!important;
    }
    </style>
@endpush

@push('js')
    <script>
        $(document).ready(function () {
            $('#companies').select2({
                theme: 'bootstrap4'
            });

            $('#companies').on('change', function (e) {
                var data = $('#companies').select2("val");
            @this.set('company', data);
            });

            $('#cost_centers').select2({
                theme: 'bootstrap4'
            });

            $('#cost_centers').on('change', function (e) {
                var data = $('#cost_centers').select2("val");
            @this.set('cost_center', data);
            });

            $('#users').select2({
                theme: 'bootstrap4'
            });

            $('#users').on('change', function (e) {
                var data = $('#users').select2("val");
            @this.set('encargado', data);
            });
            /////

            $('#days').select2({
                theme: 'bootstrap4'
            });

            $('#days').on('change', function (e) {
                var data = $('#days').select2("val");
            @this.set('days', data);
            });
        });
    </script>
@endpush
