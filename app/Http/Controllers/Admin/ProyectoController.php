<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Proyecto;
use App\Models\Municipio;
use App\Models\EstadoGestion;
use App\Models\Estado;
use App\Models\GrupoProyecto;
use App\Models\TipoProyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proyectos = Proyecto::all();

        $totalCostoP = 0;

        foreach ($proyectos as $proyecto) {
            if ($proyecto->estado_gestion_id == 0) {
                $totalCostoP += $proyecto->costoProyecto;
            }
        }

        $totalCostoD = 0;

        foreach ($proyectos as $proyecto) {
            if ($proyecto->estado_gestion_id == 1) {
                $totalCostoD += $proyecto->costoProyecto;
            }
        }

        $totalCostoC = 0;

        foreach ($proyectos as $proyecto) {
            if ($proyecto->estado_gestion_id == 2) {
                $totalCostoC += $proyecto->costoProyecto;
            }
        }

        $totalCostoS = 0;

        foreach ($proyectos as $proyecto) {
            if ($proyecto->estado_gestion_id == 3) {
                $totalCostoS += $proyecto->costoProyecto;
            }
        }

        $totalCostoE = 0;

        foreach ($proyectos as $proyecto) {
            if ($proyecto->estado_gestion_id == 4) {
                $totalCostoE += $proyecto->costoProyecto;
            }
        }

        $estadosGestion = [0, 1]; // Arreglo con los estados de gestión que deseas sumar
        $totalCostoPD = Proyecto::whereIn('estado_gestion_id', $estadosGestion)->sum('costoProyecto');
        
        
        $contadorPlanificado = Proyecto::where('estado_gestion_id', 0)->count();
        $contadorDisenoDesarrollo = Proyecto::where('estado_gestion_id', 1)->count();
        $contadorConstruccion = Proyecto::where('estado_gestion_id', 2)->count();
        $contadorPruebas = Proyecto::where('estado_gestion_id', 3)->count();
        $contadorCierre = Proyecto::where('estado_gestion_id', 4)->count();

        $estadosGestion = [0, 1]; // Arreglo con los estados de gestión que deseas contar
        $contadorPD = Proyecto::whereIn('estado_gestion_id', $estadosGestion)->count();

        

        return view('admin.proyectos.index', compact('proyectos', 'totalCostoP', 'totalCostoD','totalCostoC','totalCostoS','totalCostoE','contadorPlanificado','contadorDisenoDesarrollo','contadorConstruccion','contadorPruebas','contadorCierre','totalCostoPD','contadorPD'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Proyecto $proyecto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proyecto $proyecto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proyecto $proyecto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proyecto $proyecto)
    {
        //
    }
}
