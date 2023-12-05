<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicidadController;
use App\Http\Controllers\PromocionController;
use App\Http\Controllers\MarketingController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Paginas.publicidad');
});


//ruta de selecciona Publicidad
Route::get('/publicidad', [PublicidadController::class, 'index'])->name('publicidad.index');
//Formulario para crear publicidad
Route::get('/crearFormPU', [PublicidadController::class, 'CrearPublicidad']);
//Insertar Productos
Route::post('/guardar-publicidad', [PublicidadController::class, 'guardarPublicidad'])->name('guardar.publicidad');
// Mostrar formulario de actualización
Route::get('/UpdateFormPU/{cod_publicidad}', [PublicidadController::class, 'UpdateForm'])->name('publicidad.update.form');
// Procesar la actualización del producto
Route::put('/publicidad/{cod_publicidad}', [PublicidadController::class, 'updatePublicidad'])->name('publicidad.update');
// Procesar Eliminar  producto
Route::delete('/EliminarPublicidad/{cod_publicidad}', [PublicidadController::class, 'eliminarPublicidad'])->name('eliminar.publicidad'); 



//ruta de selecciona Publicidad
Route::get('/promocion', [PromocionController::class, 'index'])->name('promocion.index');
//Formulario para crear publicidad
Route::get('/crearFormPR', [PromocionController::class, 'CrearPromocion']);
//Insertar Productos
Route::post('/guardar-promocion', [PromocionController::class, 'guardarPromocion'])->name('guardar.promocion');
//Mostrar formulario de actualización
Route::get('/UpdateFormPR/{cod_promocion}', [PromocionController::class, 'UpdateForm'])->name('promocion.update.form');
// Procesar la actualización del producto
Route::put('/promocion/{cod_promocion}', [PromocionController::class, 'updatePromocion'])->name('promocion.update');
// Procesar Eliminar  producto
Route::delete('/EliminarPromocion/{cod_promocion}', [PromocionController::class, 'EliminarPromocion'])->name('eliminar.promocion'); 



