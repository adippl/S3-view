
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
			
			@if(session()->has('message'))
				<div class="alert alert-success" role="alert">
					{{ session('message') }}
				</div>
			@endif
			
			<div class="card">
				<div class="card-header">
					{{ __('User accounts') }}
				</div>
				<div class="card-body">
					
					<a class="btn btn-primary" href="{{ url('/admin/account_manager/create') }}" role="button">Add user account</a>
						
						@if(count($accounts) == 0)
						<p>You have not accounts added</p>
						@endif
						
						<table class="table table-hover">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">username</th>
									<th scope="col">email</th>
									<th scope="col">Admin rights</th>
								</tr>
							</thead>
							<tbody>
								
							@foreach($accounts as $account)
									<tr>
										<th scope="row">{{ $loop->iteration }}</th>
										<td><a href="{{ url('/admin/account_manager/') }}/{{ $account['name'] }}"> {{ $account['name'] }} </a></td>
										<td>{{ $account['email'] }}</td>
										@if($account['admin'])
											<td>
												<div class="alert alert-danger" role="alert">
													ADMIN
												</div>
											</td>
										@endif
									</tr>
								</a>
							@endforeach
						</tbody>
					</table>
					{{--
					<div class="d-flex">
						{!! $accounts->links() !!}
					</div>
					--}}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
