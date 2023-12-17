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

class S3_user_accounts extends Controller
{
	public function __construct(){
		$this->middleware('auth');
	}
	public function index() {
		$user = Auth::user();
		$post = s3_user_account::where('owner_id', $user->id)->get();
		return view('S3_user_accounts.index', [ 'accounts' => $post ]);
	}
}
