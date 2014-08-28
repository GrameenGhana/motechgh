@extends('layouts.master')

@section('head')
@parent
{{ HTML::style('css/datatables/dataTables.bootstrap.css'); }}
@stop

@section('content-header')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1> <i class="fa fa-users"></i> Patients <small>Control panel</small> </h1>
    <ol class="breadcrumb">
        <li><a href="{{ URL::to('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ URL::to('users') }}"><i class="fa fa-users"></i> Patients</a></li>
        <li class="active">PNC Baby</li>
    </ol>
</section>
@stop

@section('content')

<section class="content invoice">
    <!-- title row -->
    <div class="row">
        <div class="col-xs-12">
            <h2 class="page-header">Add PNC Baby</h2>
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
                            {{ Form::label('visitd','Visit Date') }}
                            <div class='input-group date' >
                                {{ Form::text('visitd',Input::old('visitd'),array('class'=>'form-control','placeholder'=>'Enter visit date')) }}
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
                            <label for="visitnumber">Visit Number</label>
                            <select class="form-control" id="visitnumber" name="visitnumber">
                                <option value="">Select Number</option>
                                <option value="today">PNC 1</option>
                                <option value="16">PNC 2</option>
                                <option value="17">PNC 3</option>

                            </select>

                        </div>

                        <div class="form-group">
                            {{ Form::label('weight','Weight (Kg)') }}
                            {{ Form::text('weight',Input::old('weight'),array('class'=>'form-control','placeholder'=>'Enter weight in kg')) }}
                        </div>


                        <div class="form-group">
                            {{ Form::label('temperature','Temperature(C)') }}
                            {{ Form::text('temperature',Input::old('temperature'),array('class'=>'form-control','placeholder'=>'Enter temperature')) }}
                        </div>
                        
                        <div class="form-group">
                            <label for="location">Location</label>
                            <select class="form-control" id="location" name="location">
                                <option value="">Select Location</option>
                                <option value="today">Facility or Clinic</option>
                                <option value="16">Home</option>
                                <option value="17">Outreach</option>

                            </select>

                        </div>
                        
                        <div class="form-group">
                            <label for="referred">Referred?</label>
                            <select class="form-control" id="referred" name="referred">
                                <option value="">Select One</option>
                                <option value="today">Yes</option>
                                <option value="16">No</option>

                            </select>

                        </div>
                        
                        <div class="form-group">
                            <label for="maleinvolve">Male Involvement?</label>
                            <select class="form-control" id="maleinvolve" name="maleinvolve">
                                <option value="">Select One</option>
                                <option value="today">Yes</option>
                                <option value="16">No</option>

                            </select>

                        </div>

                        <div class="form-group">
                            {{ Form::label('respiration','Respiration') }}
                            {{ Form::text('respiration',Input::old('respiration'),array('class'=>'form-control','placeholder'=>'Enter respiration')) }}
                        </div>
                        
                        <div class="form-group">
                            <label for="cordcondition">Cord Condition</label>
                            <select class="form-control" id="cordcondition" name="cordcondition">
                                <option value="">Select Condition</option>
                                <option value="today">Normal</option>
                                <option value="16">Abnormal</option>

                            </select>

                        </div>
                        
                        <div class="form-group">
                            <label for="babycondition">Baby Condition</label>
                            <select class="form-control" id="babycondition" name="babycondition">
                                <option value="">Select Condition</option>
                                <option value="today">Good</option>
                                <option value="16">Bad</option>

                            </select>

                        </div>
                        
                         <div class="form-group">
                            <label for="bcg">BCG?</label>
                            <select class="form-control" id="bcg" name="bcg">
                                <option value="">Select One</option>
                                <option value="today">Yes</option>
                                <option value="16">No</option>

                            </select>

                        </div>
                        
                        <div class="form-group">
                            <label for="opv">OPV?</label>
                            <select class="form-control" id="opv" name="opv">
                                <option value="">Select One</option>
                                <option value="today">Yes</option>
                                <option value="16">No</option>

                            </select>

                        </div>

                         <div class="form-group">
                            {{ Form::label('comments','Comments') }}
                            {{ Form::text('comments',Input::old('comments'),array('class'=>'form-control','placeholder'=>'Enter comments')) }}
                        </div>

                    </fieldset>
                </div>
            </div>
        </div>


    </div>

    <div class="row">
        <div class="col-xs-6">
            <div class="box-footer">
                {{ Form::submit('Add PNC Baby',array('class'=>'btn btn-primary')) }}
            </div>
        </div>
    </div>
    {{ Form::close() }}

</section>
@stop                            
@section('script')
<script>
   
    $('#visitd').datepicker();
</script>
@stop