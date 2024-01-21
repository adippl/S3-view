
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
				<div class="col-md-10">
						<div class="card">

								<div class="card-header">
									Account "{{ $account->name }}"
								</div>
								<div class="card-body">
									<a class="btn btn-secondary" href="{{ url('/admin/account_manager') }}" role="button">Back to account list</a>
									<a class="btn btn-primary" href="{{ url('/admin/account_manager/' . $account->name ) . '/edit' }}" role="button">Edit Account</a>
									<a class="btn btn-danger" href="{{ url('/admin/account_manager/' . $account->name ) . '/delete' }}" role="button">Remove this account</a>
									<table class="table table-hover">
										<thead>
											<tr>
												<!--
												<th scope="col">#</th>
												-->
												<th scope="col">username</th>
												<th scope="col">email</th>
												<th scope="col">created_at</th>
												<th scope="col">updated_at</th>
												<th scope="col">Admin?</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<!--
												<th scope="row">.</th>
												<td><a href="{{ url('/home/s3_accounts') }}/{{ $account['username'] }}"> {{ $account['username'] }} </a></td>
												-->
												<td>{{ $account['name'] }}</td>
												<td>{{ $account['email'] }}</td>
												<td>{{ $account['created_at'] }}</td>
												<td>{{ $account['updated_at'] }}</td>
												@if($account['admin'])
													<td>
														<div class="alert alert-danger" role="alert">
															ADMIN
														</div>
													</td>
												@endif

												<td></td>
											</tr>
										</tbody>
									</table>
									@if($account['admin'])
										<a class="btn btn-warning" href="#" role="button">Remove admin rights</a>
									@else
										<a class="btn btn-warning" href="#" role="button">Assign admin rights</a>
									@endif
								</div>
						</div>
				</div>
		</div>
</div>
@endsection
