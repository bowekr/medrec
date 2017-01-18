@extends('layouts.application')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Record {{ $patient->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('medicines/' . $patient->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Record"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>


                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['medicines', $patient->id],
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
                            Print Patient Card
                        </button>
                        <br/>
                        <br/>



                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $patient->id }}</td>
                                    </tr>

                                    <tr>
                                        <th>Name</th>
                                            <td> {{ $patient->name }} </td>
                                    </tr>

                                    <tr>
                                        <th>Gender</th>
                                        <td> {{ $patient->gender }} </td>
                                    </tr>

                                    <tr>
                                        <th>Address</th>
                                        <td> {{ $patient->address }} </td>
                                    </tr>

                                    <tr>
                                        <th>Born Date</th>
                                        <td> {{ $patient->born_date }} </td>
                                    </tr>

                                    <tr>
                                        <th>Blood Type</th>
                                        <td> {{ $patient->blood_type }} </td>
                                    </tr>

                                    <tr>
                                        <th>Phone Number</th>
                                        <td> {{ $patient->phone_number }} </td>
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