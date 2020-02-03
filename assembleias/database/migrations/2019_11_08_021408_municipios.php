<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Municipios.
 *
 * @author  The scaffold-interface created at 2019-11-08 02:14:08am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Municipios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('municipios',function (Blueprint $table){

        $table->increments('id');
        
        $table->integer('codigo');
        
        $table->String('nome');
        
        $table->String('uf');
        
        /**
         * Foreignkeys section
         */
        
        
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
        Schema::drop('municipios');
    }
}
