@extends('layouts.application')



@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					@include('common.errors')

					@include('patients.form')
				</div>
			</div>
		</div>
	</div>
@endsection

@section('assetsInclude')
	<script>
		$(document).ready(function() {
			$('#bornDate').datepicker();
		})
	</script>
@endsection