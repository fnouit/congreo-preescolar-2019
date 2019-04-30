<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAgremiadoToUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('usuarios', function (Blueprint $table) {
            $table->string('agremiado',128)->after('clave_ct');
            $table->string('delegacion2',128)->after('codigo_confirmacion');

            $table->unsignedInteger('taller_id');
            $table->foreign('taller_id')->references('id')->on('tallers');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usuarios', function (Blueprint $table) {
        });
    }
}
