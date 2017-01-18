@extends('layouts.application')

@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					@include('common.errors')

					<form action="/medicines" method="POST">
						{{ csrf_field() }}

						<label for="name">Medicine Name</label>
						<input class="form-control" type="text" id="name" name="name" />


						<label for="category">Category</label>
						<input class="form-control" type="text" id="category" name="category" />

						<label for="stock">Stock</label>
						<input class="form-control" type="number" id="stock" name="stock" />

						<button class="btn btn-primary" type="submit">Save</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection