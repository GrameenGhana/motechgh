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
        <li><a href="{{ URL::to('patients') }}"><i class="fa fa-users"></i> Patients</a></li>
        <li class="active">Delivery</li>
    </ol>
</section>
@stop

@section('content')

<section class="content invoice">
    <!-- title row -->
    <div class="row">
        <div class="col-xs-12">
            <h2 class="page-header">Add Delivery</h2>
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
                            {{ Form::label('deliverydate','Delivery Date') }}
                            <div class='input-group date' >
                                {{ Form::text('deliverydate',Input::old('deliverydate'),array('class'=>'form-control','placeholder'=>'Enter delivery date')) }}
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                        
                        
                         <div class="form-group">
                            <label for="deliverymode">Delivery Mode</label>
                            <select class="form-control" id="deliverymode" name="deliverymode">
                                <option value="">Select Mode</option>
                                <option value="today">Normal</option>
                                <option value="16">C-Section</option>
                                <option value="17">Vacuum</option>
                                <option value="17">Forceps</option>

                            </select>

                        </div>
                        
                         <div class="form-group">
                            <label for="deliveryoutcome">Delivery Outcome</label>
                            <select class="form-control" id="deliverymode" name="deliveryoutcome">
                                <option value="">Select Outcome</option>
                                <option value="today">Singleton</option>
                                <option value="16">Twins</option>
                                <option value="17">Triplets</option>
                                <option value="17">Forceps</option>

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
                            <label for="location">Location</label>
                            <select class="form-control" id="location" name="location">
                                <option value="">Select One</option>
                                <option value="today">Gov't HC/HP</option>
                                <option value="16">Teaching Hospital</option>
                                <option value="16">Gov't Hospital</option>
                                <option value="16">Private Hospital</option>
                                <option value="16">CHAG</option>
                                <option value="16">Quasi-gov't institute</option>
                                <option value="16">Mines</option>
                                <option value="16">Home</option>
                            </select>

                        </div>
                        
                        <div class="form-group">
                            <label for="deliveredby">Delivered By</label>
                            <select class="form-control" id="deliveredby" name="deliveredby">
                                <option value="">Select One</option>
                                <option value="today">Doctor</option>
                                <option value="16">Medical Assistant</option>
                                <option value="16">Midwife -private</option>
                                <option value="16">Midwife - gov't</option>
                                <option value="16">CHO or CHN</option>
                                <option value="16">Trained TBA</option>
                                <option value="16">Untrained TBA</option>
                                <option value="16">Friend or relative</option>
                            </select>

                        </div>
                        
                         <div class="form-group">
                            <label for="complications">Complications</label>
                            <select class="form-control" id="complications" name="complications">
                                <option value="">Select One</option>
                                <option value="today">Eclampsia</option>
                                <option value="16">Puerperal inf/spsis</option>
                                <option value="16">PPH</option>
                                <option value="16">Ruptured uterus</option>
                                <option value="16">Cardiac arrest</option>
                                <option value="16">VVF</option>
                                <option value="16">Drop foot</option>
                                <option value="16">Peurperal psychosis</option>
                            </select>

                        </div>
                        
                        <div class="form-group">
                            <label for="matenaldeath">Maternal Death?</label>
                            <select class="form-control" id="matenaldeath" name="matenaldeath">
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
                {{ Form::submit('Add Delivery',array('class'=>'btn btn-primary')) }}
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