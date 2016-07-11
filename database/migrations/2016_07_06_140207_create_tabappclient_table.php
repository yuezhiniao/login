<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabappclientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('tabappclients', function(Blueprint $table)
    {
        $table->increments('id');
        $table->string('clientname');
        $table->string('clientname2');
		$table->string('clientname3');
        $table->integer('interid');
        
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
