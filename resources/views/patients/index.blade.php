@extends('layouts.application')

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
			  patient Index
			</div>

			<div style="padding: 30px;">
				<a href={{ url('/patients/create') }} class="btn btn-success">New</a>
				<button class="btn btn-primary">
					<i class="fa fa-print"></i>
					Print All
				</button>
			</div>

			<div class="card-body">
			  <div class="row">
			    <div class="col-md-12">
			      <table class="table">
			        <thead>
			          <tr>
			            <th>Patient Code</th>
			            <th>Name</th>
			            <th>Gender</th>
			            <th>Address</th>
			            <th>Born Date</th>
			            <th>Blood Type</th>
			            <th>Phone Number</th>
			          </tr>
			        </thead>
			        <tbody>
			        	@foreach($patients as $patient)
				          <tr>
				            <th scope="row">{{ $patient->id }}</th>
				            <td>{{ $patient->name }}</td>
				            <td>{{ $patient->gender }}</td>
				            <td>{{ $patient->address }}</td>
				            <td>{{ $patient->born_date }}</td>
				            <td>{{ $patient->phone_number }}</td>
				     

				     			<td>
				     			    <a href="{{ url('/patients/' . $patient->id) }}" class="btn btn-success btn-xs" title="View patient"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
				     			    <a href="{{ url('/patients/' . $patient->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit patient"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
				     			    {!! Form::open([
				     			        'method'=>'DELETE',
				     			        'url' => ['/patients', $patient->id],
				     			        'style' => 'display:inline'
				     			    ]) !!}
				     			        {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete patient" />', array(
				     			                'type' => 'submit',
				     			                'class' => 'btn btn-danger btn-xs',
				     			                'title' => 'Delete patient',
				     			                'onclick'=>'return confirm("Confirm delete?")'
				     			        )) !!}
				     			    {!! Form::close() !!}
				     			</td>

				          </tr>
			          @endforeach
			        </tbody>
			      </table>

			      <!-- Pagination -->
			      {!! $patients->render() !!}
			    </div>
			  </div>
			</div>

		</div>
	</div>
</div>
@endsection