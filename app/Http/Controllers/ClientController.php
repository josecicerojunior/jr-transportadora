<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Http\Requests\StoreClienteRequest;
use App\Models\Cliente;


class ClientController extends Controller
{
    public function store(StoreClienteRequest $request)
    
    {
        // dd($request->all());
        $cliente = Cliente::create($request->all());
        return $cliente;
        // return ['resultado' => 'deu certo'];
    }
}
