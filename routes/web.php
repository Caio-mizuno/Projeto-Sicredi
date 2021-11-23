<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//iniciando os CONTROLLERS
use App\Http\Controllers\UserController;
use App\Http\Controllers\LocadoraController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FormcomplaintController;
// Rota - USUÁRIO

Route::get('/', [UserController::class, 'index'] );
Route::get('/users/create', [UserController::class, 'create'] );
Route::post('/users',[UserController::class, 'store']);

Route::get('/users/list',[UserController::class, 'list']);


// Rota - Locadora

Route::get('/locadora/locadoraPage', [LocadoraController::class, 'index'] );
Route::get('/locadora/create', [LocadoraController::class, 'create'] );
Route::post('/locadora',[LocadoraController::class, 'store']);
Route::get('/locadora/list', [LocadoraController::class, 'list'] );

// Clientes
Route::get('/cliente/create', [ClientController::class, 'create'] );
Route::post('/cliente',[ClientController::class, 'store']);
Route::get('/cliente/list', [ClientController::class, 'list'] );



// Veiculos
Route::get('/vehicle/create', [VehicleController::class, 'create'] );
Route::post('/vehicle',[VehicleController::class, 'store']);
Route::get('/vehicle/list', [VehicleController::class, 'list'] );
Route::get('/edit{$id}', [VehicleController::class, 'update'] );

// Categorias
Route::get('/category/create', [CategoryController::class, 'create'] );
Route::post('/category',[CategoryController::class, 'store']);
Route::get('/category/list', [CategoryController::class, 'list'] );


// ROTA  - Formulário de Denúncias

Route::get('/formComplaint/create', [FormcomplaintController::class, 'create'] );
Route::post('/formComplaint',[FormcomplaintController::class, 'store']);

//Route::get('/formComplaint/list', [LocadoraController::class, 'list'] );




// Route::get('/test', function () {

//     $nome = "Caio";
//     $idade = 25;

//     return view('test', ['nome' => $nome, 'idade' => $idade]);
// });


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
