<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->text('MagazinePupPolicy');
            $table->text('MagazinePupCondition');
            $table->string('MagazineTitle');
            $table->string('MagazinePhone');
            $table->string('MagazineEmail');
            $table->string('MagazineAddress');
            $table->string('MagazineLogo');
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
        Schema::dropIfExists('main_infos');
    }
}
