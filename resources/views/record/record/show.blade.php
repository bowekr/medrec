@extends('layouts.application')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Record {{ $record->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('record/' . $record->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Record"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['record', $record->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Record',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}

                        <button class="btn btn-success btn-xs">
                            <i class="fa fa-print"></i>
                            Print
                        </button>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $record->id }}</td>
                                    </tr>
                                    <tr><th> Patient Id </th><td> {{ $record->patient_id }} </td></tr><tr><th> Doctor Id </th><td> {{ $record->doctor_id }} </td></tr><tr><th> Keluhan </th><td> {{ $record->keluhan }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection