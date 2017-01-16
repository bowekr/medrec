<div class="form-group {{ $errors->has('patient_id') ? 'has-error' : ''}}">
    {!! Form::label('patient_id', 'Patient Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <select class="form-control" id="patient_id" name="patient_id">
        @foreach ($patients as $patient)
          <option value={{$patient->id}}>{{$patient->id}} - {{$patient->name}}</option>
        @endforeach
        </select>
    </div>
</div>
<div class="form-group {{ $errors->has('doctor_id') ? 'has-error' : ''}}">
    {!! Form::label('doctor_id', 'Doctor Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <select class="form-control" id="doctor_id" name="doctor_id">
        @foreach ($doctors as $doctor)
          <option value={{$doctor->id}}>{{$doctor->id}} - {{$doctor->name}}</option>
        @endforeach
        </select>
    </div>
</div>
<div class="form-group {{ $errors->has('keluhan') ? 'has-error' : ''}}">
    {!! Form::label('keluhan', 'Keluhan', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('keluhan', null, ['class' => 'form-control']) !!}
        {!! $errors->first('keluhan', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('diagnosa') ? 'has-error' : ''}}">
    {!! Form::label('diagnosa', 'Diagnosa', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('diagnosa', null, ['class' => 'form-control']) !!}
        {!! $errors->first('diagnosa', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('penanganan') ? 'has-error' : ''}}">
    {!! Form::label('penanganan', 'Penanganan', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('penanganan', null, ['class' => 'form-control']) !!}
        {!! $errors->first('penanganan', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>