@extends('layouts.application')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Record {{ $record->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('admin/' . $record->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Record"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin', $record->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Record',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $record->id }}</td>
                                    </tr>

                                    <tr>
                                    	<th>Role</th>
                                    	<td> {{ $record->role }} </td>
                                    </tr>

                                    <tr>
                                    	<th>Name</th>
                                    		<td> {{ $record->name }} </td>
                                    </tr>

                                    <tr>
                                    	<th>Email</th>
                                    	<td> {{ $record->email }} </td>
                                    </tr>

                                    <tr>
                                    	<th>Phone Number</th>
                                    	<td> {{ $record->phone_number }} </td>
                                    </tr>



                                    <tr>
                                    	<th>Address</th>
                                    	<td> {{ $record->address}} </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection