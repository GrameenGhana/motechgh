@extends('layouts.master')

@section('head')
   @parent
   {{ HTML::style('css/datatables/dataTables.bootstrap.css'); }}
@stop


@section('content-header')
   <!-- Content Header (Page header) -->
   <section class="content-header">
        <h1> <i class="fa fa-users"></i> Users <small>Control panel</small> </h1>
        <ol class="breadcrumb">
            <li><a href="{{ URL::to('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Users</li>
        </ol>
   </section>
@stop

@section('content')

   <section class="content invoice">
        
        <div class="row">
            <div class="col-xs-12">
                <h2 class="page-header">
                    <a class="btn btn-small btn-success" href="{{ URL::to('users/create') }}"><i class="fa fa-plus-circle"></i> Add a User</a>
                </h2>
            </div><!-- /.col -->
        </div>
                                                           
        @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif

        <section class="content">
            <div class="box">
                <div class="box-header">
                </div><!-- /.box-header -->
                                
                <div class="box-body table-responsive">
                    <table id="userstable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Name</th>
                                <th>Role</th>
                                <th>Updated</th>
                                <th>Modified By</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $k => $value)
                            <tr>
                                <td> {{ $value->username }} </td>
                                <td> {{ $value->getName() }} </td>
                                <td> {{ $value->role }} </td>
                                <td> {{ date('M d, Y',strtotime($value->updated_at)) }} </td>
                                <td> {{ $value->modifier->username }} </td>
                                <td>
                                    <a title="Edit" class="btn btn-sm btn-info" href="{{ URL::to('users/' . $value->id . '/edit') }}"><i class="fa fa-pencil"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
@stop


@section('script')
    <script type="text/javascript">
            $(function() {
                $('#userstable').dataTable({
                    "bPaginate": true,
                    "bLengthChange": true,
                    "bFilter": true,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false,
                    "iDisplayLength": 100
                                    });
            });
        </script>
@stop
