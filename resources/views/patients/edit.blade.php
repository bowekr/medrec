@extends('layouts.application')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Record {{ $patient->id }}</div>
                    <div class="panel-body">

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($patient, [
                            'method' => 'PATCH',
                            'url' => ['/patients', $patient->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('patients.form', ['submitButtonText' => 'Update'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('assetsInclude')
    <script>
        $(document).ready(function() {
            $('#born_date').datepicker();
        })
    </script>
@endsection