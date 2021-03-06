<!DOCTYPE html>
<html>
    <head>
    @section('head')

        <meta charset="UTF-8">
        <title>Motech Ghana Admin Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        {{ HTML::style('css/bootstrap.min.css'); }} 
        {{ HTML::style('css/bootstrap-select.css'); }} 
        <!-- font Awesome -->
        {{ HTML::style('css/font-awesome.min.css'); }} 
        <!-- Ionicons -->
        {{ HTML::style('css/ionicons.min.css'); }} 
        <!-- Morris chart -->
        {{ HTML::style('css/morris/morris.css'); }} 
        <!-- jvectormap -->
        {{ HTML::style('css/jvectormap/jquery-jvectormap-1.2.2.css'); }} 
        <!-- fullCalendar -->
        {{ HTML::style('css/fullcalendar/fullcalendar.css'); }} 
        <!-- Daterange picker -->
        {{ HTML::style('css/daterangepicker/daterangepicker-bs3.css'); }} 
        <!-- bootstrap wysihtml5 - text editor -->
        {{ HTML::style('css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'); }} 
        <!-- Theme style -->
        {{ HTML::style('css/AdminLTE.css'); }}
        <!-- DatePicker -->
         {{ HTML::style('css/datepicker.css'); }} 

        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

    @show
    </head>

    <body class="skin-blue">
        <header class="header">
            <a href="/" class="logo">Motech Ghana Admin</a>

            <nav class="navbar navbar-static-top" role="navigation">
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">

                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>{{{ Auth::user()->getName() }}}<i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    {{ HTML::image('img/avatar3.png','User Image',array('class'=>'img-circle')); }}
                                    <p>
                                        {{{ Auth::user()->getName() }}} ({{{Auth::user()->username}}})
                                        <small>{{{ ucfirst(Auth::user()->role) }}}</small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="{{ URL::to('users/'.Auth::user()->id.'/edit') }}" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="{{ URL::to('logout') }}" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                             {{ HTML::image('img/avatar3.png','User Image',array('class'=>'img-circle')); }}
                        </div>
                        <div class="pull-left info">
                            <p>Hello, {{{ Auth::user()->first_name }}}</p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>

                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="treeview {{ Request::is('/') ? 'active' : '' }}">
                            <a href="{{ URL::to('/') }}">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>

            @if (in_array(strtolower(Auth::user()->role), array('admin','manager')))

                        <li class="treeview {{ (Request::is('regs*')) ? 'active' : '' }}">
                            <a href="#">
                                <i class="fa fa-cogs"></i>
                                <span>Registrations</span>                  
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li class="{{ Request::is('regs/regClient') ? 'active' : '' }}"><a href="{{ URL::to('regs/regClient') }}"><i class="fa fa-users"></i>Register Client</a></li>
                                <li class="{{ Request::is('regs/regANC') ? 'active' : '' }}"><a href="{{ URL::to('regs/regANC') }}"><i class="fa fa-users"></i>Register ANC</a></li>
                                <li class="{{ Request::is('regs/regCWC') ? 'active' : '' }}"><a href="{{ URL::to('regs/regCWC') }}"><i class="fa fa-users"></i>Register CWC</a></li>
                                <li class="{{ Request::is('regs/editClient') ? 'active' : '' }}"><a href="{{ URL::to('regs/editClient') }}"><i class="fa fa-users"></i>Edit Client</a></li>
                            </ul>
                            
                        </li>
                        <li class="treeview {{ (Request::is('patients*')) ? 'active' : '' }}">
                            <a href="#">
                                <i class="fa fa-cogs"></i>
                                <span>Patients</span>                  
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li class="{{ Request::is('patients/outPatientVisit') ? 'active' : '' }}"><a href="{{ URL::to('patients/outPatientVisit') }}"><i class="fa fa-users"></i>Outpatient Visit</a></li>
                                <li class="{{ Request::is('patients/ANCVisit') ? 'active' : '' }}"><a href="{{ URL::to('patients/ANCVisit') }}"><i class="fa fa-users"></i>ANC Visit</a></li>
                                <li class="{{ Request::is('patients/CWCVisit') ? 'active' : '' }}"><a href="{{ URL::to('patients/CWCVisit') }}"><i class="fa fa-users"></i>CWC Visit</a></li>
                                <li class="{{ Request::is('patients/delivery') ? 'active' : '' }}"><a href="{{ URL::to('patients/delivery') }}"><i class="fa fa-users"></i>Delivery</a></li>
                                <li class="{{ Request::is('patients/deliveryNotification') ? 'active' : '' }}"><a href="{{ URL::to('patients/deliveryNotification') }}"><i class="fa fa-users"></i>Delivery Notification</a></li>
                                <li class="{{ Request::is('patients/PNCBaby') ? 'active' : '' }}"><a href="{{ URL::to('patients/PNCBaby') }}"><i class="fa fa-users"></i>PNC(baby)</a></li>
                                <li class="{{ Request::is('patients/PNCMother') ? 'active' : '' }}"><a href="{{ URL::to('patients/PNCMother') }}"><i class="fa fa-users"></i>PNC (mother)</a></li>
                                <li class="{{ Request::is('patients/caseHistory') ? 'active' : '' }}"><a href="{{ URL::to('patients/caseHistory') }}"><i class="fa fa-users"></i>Case History</a></li>
                                <li class="{{ Request::is('patients/TTNonPregnant') ? 'active' : '' }}"><a href="{{ URL::to('patients/TTNonPregnant') }}"><i class="fa fa-users"></i>TT Non-Pregnant</a></li>
                                <li class="{{ Request::is('patients/pregTermination') ? 'active' : '' }}"><a href="{{ URL::to('patients/pregTermination') }}"><i class="fa fa-users"></i>Pregnancy Termination</a></li>
                                <li class="{{ Request::is('patients/clientDeath') ? 'active' : '' }}"><a href="{{ URL::to('patients/clientDeath') }}"><i class="fa fa-users"></i>Client Death</a></li>
                                
                            </ul>
                            
                        </li>
            @endif          

            @if (strtolower(Auth::user()->role) == 'admin')

                        <li class="treeview {{ (Request::is('users*')) ? 'active' : '' }}">
                            <a href="#">
                                <i class="fa fa-cogs"></i>
                                <span>System Setup</span>
                                                                   
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li class="{{ Request::is('users/*') ? 'active' : '' }}"><a href="{{ URL::to('users') }}"><i class="fa fa-users"></i>Users</a></li>
                                <li class="{{ Request::is('langs/*') ? 'active' : '' }}"><a href="{{ URL::to('langs') }}"><i class="fa fa-flag-o"></i>Languages</a></li>
                            </ul>
                        </li>
            @endif
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
        @yield('content-header')

                <!-- Main content -->
        @yield('content')
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        {{ HTML::script('js/jquery-ui-1.10.3.min.js'); }}
        <!-- Bootstrap -->
        {{ HTML::script('js/bootstrap.min.js'); }}
        {{ HTML::script('js/bootstrap-select.js'); }}
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        {{ HTML::script('js/plugins/morris/morris.min.js'); }}
        <!-- Sparkline -->
        {{ HTML::script('js/plugins/sparkline/jquery.sparkline.min.js'); }}
        <!-- jvectormap -->
        {{ HTML::script('js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'); }}
        {{ HTML::script('js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'); }}
        <!-- fullCalendar -->
        {{ HTML::script('js/plugins/fullcalendar/fullcalendar.min.js'); }}
        <!-- jQuery Knob Chart -->
        {{ HTML::script('js/plugins/jqueryKnob/jquery.knob.js'); }}
        <!-- daterangepicker -->
        {{ HTML::script('js/plugins/daterangepicker/daterangepicker.js'); }}
        <!-- Bootstrap WYSIHTML5 -->
        {{ HTML::script('js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'); }}
        <!-- iCheck -->
        {{ HTML::script('js/plugins/iCheck/icheck.min.js'); }}
        <!-- data tables -->
        {{ HTML::script('js/plugins/datatables/jquery.dataTables.js'); }}
        {{ HTML::script('js/plugins/datatables/dataTables.bootstrap.js'); }}
        <!-- AdminLTE App -->
        {{ HTML::script('js/AdminLTE/app.js'); }}
        <!-- datepicker -->
        {{ HTML::script('js/bootstrap-datepicker.js'); }}

    @yield('script')
    </body>
</html>
