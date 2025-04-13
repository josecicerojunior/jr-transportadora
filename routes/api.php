<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;


Route::get('/ola', function(){

        return "Olá mundo";
});

Route::post('/clientes', [ClientController::class, 'store']);