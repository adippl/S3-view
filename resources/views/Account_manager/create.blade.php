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
									You are creating a new account
								</div>
								<div class="card-body">

<form method="POST" action="/admin/account_manager">
	@csrf
	<div class="form-group">
		<label for="username">Account username</label>
		<input type="text" class="form-control" name="username" aria-describedby="username_help" placeholder="s3 username" value="{{ old('username') }}">
		<!--
		<small id="username_help" class="form-text text-muted">comment</small>
		-->
	@error('username')
		<p>{{ $message }}</p>
	@enderror
	</div>

	<div class="form-group">
		<label for="email">Account email</label>
		<input type="email" class="form-control" name="email" aria-describedby="email_help" placeholder="email of your s3 account" value="{{ old('email') }}">
		<!--
		<small id="email_help" class="form-text text-muted">Email account assigned to your s3 account</small>
		-->
	@error('email')
		<p>{{ $message }}</p>
	@enderror
	</div>

	<div class="form-group">
		<label for="password">Account Password</label>
		<input type="password" class="form-control" name="password" aria-describedby="password_help" placeholder="secure password!!!"  value="">
		<!--
		<small id="password_help" class="form-text text-muted">comment</small>
		-->
	@error('password')
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
		<input type="text" class="form-control" name="desc" aria-describedby="desc_help" placeholder="description of your account" value="{{ old('description') }}">
		<!--
		<small id="desc_help" class="form-text text-muted"></small>
	</div>
	-->


	</p>
	<button type="submit" class="btn btn-primary">Create Account</button>

</form>
					</p>
					<a class="btn btn-secondary" href="{{ url('/admin/account_manager/') }}" role="button">Cancel</a>
			</div>
		</div>
</div>
@endsection
