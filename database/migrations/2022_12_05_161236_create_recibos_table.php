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
        Schema::create('recibos', function (Blueprint $table) {
            $table->id();
            $table->decimal('total_recibo', 12, 2);
            //clave foranea users
            $table->unsignedBigInteger('usuario_id');
            $table->foreign('usuario_id')->references('id')->on('users');
            //clave foranea rifa
            $table->unsignedBigInteger('rifa_id');
            $table->foreign('rifa_id')->references('id')->on('rifas');
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
        Schema::dropIfExists('recibos');
    }
};
