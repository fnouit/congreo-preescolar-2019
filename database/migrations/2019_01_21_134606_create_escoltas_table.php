<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEscoltasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escoltas', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('delegacion')->nullable();
            $table->string('nivel')->nullable();
            $table->string('sede')->nullable();

            $table->string('rp_n')->nullable();
            $table->string('rp_ap')->nullable();
            $table->string('rp_am')->nullable();

            $table->string('sp_n')->nullable();
            $table->string('sp_ap')->nullable();
            $table->string('sp_am')->nullable();

            $table->string('in1_n')->nullable();
            $table->string('in1_ap')->nullable();
            $table->string('in1_am')->nullable();

            $table->string('in2_n')->nullable();
            $table->string('in2_ap')->nullable();
            $table->string('in2_am')->nullable();

            $table->string('in3_n')->nullable();
            $table->string('in3_ap')->nullable();
            $table->string('in3_am')->nullable();

            $table->string('in4_n')->nullable();
            $table->string('in4_ap')->nullable();
            $table->string('in4_am')->nullable();

            $table->string('in5_n')->nullable();
            $table->string('in5_ap')->nullable();
            $table->string('in5_am')->nullable();

            $table->string('in6_n')->nullable();
            $table->string('in6_ap')->nullable();
            $table->string('in6_am')->nullable();

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
        Schema::dropIfExists('escoltas');
    }
}
