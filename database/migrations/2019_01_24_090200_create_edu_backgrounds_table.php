<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEduBackgroundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('edu_backgrounds', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_app');
            $table->integer('years');
            $table->string('institution');
            $table->string('level');
            $table->float('gpa',8,2);
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
        Schema::dropIfExists('edu_backgrounds');
    }
}
