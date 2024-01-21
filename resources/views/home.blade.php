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
				<div class="card-header">{{ __('Dashboard') }}</div>

				<div class="card-body">
					@if (session('status'))
						<div class="alert alert-success" role="alert">
							{{ session('status') }}
						</div>
					@endif

			<p><a class="link-opacity-75" href="/home/s3_viewer_accounts">S3-viewer account manager TODO ADMIN ONLY</a></p>
			<p><a class="link-opacity-75" href="/home/s3_accounts">S3 account manager</a></p>
			<p><a class="link-opacity-75" href="/home/bucket_viewer">S3 vucket viewer</a></p>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
