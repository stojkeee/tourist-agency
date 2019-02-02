<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create( 'offers', function ( Blueprint $table ) {
			$table->increments( 'id' );
			$table->string( 'title', 255 );
			$table->string( 'price', 255 );
			$table->string( 'date', 255 );
			$table->string( 'description', 255 );
			$table->string( 'filename' )->nullable();
			$table->string( 'mime' )->nullable();
			$table->string( 'original_filename' )->nullable();
			$table->string('deleted');
			$table->timestamps();
		} );

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists( 'offers' );
	}
}
