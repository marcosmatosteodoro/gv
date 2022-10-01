<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuemSomosController;
use App\Http\Controllers\FaleConoscoController;
use App\Http\Controllers\EspecialidadeController;
use App\Http\Controllers\ExamesController;
use App\Http\Controllers\InfraestruturaController;
use App\Http\Controllers\PlanosController;

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

Route::get('/laravel', function () {    return view('welcome'); });

Route::get('/', [HomeController::class, 'principal'])->name('site.home');
Route::get('/quemsomos', [QuemSomosController::class, 'principal'])->name('site.quemsomos');
Route::get('/faleconosco', [FaleConoscoController::class, 'principal'])->name('site.faleconosco');

Route::get('/especialidades', [EspecialidadeController::class, 'principal'])->name('site.especialidades');
Route::get('/especialidades/{filtro}', [EspecialidadeController::class, 'buscador'])->name('site.especialidades.filtros');
Route::get('/especialidade/{id}', [EspecialidadeController::class, 'buscado'])->name('site.especialidade');

Route::get('/exames', [ExamesController::class, 'principal'])->name('site.exames');
Route::get('/exames/{filtro}', [ExamesController::class, 'buscador'])->name('site.exames.filtros');
Route::get('/exame/{id}', [ExamesController::class, 'buscado'])->name('site.exame');

Route::get('/infraestrutura', [InfraestruturaController::class, 'principal'])->name('site.infraestrutura');
Route::get('/infraestrutura/{id}', [InfraestruturaController::class, 'buscado'])->name('site.infraestrutura.id');

Route::get('/planos', [PlanosController::class, 'principal'])->name('site.planos');
Route::get('/planos/{id}', [PlanosController::class, 'buscado'])->name('site.planos.id');
