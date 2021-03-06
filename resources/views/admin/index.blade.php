@extends('layouts.application')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">Users</div>
                <div class="panel-body">

                    <a href="{{ url('/admin/create') }}" class="btn btn-primary btn-xs" title="Add new User"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name </th>
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
                                    <td>
                                        <a href="{{ url('/admin/' . $item->id) }}" class="btn btn-success btn-xs" title="View admin"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                        <a href="{{ url('/admin/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit admin"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                        {!! Form::open([
                                            'method'=>'DELETE',
                                            'url' => ['/admin', $item->id],
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
                        <div class="pagination-wrapper"> {!! $users->render() !!} </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection