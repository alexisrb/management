<div class="py-4">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            @can('admin.users.index')
                <li class="breadcrumb-item"><a href="{{route('admin.users.index')}}">Todos los empleados</a></li>
            @endcan
            <li class="breadcrumb-item active">Nuevo empleado</li>
        </ol>
    </nav>
    <div class="card">
        <div class="card-header bg-primary">
            <h5 class="text-center my-2">{{$name}}</h5>
        </div>
        <div class="card-body">
            <form>
                <div class="g-3">
                    {{--Foto--}}
                    <div class="row rounded border  mb-3">
                        <div class="bg-gray rounded-left">
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
                            <div>
                                {{-- <div wire:loading wire:target="foto">
                                    <button class="btn btn-white mt-3" type="button" disabled>
                                        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                        Cargando...
                                    </button>
                                </div> --}}
                                {{-- <div class="pt-3">
                                    @if($foto)
                                        <img class="img-fluid rounded" style="display: block; margin-left: auto; margin-right: auto;" src="{{$foto->temporaryurl()}}">
                                    @endif
                                </div> --}}
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
                                        {{ __('Fecha de nacimiento') }}
                                    </label>
                                    <input type="date" id="fecha_de_nacimiento" class="form-control" wire:model="fecha_de_nacimiento" placeholder="Ingrese la fecha de nacimiento">
                                    @error('fecha_de_nacimiento') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">
                                        {{ __('Correo') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="correo" class="form-control" wire:model="email" placeholder="Ingrese el correo">
                                    @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    {{--Trabajo--}}
                    <div class="row rounded border mb-4">
                        <div class="bg-gray rounded-left">
                            <div class="m-3">
                                <div class="my-auto"><i class="fas fa-pencil-alt"></i></div>
                            </div>
                        </div>
                        <div class="col m-2">
                            <div class="border-bottom">
                                <h5 class="py-1 text-center">Datos del trabajo</h5>
                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <label class="col-form-label">
                                        {{ __('Número de empleado') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="number" id="número_de_empleado" class="form-control" wire:model="número_de_empleado" placeholder="Ingrese el número de empleado">
                                    @error('número_de_empleado') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">
                                        {{ __('Fecha de ingreso') }}
                                    </label>
                                    <input type="date" id="fecha_de_ingreso" class="form-control" wire:model="fecha_de_ingreso" placeholder="Ingrese la fecha de ingreso">
                                    @error('fecha_de_ingreso') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label class="col-form-label">
                                        {{ __('Puesto') }}
                                    </label>
                                    <input type="text" id="puesto" class="form-control" wire:model="puesto" placeholder="Ingrese el puesto">
                                    @error('puesto') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>                                
                                <div class="form-group col-12">
                                        <div>
                                            <label class="col-form-label">
                                                {{ __('Centro de costos') }}
                                            </label>
                                            <select class="form-control" id="cost_centers" wire:model="cost_center">
                                                <option value="">Selecciona una opción</option>
                                                
                                            </select>
                                        </div>
                                        @error('cost_center') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                
                                <div class="form-group col-12">
                                    <div wire:ignore>
                                        <label class="col-form-label">
                                            {{ __('Área / Proyecto') }}
                                        </label>
                                        <select class="form-control" id="área" wire:model="área">
                                            <option value="">Selecciona una opción</option>
                                           
                                        </select>
                                    </div>
                                    @error('área') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                
                            </div>
                           
                            
                        </div>
                    </div>
                    
                    {{--Rol--}}
                   
                        <div class="row rounded border mb-4">
                            <div class="bg-purple rounded-left">
                                <div class="m-3">
                                    <div class="my-auto"><i class="fa fa-unlock"></i></div>
                                </div>
                            </div>
                            <div class="col m-2">
                                <div class="border-bottom">
                                    <h5 class="py-1 text-center">Rol</h5>
                                </div>
                                <div>
                                    <div class="form-group">
                                        <label class="col-form-label">
                                            {{ __('Rol') }}
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-control" id="role" wire:model="role">
                                            <option value="">Selecciona una opción</option>
                                            <option value="administracion">Administracion</option>
                                            <option value="jefe_Obra">Jefe de Obra</option>
                                            <option value="jefe_estimaciones">Jefe de Estimaciones</option>
                                        </select>
                                        @error('role') <span class="text-danger error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div>
                                        <label class="col-form-label">
                                            {{ __('Estatus') }}
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-control" id="estatus" wire:model="estatus">
                                            <option value="Activo">Activo</option>
                                            <option value="Inactivo">Inactivo (No se le generará inasistencias)</option>
                                            <option value="Baja definitiva">Baja definitiva (Ya no elabora)</option>
                                        </select>
                                    </div>
                                    @error('estatus') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                            </div>
                        </div>
                    
                    {{--Contaseña--}}
                    <div class="row rounded border">
                        <div class="bg-gray rounded-left">
                            <div class="m-3">
                                <div class="my-auto"><i class="fa fa-key"></i></div>
                            </div>
                        </div>
                        <div class="col m-2">
                            <div class="border-bottom">
                                <h5 class="py-1 text-center">Contraseña</h5>
                            </div>
                            <div>
                                <div class="row">
                                    
                                    
                                        <div class="form-group col-12 col-md-6 col-sm-6">
                                            <label class="col-form-label">
                                                {{ __('Contraseña') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input id="password" type="password" class="form-control" wire:model="password" required autocomplete="new-password" placeholder="Ingrese la contraseña del empleado">
                                            <span class="password-icon" onclick="togglePasswordVisibility()" style="position: absolute; top: 75%; right: 10px; transform: translateY(-50%); cursor: pointer;" >
                                                <i class="fas fa-eye"></i>
                                            </span> 
                                            @error('password') <span class="text-danger error">{{ $message }}</span>@enderror

                                        </div>
                                        <div class="form-group col-12 col-md-6 col-sm-6">
                                            <label class="col-form-label">
                                                {{ __('Confirmar contraseña') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input id="passwords" type="password" class="form-control" wire:model="password_confirmation" required autocomplete="new-password" placeholder="Nuevamente ingrese la contraseña del empleado">
                                            <span class="password-icon" onclick="togglePasswordVisibilitys()" style="position: absolute; top: 75%; right: 10px; transform: translateY(-50%); cursor: pointer;" >
                                                <i class="fas fa-eye"></i>
                                            </span> 
                                            @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
                                        </div>
                                    
                                </div>
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