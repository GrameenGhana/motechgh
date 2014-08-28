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
        <li class="active">Pregnancy Termination</li>
    </ol>
</section>
@stop

@section('content')

<section class="content invoice">
    <!-- title row -->
    <div class="row">
        <div class="col-xs-12">
            <h2 class="page-header">Add Pregnancy Termination</h2>
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
                            {{ Form::label('terminaiondate','Termission Date') }}
                            <div class='input-group date' >
                                {{ Form::text('terminaiondate',Input::old('terminaiondate'),array('class'=>'form-control','placeholder'=>'Enter termination date')) }}
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
                            <label for="type">Type</label>
                            <select class="form-control" id="type" name="type">
                                <option value="">Select One</option>
                                <option value="today">Effective</option>
                                <option value="16">Spontaneous</option>
                                <option value="16">Induced (unsafe)</option>

                            </select>

                        </div>

                        <div class="form-group">
                            <label for="procedure">Procedure</label>
                            <select class="form-control" id="procedure" name="procedure">
                                <option value="">Select One</option>
                                <option value="today">None</option>
                                <option value="16">D and C</option>
                                <option value="16">MVA</option>
                                <option value="16">EOU</option>
                                <option value="16">Other</option>

                            </select>

                        </div>

                        <div class="form-group">
                            <label for="complications">Complications</label>
                            <select class="form-control" id="complications" name="complications">
                                <option value="">Select One</option>
                                <option value="today">Bleeding</option>
                                <option value="16">Sepsis/Infection</option>
                                <option value="16">Perforations</option>

                            </select>

                        </div>


                        <div class="form-group">
                            <label for="maternaldeath">Maternal Death</label>
                            <select class="form-control" id="maternaldeath" name="maternaldeath">
                                <option value="">Select One</option>
                                <option value="today">Yes</option>
                                <option value="16">No</option>

                            </select>

                        </div>
                        
                        <div class="form-group">
                            <label for="referred">Referred</label>
                            <select class="form-control" id="referred" name="referred">
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
                {{ Form::submit('Add Pregnancy Termination',array('class'=>'btn btn-primary')) }}
            </div>
        </div>
    </div>
    {{ Form::close() }}

</section>
@stop                            
@section('script')
<script>
    
    $('#terminaiondate').datepicker();
</script>
@stop