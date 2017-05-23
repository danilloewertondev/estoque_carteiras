<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropColumnsCreatedUpdatedFromTipoDeCouros extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tipo_de_couros', function(Blueprint $table)
		{
			$table->dropColumn('created_at');
			$table->dropColumn('updated_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tipo_de_couros');
	}

}

