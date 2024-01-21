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
			'username' => 'test_user1_admin',
			'email' => 'test_user1_admin@test.com',
			'access_key' => 'akdpawokdpawodka',
			'secret_key' => 'dfkopsdfkpwroektwerp',
			'owner_id' => 15,
		]);
		s3_user_account::create([
			'username' => 'test_user2_admin',
			'email' => 'test_user2_admin@test.com',
			'access_key' => 'adawmdaiowd',
			'secret_key' => 'rgeporkgeprogkeprkgeprokg',
			'owner_id' => 15,
		]);
		s3_user_account::create([
			'username' => 'test_user3_admin',
			'email' => 'test_user3_admin@test.com',
			'access_key' => 'gmrpmgwpomgwpe',
			'secret_key' => 'fmewiowmgoneruigeuibei',
			'owner_id' => 15,
		]);
		s3_user_account::create([
			'username' => 'test_user4_admin',
			'email' => 'test_user4_admin@test.com',
			'access_key' => 'gmrpmgwpomgwpe',
			'secret_key' => 'omgrepgmerigmeorigmeorig',
			'owner_id' => 15,
		]);
		s3_user_account::create([
			'username' => 'test_user5_admin',
			'email' => 'test_user5_admin@test.com',
			'access_key' => 'gmrpmgwpomgwpe',
			'secret_key' => 'apomrgepogmperogmeprg',
			'owner_id' => 15,
		]);
		s3_user_account::create([
			'username' => 'test_user6_admin',
			'email' => 'test_user6_admin@test.com',
			'access_key' => 'gmrpmgwpomgwpe',
			'secret_key' => 'adioiwmdqiodqwedqowndoqiwd',
			'owner_id' => 15,
		]);
		s3_user_account::create([
			'username' => 'test_user7_admin',
			'email' => 'test_user7_admin@test.com',
			'access_key' => 'grpegpokgerpgkp',
			'secret_key' => 'efmspofmsepfsef',
			'owner_id' => 15,
		]);
		s3_user_account::create([
			'username' => 'test_user8_admin',
			'email' => 'test_user8_admin@test.com',
			'access_key' => 'akpomfewpfmwefw',
			'secret_key' => 'goepgmeprgunuwebfwiebu',
			'owner_id' => 15,
		]);


		\App\Models\User::create([
			'name' => 'user1',
			'email' => 'user1@t.t',
			'email_verified_at' => now(),
			'password' =>  Hash::make('user1'),
			'remember_token' => Str::random(10),
			'admin' => false,
		]);

		s3_user_account::create([
			'username' => 'user1_test1',
			'email' => 'user1_test1@test.com',
			'access_key' => 'adawmdaiowd',
			'secret_key' => 'rgeporkgeprogkeprkgeprokg',
			'owner_id' => 16,
		]);
		s3_user_account::create([
			'username' => 'user1_test2',
			'email' => 'user1_test1@test.com',
			'access_key' => 'adawmdaiowd',
			'secret_key' => 'rgeporkgeprogkeprkgeprokg',
			'owner_id' => 16,
		]);
	}
}
