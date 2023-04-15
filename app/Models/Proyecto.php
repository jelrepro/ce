<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;

    // protected $fillable = ['proyectos','costo_proyecto','cliente','supervisor','telefono','categorie_id','user_id', ];

    protected $fillable = [
        'convenios',
        'municipio_id',
        'costo_convenio',
        'estado_id',
        'cliente',
        'supervisor',
        'telefono',
        'descripcion',
        'etapas_adm',
        'objetivo',
        'alcance',
        'anio',
        'responsable',
        'centro_costos',
        'orden_interna',
    ];

    public function user()
    {
        return $this ->belongsTo('App\Models\User');
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }

    public function estadoGestion()
    {
        return $this->belongsTo(EstadoGestion::class);
    }

    public function estadoAdmin()
    {
        return $this->belongsTo(EstadoAdmin::class);
    }

    public function tipoProyecto()
    {
        return $this->belongsTo(TipoProyecto::class);
    }

    public function grupoProyecto()
    {
        return $this->belongsTo(GrupoProyecto::class);
    }

    public function municipio()
    {
        return $this->belongsTo(Municipio::class);
    }
}
