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
        <li class="active">Register</li>
    </ol>
</section>
@stop

@section('content')

<section class="content invoice">
    <!-- title row -->
    <div class="row">
        <div class="col-xs-12">
            <h2 class="page-header">Add a Client</h2>
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
                            {{ Form::label('regd','Registration Date') }}
                            <div class='input-group date' >
                                {{ Form::text('regd',Input::old('regd'),array('class'=>'form-control','placeholder'=>'Enter registration date')) }}
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="age">Registration Mode</label>
                            <select class="form-control" id="age" name="age">
                                <option value="">Select Mode</option>
                                <option value="today">Pre-printed ID</option>
                                <option value="16">Auto-generated ID</option>

                            </select>

                        </div>


                        <div class="form-group">
                            <label for="clienttype">Client Type</label>
                            <select class="form-control" id="clienttype" name="clienttype">
                                <option value="">Select Type</option>
                                <option value="today">Pregnant mother</option>
                                <option value="16">Child Under 5</option>
                                <option value="17">Mother of Infant</option>
                                 <option value="17">Other</option>

                            </select>

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
                            {{ Form::label('dob','Date of Birth') }}
                            <div class='input-group date' >
                                {{ Form::text('dob',Input::old('dob'),array('class'=>'form-control','placeholder'=>'Enter date of birth')) }}
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="esdob">Estimated DOB</label>
                            <select class="form-control" id="age" name="age">
                                <option value="">Select One</option>
                                <option value="today">Estimated DOB</option>
                                <option value="16">Exact DOB</option>

                            </select>

                        </div>
                        
                         <div class="form-group">
                            <label for="insured">Insured?</label>
                            <select class="form-control" id="insured" name="insured">
                                <option value="">Select One</option>
                                <option value="today">Yes</option>
                                <option value="16">No</option>

                            </select>

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
                            <label for="region">Region</label>
                            <select class="form-control" id="region" name="region">
                                <option value="">Select Region</option>
                                <option value="Ashanti">Ashanti</option>
                                <option value="Brong Ahafo">Brong Ahafo</option>
                                <option value="Central">Central</option>
                                <option value="Eastern">Eastern</option>
                                <option value="Greater Accra">Greater Accra</option>
                                <option value="Northern">Northern</option>
                                <option value="Upper East">Upper East</option>
                                <option value="Upper West">Upper West</option>
                                <option value="Volta">Volta</option>
                                <option value="Western">Western</option>

                            </select>

                        </div>

                        <div class="form-group">
                            {{ Form::label('address','Address') }}
                            {{ Form::text('address',Input::old('address'),array('class'=>'form-control','placeholder'=>'Enter address')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('contactnumber','Contact Number') }}
                            {{ Form::text('contactnumber',Input::old('contactnumber'),array('class'=>'form-control','placeholder'=>'Enter contactnumber')) }}
                        </div>
                        
                        <div class="form-group">
                            <label for="emm">Enrol to Mobile Midwife?</label>
                            <select class="form-control" id="emm" name="emm">
                                <option value="">Select One</option>
                                <option value="today">Yes</option>
                                <option value="16">No</option>

                            </select>

                        </div>
                        
                         <div class="form-group">
                            <label for="consent">Consent?</label>
                            <select class="form-control" id="consent" name="consent">
                                <option value="">Select One</option>
                                <option value="today">Yes</option>
                                <option value="16">No</option>

                            </select>

                        </div>

                    </fieldset>
                </div>
            </div>
        </div>


    </div>

    <div class="row">
        <div class="col-xs-6">
            <div class="box-footer">
                {{ Form::submit('Register Client',array('class'=>'btn btn-primary')) }}
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