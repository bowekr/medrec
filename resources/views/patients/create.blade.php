@extends('layouts.application')



@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					@include('common.errors')

					<form action="/patients" method="POST">
						{{ csrf_field() }}

						<div class="form-group">
							<label for="name">Patient Name</label>
							<input class="form-control" type="text" id="name" name="name" />
						</div>


						<div class="form-group">
							<label class="control-label" style="display: block;">Gender</label>
							<div class="radio radio-inline">
								<input type="radio" id="gender1" name="gender" value="Female" />
								<label for="gender1">Female</label>
							</div>

							<div class="radio radio-inline">
								<input type="radio" id="gender2" name="gender" value="Male"/>
								<label for="gender2">Male</label>
							</div>
						</div>

						<div class="form-group">
							<label for="address">Address</label>
							<input type="text" name="address" class="form-control" id="address"></input>
						</div>

						<div class="form-group">
							<label for="born_date">Born Date</label>
							<input type="text" name="born_date" class="form-control" id="bornDate"></input>
						</div>

						<div class="form-group">
							<label for="phone_number">Phone Number</label>
							<input type="text" name="phone_number" class="form-control" id="bornDate"></input>
						</div>


						<div class="form-group">
							<label class="control-label" style="display: block;">Blood Type</label>
							<div class="radio radio-inline">
								<input type="radio" id="bloodTypeO" name="blood_type" value="O" />
								<label for="bloodTypeO">O</label>
							</div>

							<div class="radio radio-inline">
								<input type="radio" id="bloodTypeA" name="blood_type" value="A"/>
								<label for="bloodTypeA">A</label>
							</div>

							<div class="radio radio-inline">
								<input type="radio" id="bloodTypeAB" name="blood_type" value="AB"/>
								<label for="bloodTypeAB">AB</label>
							</div>
						</div>

						<button class="btn btn-primary" type="submit">Save</button>
					</form>
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