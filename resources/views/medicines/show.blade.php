@extends('layouts.application')

@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					{{ $medicine->id }}
					{{ $medicine->name }}
				</div>
			</div>
		</div>
	</div>
@endsection