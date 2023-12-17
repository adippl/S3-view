<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\s3_user_account;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 */
	public function run(): void
	{
		 \App\Models\User::factory(10)->create();
		
		
		s3_user_account::create([
			'username' => 'user1',
			'email' => 'user1@test.com',
			'access_key' => 'apwodkawdp',
			'secret_key' => 'kdpowakwdpawaw',
			'desc' => 'my account nr 1',
			'owner_id' => 1,
		]);
		
		s3_user_account::create([
			'username' => 'user2',
			'access_key' => 'adkopakwdpa',
			'secret_key' => 'dsfpseofkpwoejkfgpwoekf',
			'owner_id' => 1,
		]);
		
		s3_user_account::create([
			'username' => 'user3',
			'email' => 'user3@test.com',
			'access_key' => 'adoakwpdoka',
			'secret_key' => 'doakwpdokawpdokawpodka',
			'owner_id' => 3,
		]);
		
		\App\Models\User::factory(4)->create();
		
		\App\Models\User::create([
			'name' => 'admin',
			'email' => 'admin@t.t',
			'email_verified_at' => now(),
			'password' =>  Hash::make('admin'),
			'remember_token' => Str::random(10),
			'admin' => true,
		]);

		s3_user_account::create([
			'username' => 'user4',
			'email' => 'user4@test.com',
			'access_key' => 'akdpawokdpawodka',
			'secret_key' => 'dfkopsdfkpwroektwerp',
			'owner_id' => 15,
		]);
		s3_user_account::create([
			'username' => 'user5',
			'email' => 'user5@test.com',
			'access_key' => 'adawmdaiowd',
			'secret_key' => 'rgeporkgeprogkeprkgeprokg',
			'owner_id' => 15,
		]);
	}
}
