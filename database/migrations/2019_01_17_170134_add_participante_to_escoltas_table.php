<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddParticipanteToEscoltasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('escoltas', function (Blueprint $table) {
            $table->string('participante')->nullable()->after('sede');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('escoltas', function (Blueprint $table) {
            Schema::dropIfExists('escoltas');
        });
    }
}
