
<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
       {!! Form::text('name', null, [ 'class' => "form-control"]) !!}
    </div>
</div>

<div class="form-group {{ $errors->has('gender') ? 'has-error' : ''}}">
    {!! Form::label('gender', 'Gender', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('gender', [
            'Male' => 'Male',
            'Female' => 'Female'
        ], null, [

            'class' => 'form-control'
        ]) !!}
    </div>
</div>

<div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
    {!! Form::label('address', 'Address', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
       {!! Form::textarea('address', null, [ 'class' => "form-control"]) !!}
    </div>
</div>

<div class="form-group {{ $errors->has('born_date') ? 'has-error' : ''}}">
    {!! Form::label('born_date', 'Born Date', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
       {!! Form::text('born_date', null, [ 'class' => "form-control"]) !!}
    </div>
</div>

<div class="form-group {{ $errors->has('phone_number') ? 'has-error' : ''}}">
    {!! Form::label('phone_number', 'Phone Number', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
       {!! Form::text('phone_number', null, [ 'class' => "form-control"]) !!}
    </div>
</div>

<div class="form-group {{ $errors->has('blood_type') ? 'has-error' : ''}}">
    {!! Form::label('blood_type', 'blood_type', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
       {!! Form::select('blood_type', [
                                       'O' => 'O',
                                       'A' => 'A',
                                       'AB' => 'AB'
                                   ], null, [
                                       'class' => 'form-control'
                                   ]) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">

        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>