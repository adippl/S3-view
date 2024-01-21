{{-- 
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
--}}
@extends('layouts.app')

@section('content')
<div class="container">
		<div class="row justify-content-center">
				<div class="col-md-8">
						<div class="card">

								<div class="card-header">
									Change values and press "Save" to update account details.
								</div>
								<div class="card-body">

<form method="POST" action="/home/s3_accounts/{{ $account->username }}">
	@method('PUT')
	@csrf
	<div class="form-group">
		<label for="username">Username</label>
		<input type="text" class="form-control-plaintext" name="username" aria-describedby="username_help" placeholder="account username" value="{{ $account->name }}" readonly>
		<small id="username_help" class="form-text text-muted">You cannot edit account username</small>
	@error('username')
		<p>{{ $message }}</p>
	@enderror
	</div>

	<div class="form-group">
		<label for="email">Account email</label>
		<input type="email" class="form-control" name="email" aria-describedby="email_help" placeholder="email" value="{{ $account->email }}">
		<small id="email_help" class="form-text text-muted">Change and SAVE to update email account</small>
	@error('email')
		<p>{{ $message }}</p>
	@enderror
	</div>

	<div class="form-group">
		<label for="secret_key">Password</label>
		<input type="password" class="form-control" name="raw_password" aria-describedby="secret_key_help" placeholder="your new password" value="">
		<small id="secret_key_help" class="form-text text-muted">Write new password and SAVE to update password</small>
	@error('secret_key')
		<p>{{ $message }}</p>
	@enderror
	</div>

	<!--
	<div class="form-check">
		<input type="checkbox" class="form-check-input" id="exampleCheck1">
		<label class="form-check-label" for="exampleCheck1">Check me out</label>
	</div>
	-->

	<!--
	<div class="form-group">
		<label for="desc">Description of your s3 account</label>
		<input type="text" class="form-control" name="desc" aria-describedby="desc_help" placeholder="description" value="{{ $account->desc }}">
		<!--
		<small id="desc_help" class="form-text text-muted">comment</small>
	</div>
	-->


	</p>
	<button type="submit" class="btn btn-primary">Update</button>

</form>
							</p>
							<a class="btn btn-secondary" href="{{ url('/admin/account_manager/user1' . $account->username ) }}" role="button">Cancel</a>
							<a class="btn btn-secondary" href="{{ url('/admin/account_manager' . $account->username ) }}" role="button">Back to account list</a>
						</div>
				</div>
		</div>
</div>
@endsection
