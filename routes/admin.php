<?php

use App\Http\Controllers\Admin\Accounting\AccountingController;
use App\Http\Controllers\Admin\Advances\AdvancesController;
use App\Http\Controllers\Admin\Clients\ClientController;
use App\Http\Controllers\Admin\ConstCenter\ConstCenterController;
use App\Http\Controllers\Admin\ConstructionSite\ConstructionSiteController;
use App\Http\Controllers\Admin\ControlObra\ControlObraController;
use App\Http\Controllers\Admin\Disbursements\DisbursementsController;
use App\Http\Controllers\Admin\Estimates\EstimateController;
use App\Http\Controllers\Admin\Facturascobradas\FacturacobradaController;
use App\Http\Controllers\Admin\Facturaspacturas\FacturapagadaController;
use App\Http\Controllers\Admin\Facturasxc\FacturaxcController;
use Illuminate\Support\Facades\Route; 

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\Licitaciones\LicitacionController;
use App\Http\Controllers\Admin\LicitacionesController;
use App\Http\Controllers\Admin\Obra\ObraController;
use App\Http\Controllers\Admin\Users\UsersController;
use App\Http\Controllers\Admin\WorkProgram\WorkProgramController;

Route::get('', [HomeController::class, 'index'])->name('admin.index');


//Users
Route::resource('users', UsersController::class)->only(['index', 'create', 'edit', 'show', 'destroy'])->names('admin.users');

//Clientes
Route::resource('client', ClientController::class)->only(['index', 'create', 'edit', 'show', 'destroy'])->names('admin.clients');

//Obra/Proyecto
Route::resource('obras', ObraController::class)->only(['index', 'create', 'edit', 'show', 'destroy'])->names('admin.obra');

//Contabilidad
Route::resource('accounting', AccountingController::class)->only(['index', 'create', 'edit', 'show', 'destroy'])->names('admin.accounting');

//Licitaciones
Route::resource('licitaciones', LicitacionController::class)->only(['index', 'create', 'edit', 'show', 'destroy'])->names('admin.licitaciones');

//Programa de Obra
Route::resource('programwork', WorkProgramController::class)->only(['index', 'create', 'edit', 'show', 'destroy'])->names('admin.work-program');

//Programa de Obra
Route::resource('constructionsite', ConstructionSiteController::class)->only(['index', 'create', 'edit', 'show', 'destroy'])->names('admin.construction-site');

//Programa de Erogaciones
Route::resource('disbursements', DisbursementsController::class)->only(['index', 'create', 'edit', 'show', 'destroy'])->names('admin.disbursements');

//Avances de Obra
Route::resource('advances', AdvancesController::class)->only(['index', 'create', 'edit', 'show', 'destroy'])->names('admin.advances');

//Carga de Estimaciones
Route::resource('estimates', EstimateController::class)->only(['index', 'create', 'edit', 'show', 'destroy'])->names('admin.estimates');

//Facturas Por Cobrar
Route::resource('facturasxc', FacturaxcController::class)->only(['index', 'create', 'edit', 'show', 'destroy'])->names('admin.facturasxc');

//Facturas Pagadas
Route::resource('facturascobradas', FacturacobradaController::class)->only(['index', 'create', 'edit', 'show', 'destroy'])->names('admin.facturas-cobradas');

//Control de Obra
Route::resource('controlobra', ControlObraController::class)->only(['index', 'create', 'edit', 'show', 'destroy'])->names('admin.control-obra');

//Centro de Costos
Route::resource('constcenters', ConstCenterController::class)->only(['index', 'create', 'edit', 'show', 'destroy'])->names('admin.cost-centers');

//Centro de Costos
Route::resource('constcenters', ConstCenterController::class)->only(['index', 'create', 'edit', 'show', 'destroy'])->names('admin.cost-centers');