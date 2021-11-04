<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()     {         if(!Schema::hasTable('task')){         Schema::create('task',function(Blueprint ));         }         Schema::table('task', function (Blueprint $table) {              $table->dropColumn('owner');             $table->unsignedInteger('owner_id' );          });      }      /**      * Reverse the migrations.      *      * @return void      */     public function down()     {         $table->dropColumn('owner_id');         $table->unsignedInteger('owner');     } }
