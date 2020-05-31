<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArbitrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arbitrations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('AName');
            $table->string('Degree');
            $table->string('University');
            $table->string('College');
            $table->string('Dept');
            $table->string('Specialty');
            $table->integer('Magazine');
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
        Schema::dropIfExists('arbitrations');
    }
}
