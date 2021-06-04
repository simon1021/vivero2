<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDireccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direccions', function (Blueprint $table) {
            $table->id();
            $table->string( 'pais',  45);
            $table->string( 'estado',  45);
            $table->string( 'municipio',  45);
            $table->int( 'codigo_potal',  11);
            $table->string( 'colonia',  45);
            $table->string( 'calle',  45);
            $table->int( 'numero',  5);
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
        Schema::dropIfExists('direccions');
    }
}
