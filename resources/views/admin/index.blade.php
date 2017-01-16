@extends('layouts.application')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Doctors</div>
                <div class="panel-body">

                    <a href="{{ url('/admin/create') }}" class="btn btn-primary btn-xs" title="Add New doctor"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th> Name </th>
                                    <th>Role</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->role }}</td>
                                    <td>{{ $item->email }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection