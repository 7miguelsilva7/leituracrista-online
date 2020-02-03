<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AssembleiasUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('assembleia_user',function (Blueprint $table){
			$table->increments('id')->unique()->index()->unsigned();
			$table->integer('assembleia_id')->unsigned()->index();
			$table->foreign('assembleia_id')->references('id')->on('assembleias')->onDelete('cascade');
			$table->integer('user_id')->unsigned()->index();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			/**
			 * Type your addition here
			 *
			 */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('assembleia_user');
    }
}
