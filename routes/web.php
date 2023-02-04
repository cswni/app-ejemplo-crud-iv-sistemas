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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    //Ruta para el CRUD de estudiantes
    Route::get('/estudiantes', \App\Http\Livewire\EstudiantesComponent::class)
    ->name('estudiantes');

    Route::get('/estudiante/editar/{id}', \App\Http\Livewire\EstudianteEditComponent::class)
    ->name('estudiantes.editar');

    Route::get('/estudiante/eliminar/{id}', \App\Http\Livewire\EstudianteEliminarComponent::class)
    ->name('estudiantes.eliminar');

});
