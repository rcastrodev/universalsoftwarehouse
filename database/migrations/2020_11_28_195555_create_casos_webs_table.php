<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasosWebsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casos_webs', function (Blueprint $table) {
            $table->integer('ID_CasoUniversalWeb')->nullable();
            $table->string('Numero_Caso', 8)->nullable();
            $table->string('Nombre_Cliente', 50)->nullable();
            $table->string('Serial', 3)->nullable();
            $table->string('Referencia', 50)->nullable();
            $table->string('DescripcionSubRef1', 20)->nullable();
            $table->string('Modulo', 50)->nullable();
            $table->string('DescripcionSubMod1', 50)->nullable();
            $table->string('DescripcionCaso')->nullable();
            $table->string('ObservacionesCaso')->nullable();
            $table->string('ReferenciaCliente')->nullable();
            $table->string('Cli_Usuario', 50)->nullable();
            $table->string('Agencia', 30)->nullable();
            $table->string('Canal', 20)->nullable();
            $table->string('DescripcionCanal', 20)->nullable();
            $table->string('Responsable', 50)->nullable();
            $table->dateTime('FechaHora_Creacion');
            $table->string('SuspendeServ', 2)->nullable();
            $table->string('DescripcionSeveridad', 20)->nullable();
            $table->dateTime('FechaHora_Cerrado')->nullable();
            $table->integer('Activo')->nullable();
            $table->integer('Prioridad')->nullable();
            $table->string('DescripcionAmbiente', 50)->nullable();
            $table->string('Descripcion', 20)->nullable();
            $table->string('CodigoAgencia', 6)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('casos_webs');
    }
}
