<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\s3_user_account;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class Admin_user_manager extends Controller
{
	public function __construct(){
		$this->middleware('auth');
	}
	private function adminCheck(){
		if( Auth::user()->admin == FALSE ){
			abort(401);
		}
	}

	public function index() {
		$this->adminCheck();
		$user_list = User::orderBy('admin', 'desc')->get();
		return view('Account_manager.index', [ 'accounts' => $user_list ]);
	}
	public function create() {
		return view('Account_manager.create');
	}

	public function show( string $account_username ) {
		$this->adminCheck();
		$account = User::where('name', $account_username )->first();
		//dd($account);
		//if( count($post) != 1 ){
		//	abort(404);
		//}
		return view('Account_manager.show', [ 'account' => $account ]);
	}

	public function store( Request $request) {
		$this->adminCheck();
		#dd($request->all());
		$formFields = $request->validate([
			'name' => [ 'required', Rule::unique( 'users', 'username') ],
			'email' => [ 'required' , 'email', Rule::unique( 'users', 'email') ],
			'password' => 'required'
		]);
		dd($formFields);
		$formFields['password'] = Hash::make($formFields->password);
		Users::create($formFields);
		return redirect('/admin/account_manager')->with('message', "successfully added account ");
	}
	

	//public function update( Request $request, string $account_username) {
	//	#dd($request->all());
	//	$formFields = $request->validate([
	//		'username' => [ 'required' ],
	//		'email' => [ 'required' ],
	//		'access_key' => 'required' ,
	//		'secret_key' => 'required' ,
	//		'desc' => 'nullable'
	//	]);
	//	
	//	$user = Auth::user();
	//	$s3_user_in_db = s3_user_account::where('owner_id', $user->id )->where('username', $account_username )->get();
	//	if( count($s3_user_in_db) != 1 ){
	//		#return response([], 404);
	//		#abort();
	//		abort(404);
	//	}
	//	$user = Auth::user();
	//	$formFields['owner_id'] = $user->id;
	//	#dd($formFields);
	//	s3_user_account::where('id', $s3_user_in_db[0]->id)->where('username', $s3_user_in_db[0]->username)->update($formFields);
	//	#$s3_user_in_db[0]->create($formFields);
	//	return redirect('/home/s3_accounts')->with('message', "s3 account successfully added to your account ");
	//}
	
	
	public function edit( string $account_username ) {
		$this->adminCheck();
		$account = User::where('name', $account_username )->first();
		return view('Account_manager.edit', ['account' => $account]);
	}
}
