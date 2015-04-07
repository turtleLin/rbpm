<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResourcesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('resources', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('work_id')->unsigned()->index('work_id');
			$table->integer('page');
			$table->string('key');
			$table->string('bucket')->default('rabbitpremobile');
			$table->string('downurl');
			$table->timestamps();

			$table
				->foreign('work_id')
				->references('id')->on('works')
				->onDelete('cascade')
				->onUpdate('cascade');

			$table
				->unique(array('work_id','page'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('resources');
	}

}
