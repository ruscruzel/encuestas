<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuestas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('empresa');
            $table->string('acepto_encuesta');
            $table->string('sector_empresa');
            $table->string('numero_empleados');
            $table->string('reparto_utilidades');
            $table->string('monto_ptu');
            $table->string('utilidades_mayor');
            $table->string('utilidades_menor');
            $table->string('dias_salario_estimado');
            $table->string('razones_no_utilidades');
            $table->string('anio_anterior_ptu');
            $table->boolean('activo')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('encuestas');
    }
};