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

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\s3_user_account;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class S3_user_accounts extends Controller
{
	public function __construct(){
		$this->middleware('auth');
	}
	public function index() {
		$user = Auth::user();
		$post = s3_user_account::where('owner_id', $user->id )->get();
		return view('S3_user_accounts.index', [ 'accounts' => $post ]);
	}
	
	public function show( string $account_username ) {
		$user = Auth::user();
		$post = s3_user_account::where('owner_id', $user->id )->where('username', $account_username )->get();
		if( count($post) != 1 ){
			#return response([], 404);
			#abort();
			abort(404);
		}
		//dd ( $post );
		return view('S3_user_accounts.show', [ 'account' => $post ]);
	}

	public function create() {
		return view('S3_user_accounts.create');
	}

	public function store( Request $request) {
		//dd($request->all());
		$formFields = $request->validate([
			'username' => [ 'required', Rule::unique( 's3_user_accounts', 'username') ],
			'email' => [ 'required' , 'email', Rule::unique( 's3_user_accounts', 'email') ],
			'access_key' => 'required' ,
			'secret_key' => 'required' ,
			'desc' => 'nullable'
		]);
		$user = Auth::user();
		$formFields['owner_id'] = $user->id;
		#dd($formFields);
		s3_user_account::create($formFields);
		return redirect('/home/s3_accounts')->with('message', "s3 account successfully added to your account ");
	}
	
	public function update( Request $request, string $account_username) {
		#dd($request->all());
		$formFields = $request->validate([
			'username' => [ 'required' ],
			'email' => [ 'required' ],
			'access_key' => 'required' ,
			'secret_key' => 'required' ,
			'desc' => 'nullable'
		]);
		
		$user = Auth::user();
		$s3_user_in_db = s3_user_account::where('owner_id', $user->id )->where('username', $account_username )->get();
		if( count($s3_user_in_db) != 1 ){
			#return response([], 404);
			#abort();
			abort(404);
		}
		$user = Auth::user();
		$formFields['owner_id'] = $user->id;
		#dd($formFields);
		s3_user_account::where('id', $s3_user_in_db[0]->id)->where('username', $s3_user_in_db[0]->username)->update($formFields);
		#$s3_user_in_db[0]->create($formFields);
		return redirect('/home/s3_accounts')->with('message', "s3 account successfully added to your account ");
	}
	
	
	public function edit( string $account_username ) {
		$user = Auth::user();
		$post = s3_user_account::where('owner_id', $user->id )->where('username', $account_username )->get();
		if( count($post) != 1 ){
			#return response([], 404);
			#abort();
			abort(404);
		}
		#dd($post[0]);
		return view('S3_user_accounts.edit', ['account' => $post[0]]);
	}


	public function delete( string $account_username) {
		$user = Auth::user();
		$account = s3_user_account::where('owner_id', $user->id )->where('username', $account_username )->get();
		if( count($account) != 1 ){
			#return response([], 404);
			#abort();
			abort(404);
		}
		return view('S3_user_accounts.delete', ['account' => $account[0]]);
	}
	public function destroy( string $account_username) {
		$user = Auth::user();
		$account = s3_user_account::where('owner_id', $user->id )->where('username', $account_username )->get();
		if( count($account) != 1 ){
			#return response([], 404);
			#abort();
			abort(404);
		}
		$account[0]->delete();
		return redirect('/home/s3_accounts')->with('message', "s3 account successfully deleted");
	}
}
