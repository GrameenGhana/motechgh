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
        <li class="active">Delivery Notification</li>
    </ol>
</section>
@stop

@section('content')

<section class="content invoice">
    <!-- title row -->
    <div class="row">
        <div class="col-xs-12">
            <h2 class="page-header">Add Notification</h2>
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
                            {{ Form::label('motechId','Motech ID') }}
                            {{ Form::text('motechId',Input::old('motechId'),array('class'=>'form-control','placeholder'=>'Enter motech id')) }}
                        </div>



                        <div class="form-group">
                            {{ Form::label('deliverydate','Date of Delivery') }}
                            <div class='input-group date' >
                                {{ Form::text('deliverydate',Input::old('deliverydate'),array('class'=>'form-control','placeholder'=>'Enter delivery date')) }}
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>

                        
                       


                    </fieldset>
                </div>
            </div>
        </div>


    </div>

    <div class="row">
        <div class="col-xs-6">
            <div class="box-footer">
                {{ Form::submit('Add Notification',array('class'=>'btn btn-primary')) }}
            </div>
        </div>
    </div>
    {{ Form::close() }}

</section>
@stop                            
@section('script')
<script>
  
    $('#deliverydate').datepicker();
</script>
@stop