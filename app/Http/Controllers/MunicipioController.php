<?php

namespace App\Http\Controllers;
use App\Models\Municipio;
use Illuminate\Http\Request;

class MunicipioController extends Controller
{
    public function getMunicipiosByDepartamento($departamento_id)
    {
        // $municipios = Municipio::where('departamento_id', $departamentoId)->pluck('descripcion', 'id');
        // return response()->json($municipios);
    
        $municipios = Municipio::where('departamento_id', $departamento_id)->get();
    
        return response()->json($municipios);
    }
}
