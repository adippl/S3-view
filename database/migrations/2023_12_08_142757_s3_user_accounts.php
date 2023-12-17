<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 */
	public function up(): void
	{
		Schema::create('s3_user_accounts', function (Blueprint $table) {
		$table->id();
		$table->string('username');
		$table->bigInteger('owner_id')->unsigned();
		$table->string('email')->nullable();
		$table->string('access_key');
		$table->string('secret_key');
		$table->longText('desc')->nullable();
		$table->foreign('owner_id')
			->references('id')
			->on('users')
			->onCascade('delete');
		$table->timestamps();
	});
	}
	
	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
	    //
	}
};
