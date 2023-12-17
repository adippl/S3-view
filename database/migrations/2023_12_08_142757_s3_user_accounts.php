<?php
/*
    S3-viewer - s3 bucket/object browser written in php/laravel/bootstrap
    Copyright (C) 2023  Adam Prycki

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU Affero General Public License as
    published by the Free Software Foundation, either version 3 of the
    License, or (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU Affero General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with this program.  If not, see <https://www.gnu.org/licenses/>.
*/

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
