@extends('layouts.application')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Record</div>
                    <div class="panel-body">

                        <a href="{{ url('/record/create') }}" class="btn btn-primary btn-xs" title="Add New Record"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Patient Id </th><th> Doctor Id </th><th> Keluhan </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($record as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->patient_id }}</td><td>{{ $item->doctor_id }}</td><td>{{ $item->keluhan }}</td>
                                        <td>
                                            <a href="{{ url('/record/' . $item->id) }}" class="btn btn-success btn-xs" title="View Record"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/record/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Record"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/record', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Record" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Record',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $record->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection