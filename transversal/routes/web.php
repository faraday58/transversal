<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Contador;
use App\Livewire\RutaEjemplo;
 

Route::get('/', Contador::class)
    ->name('contador');

Route::get('/ruta-ejemplo', RutaEjemplo::class)
    ->name('ruta-ejemplo');