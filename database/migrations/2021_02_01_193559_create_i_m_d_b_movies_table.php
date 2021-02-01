<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIMDBMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('i_m_d_b_movies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->text('sinopse');
            $table->enum('nota',['1', '2', '3', '4', '5']);
            $table->integer('gender_id')->unsigned();
            $table->timestamps();
            $table->foreign('gender_id')->references('id')->on('i_m_d_b_genders')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('i_m_d_b_movies');
    }
}
