<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePilotticketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pilottickets', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('preukaz_type')->nullable();
            $table->string('preukaz_num')->nullable();
            $table->string('sep')->nullable();
            $table->date('sep_to')->nullable();
            $table->string('mep')->nullable();
            $table->date('mep_to')->nullable();
            $table->string('z137t')->nullable();
            $table->date('z137t_to')->nullable();
            $table->string('fi')->nullable();
            $table->date('fi_to')->nullable();
            $table->string('zdrav_sp1')->nullable();
            $table->date('zdrav_sp1_to')->nullable();
            $table->string('zdrav_sp2')->nullable();
            $table->date('zdrav_sp2_to')->nullable();
            $table->string('radio_has')->nullable();
            $table->string('radio_type')->nullable();
            $table->string('radio_num')->nullable();
            $table->string('radio_unl')->nullable();
            $table->string('radio_to')->nullable();
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
        Schema::dropIfExists('pilottickets');
    }
}
