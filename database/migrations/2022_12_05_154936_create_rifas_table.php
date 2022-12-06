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
        Schema::create('rifas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_rifa', 50);
            $table->text('descripcion_rifa');
            $table->decimal('precio_rifa', 12, 2);
            $table->integer('num_boletos_rifa');
            $table->string('imagen_rifa');
            $table->dateTime('fecha_cierre_rifa', $precision = 0);
            //0= inactiva, 1= activa, 2= finalizada
            $table->tinyInteger('estatus_rifa')->default('1');
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
        Schema::dropIfExists('rifas');
    }
};
