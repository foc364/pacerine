<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_PRODUCT') }} Admin</title>

    <link rel="shortcut icon" type="image/png" href="{{asset('resources/admin/images/favicon.png')}}"/>
    <!-- Bootstrap -->
    <link href="{{asset('resources/admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('resources/admin/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('resources/admin/css/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('resources/admin/css/green.css')}}" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="{{asset('resources/admin/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('resources/admin/css/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- Custom Theme Style -->
    <link href="{{asset('resources/admin/css/custom.min.css')}}" rel="stylesheet">
    <!-- Datatables -->
    <link href="{{asset('resources/admin/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('resources/admin/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('resources/admin/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('resources/admin/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('resources/admin/css/scroller.bootstrap.min.css')}}" rel="stylesheet">
     <!-- DatePicker -->
    <link href="{{asset('resources/admin/date_picker/css/bootstrap-datepicker3.css')}}" rel="stylesheet">
    <link href="{{asset('resources/admin/date_picker/css/bootstrap-datepicker3.min.css')}}" rel="stylesheet">
    <link href="{{asset('resources/admin/date_picker/css/bootstrap-datepicker3.standalone.css')}}" rel="stylesheet">
    <link href="{{asset('resources/admin/date_picker/css/bootstrap-datepicker3.standalone.min.css')}}" rel="stylesheet">
    <!-- Multselect -->
    <link rel="stylesheet" href="{{asset('resources/admin/css/bootstrap-multiselect.css')}}">

</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="{{ route('home') }}" class="site_title"><i class="fa fa-user-md"></i> <span>{{ env('APP_PRODUCT') }} Admin</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <img src="{{asset('resources/admin/images/user2.png')}}" alt="usuário" class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Bem vindo,</span>
                            <h2>{{ Auth::user()->firstName() }}</h2>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <ul class="nav side-menu">
                                <li><a href="{{route('home')}}"><i class="fa fa-home"></i> Home </a></li>
                                <li><a href="{{route('usuarios.index')}}"><i class="fa fa-users"></i> Usuários </a></li>
                                <li><a href="{{route('consultorios.index')}}"><i class="fa fa-building"></i> Consultórios </a></li>
                                <li><a href="{{route('convenios.index')}}"><i class="fa fa-plus-square"></i> Convênios </a></li>
                                <li><a><i class="fa fa-cog"></i> Edição de Texto <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{route('configuracoes-contato.edit', ['id' => 1])}}">E-mail de contato</a></li>
                                        <li><a href="{{route('configuracoes-quem-somos.edit', ['id' => 1])}}">Texto da seção Sobre</a></li>
                                        <li><a href="{{route('configuracoes-orientacao.edit', ['id' => 1])}}">Texto da seção Orientações</a></li>
                                       
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Home" href="{{route('home')}}">
                            <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Convênios" href="{{route('convenios.index')}}">
                            <span class="glyphicon glyphicon-header" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Usuários" href="{{route('usuarios.index')}}">
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        </a>
                        <?php 
                            $login = Auth::user();

                            if ($login->id_login != 1) {
                        ?>
                        <?php } ?>
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="{{asset('resources/admin/images/user2.png')}}" alt="">{{ Auth::user()->firstName() }}
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li><a href="{{route('logout')}}"><i class="fa fa-sign-out pull-right"></i> Sair</a></li>
                                </ul>
                            </li>


                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
             <!-- jQuery -->
    <script src="{{asset('resources/admin/js/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('resources/admin/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('resources/admin/js/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('resources/admin/js/nprogress.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('resources/admin/js/icheck.min.js')}}"></script>
    <!-- Datatables -->
    <script src="{{asset('resources/admin/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('resources/admin/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('resources/admin/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('resources/admin/js/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('resources/admin/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('resources/admin/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('resources/admin/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('resources/admin/js/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{asset('resources/admin/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('resources/admin/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('resources/admin/js/responsive.bootstrap.js')}}"></script>
    <script src="{{asset('resources/admin/js/dataTables.scroller.min.js')}}"></script>
    <script src="{{asset('resources/admin/js/jszip.min.js')}}"></script>
    <script src="{{asset('resources/admin/js/pdfmake.min.js')}}"></script>
    <script src="{{asset('resources/admin/js/vfs_fonts.js')}}"></script>
    <!-- PhoneHelper -->
    <script src="{{asset('resources/admin/form_helper/js/bootstrap-formhelpers-phone.js')}}"></script>
      <!-- DatePicker -->
    <script src="{{asset('resources/admin/date_picker/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('resources/admin/date_picker/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('resources/admin/date_picker/js/bootstrap-datepicker.pt-BR.min.js')}}"></script>
    <script src="{{asset('resources/admin/js/custom.min.js')}}"></script>
    <!-- Multselect -->
    <script type="text/javascript" src="{{asset('resources/admin/js/bootstrap-multiselect.js')}}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{asset('resources/admin/js/date_helper/date.js')}}"></script>

                @include('templates.admin.partials.alerts')
                @yield('content')
            </div>
            <!-- /page content -->

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Preseme Admin
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>

   
    <!-- Datatables -->
    <script>
        $(document).ready(function() {

            var handleDataTableButtons = function() {
                if ($("#datatable-buttons").length) {
                    $("#datatable-buttons").DataTable({
                        dom: "Bfrtip",
                        buttons: [
                       
                        ],
                        responsive: true
                    });
                }
            };
            TableManageButtons = function() {
                "use strict";
                return {
                    init: function() {
                        handleDataTableButtons();
                    }
                };
            }();
            $('#datatable').dataTable();
            $('#datatable-keytable').DataTable({
                keys: true
            });
            $('#datatable-responsive').DataTable();
            $('#datatable-scroller').DataTable({
                ajax: "js/datatables/json/scroller-demo.json",
                deferRender: true,
                scrollY: 380,
                scrollCollapse: true,
                scroller: true
            });
            $('#datatable-fixed-header').DataTable({
                fixedHeader: true
            });
            var $datatable = $('#datatable-checkbox');
            $datatable.dataTable({
                'order': [[ 1, 'asc' ]],
                'columnDefs': [
                { orderable: false, targets: [0] }
                ]
            });
            $datatable.on('draw.dt', function() {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_flat-green'
                });
            });
            TableManageButtons.init();
            $('#datatable-buttons_filter').hide();
        });
    </script>
    <!-- /Datatables -->
</body>
</html>