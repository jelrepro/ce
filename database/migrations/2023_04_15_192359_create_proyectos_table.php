<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('proyectos');
            $table->unsignedBigInteger('municipio_id');
            $table->foreign('municipio_id')->references('id')->on('municipios');
            $table->decimal('costoProyecto');
            $table->unsignedBigInteger('estado_id');
            $table->foreign('estado_id')->references('id')->on('estados');
            $table->string('cliente');
            $table->string('supervisor');
            $table->string('telefono');
            $table->string('correo');
            $table->text('descripcion');
            $table->unsignedBigInteger('estado_gestion_id');
            $table->foreign('estado_gestion_id')->references('id')->on('estados_gestion');
            $table->text('objeto');
            $table->text('alcance');
            $table->string('anio');
            $table->string('responsable');
            $table->string('centro_costos');
            $table->decimal('orden_interna');
            $table->decimal('cod_inva');
            $table->date('fechaFin');

            $table->string('etapas_adm');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyectos');
    }
};