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
				<div class="col-md-12">
						<div class="card">
							
							<div class="card-header">
								Change values and press "Save" to update account details.
							</div>
							<div class="card-body">
								
								<form method="POST" action="/home/s3_accounts/{{ $account->username }}">
									@method('delete')
									@csrf
									<button type="submit" class="btn btn-danger">YES I WANT TO DELETE THIS ACCOUNT</button>
								</form>
							</p>
							<a class="btn btn-secondary" href="{{ url('/home/s3_accounts/' . $account->username ) }}" role="button">Cancel</a>
						</div>
				</div>
		</div>
</div>
@endsection
