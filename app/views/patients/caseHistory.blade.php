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
        <li class="active">Case History</li>
    </ol>
</section>
@stop

@section('content')

<section class="content invoice">
    <!-- title row -->
    <div class="row">
        <div class="col-xs-12">
            <h2 class="page-header">Add Case History</h2>
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
                            <label for="addhistory">Add History?</label>
                            <select class="form-control" id="addhistory" name="addhistory">
                                <option value="">Select One</option>
                                <option value="today">IPT</option>
                                <option value="16">TT</option>
                                <option value="16">Vit A(Ch)</option>
                                <option value="16">IPTi(Ch)</option>
                                <option value="16">BCG</option>
                                <option value="16">OPV</option>
                                <option value="16">Measles</option>
                                <option value="16">YF</option>
                                <option value="16">Rotavirus</option>
                                <option value="16">Pneumococcal</option>

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
                {{ Form::submit('Add Case History',array('class'=>'btn btn-primary')) }}
            </div>
        </div>
    </div>
    {{ Form::close() }}

</section>
@stop                            
@section('script')
<script>
    
    $('#date').datepicker();
</script>
@stop