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
									Fill the forms to add s3 account to your list
								</div>
								<div class="card-body">

<form method="POST" action="/home/s3_accounts">
	@csrf
	<div class="form-group">
		<label for="username">Your s3 username</label>
		<input type="text" class="form-control" name="username" aria-describedby="username_help" placeholder="s3 username" value="{{ old('username') }}">
		<!--
		<small id="username_help" class="form-text text-muted">comment</small>
		-->
	@error('username')
		<p>{{ $message }}</p>
	@enderror
	</div>

	<div class="form-group">
		<label for="email">Your s3 account email address</label>
		<input type="email" class="form-control" name="email" aria-describedby="email_help" placeholder="email of your s3 account" value="{{ old('email') }}">
		<!--
		<small id="email_help" class="form-text text-muted">Email account assigned to your s3 account</small>
		-->
	@error('email')
		<p>{{ $message }}</p>
	@enderror
	</div>

<div class="form-group">
	<label for="access_key">Your s3 access_key</label>
	<input type="text" class="form-control" name="access_key" aria-describedby="access_key_help" placeholder="s3 access_key" value="{{ old('access_key') }}">
		<!--
		<small id="access_key_help" class="form-text text-muted">comment</small>
		-->
	@error('access_key')
		<p>{{ $message }}</p>
	@enderror
</div>

	<div class="form-group">
		<label for="secret_key">Your s3 secret key</label>
		<input type="password" class="form-control" name="secret_key" aria-describedby="secret_key_help" placeholder="s3 secret key"  value="{{ old('secret_key') }}">
		<!--
		<small id="secret_key_help" class="form-text text-muted">comment</small>
		-->
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

	<div class="form-group">
		<label for="desc">Description of your s3 account</label>
		<input type="text" class="form-control" name="desc" aria-describedby="desc_help" placeholder="description of your account" value="{{ old('description') }}">
		<!--
		<small id="desc_help" class="form-text text-muted"></small>
		-->
	</div>


	<button type="submit" class="btn btn-primary">Submit</button>

</form>

			</div>
		</div>
</div>
@endsection
