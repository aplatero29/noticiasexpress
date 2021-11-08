<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entrada;

class EntradaController extends Controller
{
    public function index()
    {
        $entradas = Entrada::all();
        return response()->json($entradas);
    }

    public function create()
    {
        # code...
    }

    public function store(Request $request)
    {
        $entrada = Entrada::create($request->post());
        return response()->json([
            'entrada' => $entrada
        ]);
    }

    public function show(Entrada $entrada)
    {
        return response()->json($entrada);
    }

    public function edit($id)
    {
        # code...
    }

    public function update(Request $request, Entrada $entrada)
    {
        $entrada->fill($request->post())->save();
        return response()->json([
            'entrada' => $entrada
        ]);
    }

    public function destroy(Entrada $entrada)
    {
        $entrada->delete();
        return response()->json([
            'mensaje' => 'Entrada eliminada'
        ]);
    }
}
