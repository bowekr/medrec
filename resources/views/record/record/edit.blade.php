@extends('layouts.application')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Record {{ $record->id }}</div>
                    <div class="panel-body">

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($record, [
                            'method' => 'PATCH',
                            'url' => ['/record', $record->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('record.record.form', ['submitButtonText' => 'Update', 'doctors' => $doctors])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection