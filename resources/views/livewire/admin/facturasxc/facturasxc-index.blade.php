<div class="pt-4">
    <div class="card">
        <div class="card-header bg-info">
        <h5 class="text-center my-2">Todas las Facturas por Cobrar</h5>
        </div>
        <div class="card-header">
            <div class="row">
                <div class="col-xl-8 col-lg-7 col-md-7 col-sm-7">
                    <div class="input-group my-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></div>
                        </div>
                        <input wire:model="search" class="form-control" placeholder="Ingrese el nombre de la Factura">
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                    <div class="form-group my-2" wire:model="order">
                        <select class="form-control" id="orderFormControlSelect">
                        <option value="1">Ordernar por más reciente</option>
                        <option value="2">Ordernar por más antiguo</option>
                        </select>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                    <a type="button" class="btn btn-success" href="{{ route('admin.facturasxc.create', $user) }}">Crear</a>
                </div>
            </div>
        </div>


    </div>
    <div class="card-body p-0 table-responsive">
        <!--aqui va un if (variable - Count()) -->
            <table class="table table-hover text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre de la Licitacion</th>
                        <th>add</th>
                        <th>add</th>
                        <th>add</th>
                        
                        @can('')
                            <th></th>
                        @endcan
                        @can('')
                            <th></th>
                        @endcan
                        @can('')
                            <th></th>
                        @endcan
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        <!--else-->
            <div class="my-5">
                <p class="text-center text-danger"><strong>Sin registro</strong></p>
            </div>
        <!--endif-->
    </div>
    


</div>