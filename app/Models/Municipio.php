<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Departamento;

class Municipio extends Model
{
    use HasFactory;

    protected $table = 'municipios';

    protected $fillable = ['codigo', 'idDepartamento', 'descripcion'];

    public function departamento()
    {
        return $this->belongsTo(Departamento::class, 'idDepartamento');
    }
}