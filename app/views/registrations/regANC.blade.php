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
        <li class="active">Register ANC</li>
    </ol>
</section>
@stop

@section('content')

<section class="content invoice">
    <!-- title row -->
    <div class="row">
        <div class="col-xs-12">
            <h2 class="page-header">Register ANC</h2>
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
                            <label for="ancregToday">ANC Registration Today</label>
                            <select class="form-control" id="ancregToday" name="ancregToday">
                                <option value="">Select Mode</option>
                                <option value="today">Today</option>
                                <option value="16">In the past</option>
                                 <option value="16">In the past in other facility</option>

                            </select>

                        </div>
                        
                        <div class="form-group">
                            {{ Form::label('motechId','Motech ID') }}
                            {{ Form::text('motechId',Input::old('motechId'),array('class'=>'form-control','placeholder'=>'Enter motech id')) }}
                        </div>
                        
                        <div class="form-group">
                            {{ Form::label('serialnumber','Serial Number') }}
                            {{ Form::text('serialnumber',Input::old('serialnumber'),array('class'=>'form-control','placeholder'=>'Enter serial number')) }}
                        </div>
                        
                        <div class="form-group">
                            {{ Form::label('edd','EDD') }}
                            <div class='input-group date' >
                                {{ Form::text('edd',Input::old('edd'),array('class'=>'form-control','placeholder'=>'Enter expected date of delivery')) }}
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="ddc">Delivery Date Confrimation</label>
                            <select class="form-control" id="ddc" name="ddc">
                                <option value="">Select One</option>
                                <option value="today">Yes</option>
                                <option value="16">No</option>

                            </select>

                        </div>



                        <div class="form-group">
                            {{ Form::label('height','Height (cm)') }}
                            {{ Form::text('height',Input::old('height'),array('class'=>'form-control','placeholder'=>'Enter height')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('gravida','Gravida') }}
                            {{ Form::text('gravida',Input::old('gravida'),array('class'=>'form-control','placeholder'=>'Enter gravida')) }}
                        </div>
                        
                         <div class="form-group">
                            {{ Form::label('gravity','Gravity') }}
                            {{ Form::text('gravity',Input::old('gravity'),array('class'=>'form-control','placeholder'=>'Enter gravity')) }}
                        </div>

                        
                        <div class="form-group">
                            <label for="addhistory">Add History?</label>
                            <select class="form-control" id="addhistory" name="addhistory">
                                <option value="">Select One</option>
                                <option value="today">Yes</option>
                                <option value="16">No</option>

                            </select>

                        </div>
                        
                        <div class="form-group">
                            <label for="addcarehistory">Add Care History?</label>
                            <select class="form-control selectpicker" id="addcarehistory" name="addcarehistory" multiple>
                                <option value="">Select One</option>
                                <option value="today">IPT</option>
                                <option value="16">TT</option>
                                <option value="16">HB Levels</option>
                                <option value="16">VITA A</option>
                                <option value="16">Mother Iron or Folate</option>
                                <option value="16">Syphilis</option>
                                <option value="16">Malaria</option>
                                <option value="16">Diarrhoea</option>
                                <option value="16">Pneumonia</option>
                            </select>

                        </div>
                       
                        <div class="form-group">
                            <label for="emm">Enrol to Mobile Midwife?</label>
                            <select class="form-control" id="emm" name="emm">
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
                {{ Form::submit('Register ANC',array('class'=>'btn btn-primary')) }}
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
    
@stop