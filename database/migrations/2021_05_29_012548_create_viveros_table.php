<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViverosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viveros', function (Blueprint $table) {
            $table->id();
            $table->string( 'direccion',  245);
            $table->string( 'correo',  145);
            $table->int( 'telefono',  11);
            $table->string( 'propietario',  40);
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
        Schema::dropIfExists('viveros');
    }
}
