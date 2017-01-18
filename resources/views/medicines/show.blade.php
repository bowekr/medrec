@extends('layouts.application')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Record {{ $medicine->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('medicines/' . $medicine->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Record"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['medicines', $medicine->id],
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
                                        <th>ID</th><td>{{ $medicine->id }}</td>
                                    </tr>

                                    <tr>
                                    	<th>Name</th>
                                    		<td> {{ $medicine->name }} </td>
                                    </tr>

                                    <tr>
                                    	<th>Category</th>
                                    	<td> {{ $medicine->category }} </td>
                                    </tr>

                                    <tr>
                                    	<th>stock</th>
                                    	<td> {{ $medicine->stock }} </td>
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