<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Assembleias.
 *
 * @author  The scaffold-interface created at 2019-11-08 03:41:25pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Assembleias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('assembleias',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('endereco_reuniao');

        $table->String('cep');

        
        /**
         * Foreignkeys section
         */
        
        $table->integer('municipio_id')->unsigned()->nullable();
        $table->foreign('municipio_id')->references('id')->on('municipios')->onDelete('cascade');
        
        
        $table->timestamps();
        
        
        // type your addition here

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('assembleias');
    }
}
