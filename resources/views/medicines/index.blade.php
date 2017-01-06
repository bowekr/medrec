@extends('layouts.application')

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
			  Medicine Index
			</div>

			<div style="padding: 30px;">
				<a href={{ url('/medicines/create') }} class="btn btn-success">New</a>
			</div>

			<div class="card-body">
			  <div class="row">
			    <div class="col-md-12">
			      <table class="table">
			        <thead>
			          <tr>
			            <th>Medicine Code</th>
			            <th>Medicine Name</th>
			            <th>Actions</th>
			          </tr>
			        </thead>
			        <tbody>
			        	@foreach($medicines as $medicine)
				          <tr>
				            <th scope="row">{{ $medicine->id }}</th>
				            <td>{{ $medicine->name }}</td>
				            <td></td>

				            <td>
				            	<a class="btn btn-warning btn-xs" href="{{ url('medicines/' . $medicine->id . '/edit') }}">
				            		<span class="glyphicon glyphicon-pencil" aria-hidden="true"/>
				            	</a>
				            	{!! Form::open([
				            		'method' => 'DELETE',
				            		'route' => ['medicines.destroy', $medicine->id],
				            		'style' => 'display: inline'
				            		])
				            	!!}


				            		{!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete medicine" />', [
				            			'class' => "btn btn-danger btn-xs",
				            			'type' => 'submit',
				            			'title' => 'Delete medicine',
				            			'onclick'=>'return confirm("Confirm delete?")'
				            		]) !!}
				            	{!! Form::close() !!}
				            </td>
				          </tr>
			          @endforeach
			        </tbody>
			      </table>

			      <!-- Pagination -->
			      {!! $medicines->render() !!}
			    </div>
			  </div>
			</div>

		</div>
	</div>
</div>
@endsection