<?php

namespace App\Http\Controllers;

use App\Models\Frete;
use Illuminate\Http\Request;

class RastreamentoController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $frete = Frete::where('codigo_rastreio','teste123')
            ->with('etapas')
            ->first();
        // $frete = Frete::get();
        // dd($frete->etapas);

        return view('frete.rastreamento', [
            'frete' => $frete
        ]);
    }
}
