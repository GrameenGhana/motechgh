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
        <li class="active">Out Patients Visit</li>
    </ol>
</section>
@stop

@section('content')

<section class="content invoice">
    <!-- title row -->
    <div class="row">
        <div class="col-xs-12">
            <h2 class="page-header">Add a Visit</h2>
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
                            {{ Form::label('serialnumber','Serial Number') }}
                            {{ Form::text('serialnumber',Input::old('serialnumber'),array('class'=>'form-control','placeholder'=>'Enter serial number')) }}
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
                            <label for="regist">Registered?</label>
                            <select class="form-control" id="regist" name="regist">
                                <option value="">Select One</option>
                                <option value="today">Yes</option>
                                <option value="16">No</option>

                            </select>

                        </div>
                        
                        <div class="form-group">
                            {{ Form::label('motechId','Motech ID') }}
                            {{ Form::text('motechId',Input::old('motechId'),array('class'=>'form-control','placeholder'=>'Enter motech id')) }}
                        </div>
                        
                        <div class="form-group">
                            <label for="caseStatus">Case Status?</label>
                            <select class="form-control" id="caseStatus" name="caseStatus">
                                <option value="">Select One</option>
                                <option value="today">New</option>
                                <option value="16">Old</option>

                            </select>

                        </div>
                        
                        <div class="form-group">
                            <label for="clientStatus">Client Status?</label>
                            <select class="form-control" id="clientStatus" name="clientStatus">
                                <option value="">Select One</option>
                                <option value="today">New</option>
                                <option value="16">Old</option>

                            </select>

                        </div>
                        
                        <div class="form-group">
                            <label for="principald">Principal Diagnosis</label>
                            <select class="form-control" id="principald" name="principald">
                                <option value="">Select One</option>
                                <option value="today">Diarrhoea Diseases</option>
                                <option value="16">Malaria(Preg.) - Lab</option>
                                <option value="16">Malaria(Preg.) - Non Lab</option>
                                <option value="16">other ARI</option>
                                <option value="16">Pnueumonia</option>
                                <option value="16">Simple Malaria - Lab</option>
                                <option value="16">Simple Malaria - Non Lab</option>
                                <option value="16">Skin Diseases</option>
                                <option value="16">Other</option>
                                <option value="16">Review</option>

                            </select>

                        </div>
                        
                        <div class="form-group">
                            <label for="additionald">Additional Diagnosis</label>
                            <select class="form-control" id="additionald" name="additionald">
                                <option value="">Select One</option>
                                <option value="today">Diarrhoea Diseases</option>
                                <option value="16">Malaria(Preg.) - Lab</option>
                                <option value="16">Malaria(Preg.) - Non Lab</option>
                                <option value="16">other ARI</option>
                                <option value="16">Pnueumonia</option>
                                <option value="16">Simple Malaria - Lab</option>
                                <option value="16">Simple Malaria - Non Lab</option>
                                <option value="16">Skin Diseases</option>
                                <option value="16">Other</option>
                                <option value="16">Review</option>

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
                {{ Form::submit('Add Visit',array('class'=>'btn btn-primary')) }}
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