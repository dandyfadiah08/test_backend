<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpresenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_epresence', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned(); 
            $table->foreign('id_user')->references('id')->on('users');  
            $table->string('Type');
            $table->string('is_approve');
            $table->string('waktu');
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
        Schema::dropIfExists('_epresence');
    }
}
