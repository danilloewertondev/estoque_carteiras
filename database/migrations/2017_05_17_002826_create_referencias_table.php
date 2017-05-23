<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReferenciasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('referencias', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nome_referencia');
			$table->float('valor');
			$table->integer('tipo_id');
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('referencias');
	}

}
