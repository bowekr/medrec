@extends('layouts.application')

@section('content')
	<div class="row">
		@if ($authUserRole === "apoteker" || $authUserRole === "admin")
		  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
		    <a href={{ url('medicines') }} class="card card-banner card-green-light">
		      <div class="card-body">
		        <i class="icon fa fa-medkit fa-4x"></i>
		        <div class="content">
		          <div class="title">Total Medicines</div>
		          <div class="value">{{ $medicines_count }}</div>
		        </div>
		      </div>
		    </a>
		  </div>

		 {{ $medicines_count }}
	  @endif



		  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
		    <a href={{ url('patients') }} class="card card-banner card-yellow-light">
		      <div class="card-body">
		        <i class="icon fa fa-plus-square fa-4x"></i>
		        <div class="content">
		          <div class="title">Total Patients</div>
		          <div class="value">{{ $patients_count }}</div>
		        </div>
		      </div>
		    </a>
		  </div>


		@if ($authUserRole === "admin")
		  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
		    <a href={{ url('doctors') }} class="card card-banner card-blue-light">
		      <div class="card-body">
		        <i class="icon fa fa-stethoscope fa-4x"></i>
		        <div class="content">
		          <div class="title">Total Doctors</div>
		          <div class="value">{{ $doctors_count }}</div>
		        </div>
		      </div>
		    </a>
		  </div>
	  @endif


		@if ($authUserRole === "doctor" || $authUserRole === "admin")
		  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
		    <a href={{ url('record') }} class="card card-banner card-green-light">
		      <div class="card-body">
		        <i class="icon fa fa-stethoscope fa-4x"></i>
		        <div class="content">
		          <div class="title">Medical Record</div>
		          <div class="value">{{ $records_count }}</div>
		        </div>
		      </div>
		    </a>
		  </div>
	  @endif

	  @if ($authUserRole === "admin")
	  	<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
	  	  <a href={{ url('admin') }} class="card card-banner card-green-light">
	  	    <div class="card-body">
	  	      <i class="icon fa fa-user fa-4x"></i>
	  	      <div class="content">
	  	        <div class="title">Manage Users</div>
	  	        <div class="value"></div>
	  	      </div>
	  	    </div>
	  	  </a>
	  	</div>
	  @endif
	</div>
@endsection