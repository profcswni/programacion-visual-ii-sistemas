<?php

use App\Http\Livewire\Universidad\ConfirmaEliminarComponent;
use App\Http\Livewire\Universidad\CrearUniversidadComponent;
use App\Http\Livewire\Universidad\UniversidadEditarComponent;
use App\Http\Livewire\UniversidadComponent;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    //Pagina principal
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    //Ruta para acceder a las universidades
    Route::get('/universidad', UniversidadComponent::class)
        ->name('universidad');

    //Ruta para editar una universidad
    Route::get('/universidad/{id}/editar', UniversidadEditarComponent::class)
        ->name('universidad.editar');

    //Ruta para crear una universidad
    Route::get('/universidad/nueva', CrearUniversidadComponent::class)
        ->name('universidad.crear');

    //Ruta para confirmar eliminar una universidad
    Route::get('/universidad/{id}/eliminar', ConfirmaEliminarComponent::class)
        ->name('universidad.eliminar');
});
