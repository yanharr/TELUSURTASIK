<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_us', function (Blueprint $table) {
            $table->id('id_about_us');
            $table->string('cover');
            $table->string('judul');
            $table->text('desc');
            $table->string('develop_1');
            $table->string('nim_develop_1');
            $table->string('foto_develop_1');
            $table->string('develop_2');
            $table->string('nim_develop_2');
            $table->string('foto_develop_2');
            $table->string('develop_3');
            $table->string('nim_develop_3');
            $table->string('foto_develop_3');
            $table->string('develop_4');
            $table->string('nim_develop_4');
            $table->string('foto_develop_4');
            $table->string('develop_5');
            $table->string('nim_develop_5');
            $table->string('foto_develop_5');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about_us');
    }
}
