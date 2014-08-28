@extends('layouts.master')

@section('head')
@parent
{{ HTML::style('css/datatables/dataTables.bootstrap.css'); }}
@stop

@section('content-header')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1> <i class="fa fa-users"></i> Registrations <small>Control panel</small> </h1>
    <ol class="breadcrumb">
        <li><a href="{{ URL::to('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ URL::to('users') }}"><i class="fa fa-users"></i> Clients</a></li>
        <li class="active">Edit Client</li>
    </ol>
</section>
@stop

@section('content')

<section class="content invoice">
    <!-- title row -->
    <div class="row">
        <div class="col-xs-12">
            <h2 class="page-header">Edit Client</h2>
        </div><!-- /.col -->
    </div>

    @if(Session::has('flash_error'))
    <div class="row">
        <div class="col-xs-12">
            <div class="callout callout-danger">
                <h4>Error!</h4> <br/>
                {{ HTML::ul($errors->all()) }}
            </div>
        </div>
    </div>
    @endif

    {{ Form::open(array('url'=> 'users','method'=>'post')) }}
    <div class="row">
        <div class="col-md-8">
            <div class="box box-primary">
                <div class="box-body">
                    <fieldset>

                        <div class="form-group">
                            {{ Form::label('staffId','Staff ID') }}
                            {{ Form::text('staffId',Input::old('staffId'),array('class'=>'form-control','placeholder'=>'Enter staff id')) }}
                        </div>


                        <div class="form-group">
                            {{ Form::label('facilityId','Facility ID') }}
                            {{ Form::text('facilityId',Input::old('facilityId'),array('class'=>'form-control','placeholder'=>'Enter facility id')) }}
                        </div>
                        
                         <div class="form-group">
                            {{ Form::label('date','Date') }}
                            <div class='input-group date' >
                                {{ Form::text('date',Input::old('date'),array('class'=>'form-control','placeholder'=>'Enter date')) }}
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            {{ Form::label('motechId','Motech ID') }}
                            {{ Form::text('motechId',Input::old('motechId'),array('class'=>'form-control','placeholder'=>'Enter motech id')) }}
                        </div>
                        
                         <div class="form-group">
                            {{ Form::label('patientfacilityId','Patient Facility ID') }}
                            {{ Form::text('patientfacilityId',Input::old('patientfacilityId'),array('class'=>'form-control','placeholder'=>'Enter patient facility id')) }}
                        </div>


                        <div class="form-group">
                            {{ Form::label('firstname','Frist Name') }}
                            {{ Form::text('firstname',Input::old('firstname'),array('class'=>'form-control','placeholder'=>'Enter first name')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('middlename','Middle Name') }}
                            {{ Form::text('middlename',Input::old('middlename'),array('class'=>'form-control','placeholder'=>'Enter middle name')) }}
                        </div>
                        
                         <div class="form-group">
                            {{ Form::label('lastname','Last Name') }}
                            {{ Form::text('lastname',Input::old('lastname'),array('class'=>'form-control','placeholder'=>'Enter last name')) }}
                        </div>
                        
                         <div class="form-group">
                            {{ Form::label('phonenumber','Phone Number') }}
                            {{ Form::text('phonenumber',Input::old('phonenumber'),array('class'=>'form-control','placeholder'=>'Enter phone number')) }}
                        </div>

                        

                        <div class="form-group">
                            {{ Form::label('nhisnumber','NHIS Number') }}
                            {{ Form::text('nhisnumber',Input::old('nhisnumber'),array('class'=>'form-control','placeholder'=>'Enter nhis number')) }}
                        </div>
                        
                        <div class="form-group">
                            {{ Form::label('nhised','NHIS Expiry Date') }}
                            <div class='input-group date' >
                                {{ Form::text('nhised',Input::old('nhised'),array('class'=>'form-control','placeholder'=>'Enter nhis expiry date')) }}
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                        
                        

                        <div class="form-group">
                            {{ Form::label('address','Address') }}
                            {{ Form::text('address',Input::old('address'),array('class'=>'form-control','placeholder'=>'Enter address')) }}
                        </div>

                       

                    </fieldset>
                </div>
            </div>
        </div>


    </div>

    <div class="row">
        <div class="col-xs-6">
            <div class="box-footer">
                {{ Form::submit('Edit Client',array('class'=>'btn btn-primary')) }}
            </div>
        </div>
    </div>
    {{ Form::close() }}

</section>
@stop                            
@section('script')
<script>
    var nowDate = new Date();
    var today = new Date(nowDate.getFullYear(), nowDate.getMonth(), nowDate.getDate(), 0, 0, 0, 0);

    $('#edd').datepicker({
        startDate: today
    });
    
    $('#dob').datepicker({
        endDate: today
    });
    
    $('#regd').datepicker();
</script>
@stop