<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumWorkTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('album_work', function(Blueprint $table)
		{
			$table
            	->integer("album_id")		 	
            	->unsigned()   
            	->index("album_id");

            $table
            	->integer("work_id")		 	
            	->unsigned()   
            	->index("work_id");

        	$table->timestamps();

            $table                          
                ->foreign('album_id')
                ->references('id')->on('albums') 
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table                          
                ->foreign('work_id')
                ->references('id')->on('works') 
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table
            	->primary(array('album_id','work_id'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('album_work');
	}

}
