<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\FreteController;
use Illuminate\Support\Facades\Route;


Route::get('/ola', function(){

        return "Olá mundo";
});

Route::post('/clientes', [ClientController::class, 'store']);
Route::post('/fretes', [FreteController::class, 'store']);