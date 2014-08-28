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
        <li class="active">PNC Mother</li>
    </ol>
</section>
@stop

@section('content')

<section class="content invoice">
    <!-- title row -->
    <div class="row">
        <div class="col-xs-12">
            <h2 class="page-header">Add PNC Mother</h2>
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
                            <label for="vitaminA">Vitamin A</label>
                            <select class="form-control" id="vitaminA" name="vitaminA">
                                <option value="">Select One</option>
                                <option value="today">No</option>
                                <option value="16">Blue</option>
                                <option value="17">Red</option>

                            </select>

                        </div>
                        
                        <div class="form-group">
                            <label for="tt">TT</label>
                            <select class="form-control" id="tt" name="tt">
                                <option value="">Select One</option>
                                <option value="today">No TT on this visit</option>
                                <option value="16">TT 1</option>
                                <option value="17">TT 2</option>
                                <option value="17">TT 3</option>
                                <option value="17">TT 4</option>
                                <option value="17">TT 5</option>
                            </select>

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
                            <label for="maleinvolve">Lochia Colour</label>
                            <select class="form-control" id="maleinvolve" name="maleinvolve">
                                <option value="">Select One</option>
                                <option value="today">Red(Lochia rubra)</option>
                                <option value="16">Pink/brownish </option>
                                <option value="16">White (Lochia alba) </option>
                                <option value="16">Red-green tinge </option>
                                <option value="16">Pink/brown-green tinge </option>
                                <option value="16">White/yellow-green tinge </option>
                            </select>

                        </div>

                        
                        <div class="form-group">
                            <label for="lochiaodour">Lochia Odour</label>
                            <select class="form-control" id="lochiaodour" name="lochiaodour">
                                <option value="">Select Condition</option>
                                <option value="today">Normal</option>
                                <option value="16">Foul-smelling</option>

                            </select>

                        </div>
                        
                        <div class="form-group">
                            <label for="lochiaamount">Lochia Amount</label>
                            <select class="form-control" id="lochiaamount" name="lochiaamount">
                                <option value="">Select Amount</option>
                                <option value="today">Excess</option>
                                <option value="16">Normal</option>

                            </select>

                        </div>
                        
                        <div class="form-group">
                            {{ Form::label('temperature','Temperature(C)') }}
                            {{ Form::text('temperature',Input::old('temperature'),array('class'=>'form-control','placeholder'=>'Enter temperature')) }}
                        </div>
                        
                        <div class="form-group">
                            {{ Form::label('fht','FHt (cm)') }}
                            {{ Form::text('fht',Input::old('fht'),array('class'=>'form-control','placeholder'=>'Enter fht in cm')) }}
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
                {{ Form::submit('Add PNC Mother',array('class'=>'btn btn-primary')) }}
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