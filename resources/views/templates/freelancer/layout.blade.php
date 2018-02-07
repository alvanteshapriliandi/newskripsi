<html>
<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{$title or "Laravel Freelancer Panel"}}</title>

    <link rel="shortcut icon" type="image/png" href="{{asset('admin/images/favicon.png')}}"/>
    <!-- Bootstrap -->
    <link href="{{asset('freelancer/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('freelancer/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('freelancer/css/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('freelancer/css/green.css')}}" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="{{asset('freelancer/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('freelancer/css/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- Custom Theme Style -->
    <link href="{{asset('freelancer/css/custom.min.css')}}" rel="stylesheet">
    <!-- Datatables -->
    <link href="{{asset('freelancer/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('freelancer/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('freelancer/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('freelancer/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('freelancer/css/scroller.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('freelancer/chat_css/metisMenu.min.css')}}" rel="stylesheet">
    <link href="{{asset('freelancer/chat_css/morris.css')}}" rel="stylesheet">
    <link href="{{asset('freelancer/chat_css/sb-admin-2.css')}}" rel="stylesheet">
    
</head>
<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="{{url('freelance')}}" class="site_title"><i class="fa fa-user"></i> <span>Freelancer Management</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <img src="{{asset('member/'.Auth::user()->photo)}}" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>{{Auth::user()->username}}</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a href="{{url('freelance')}}"><i class="fa fa-home"></i> Dashboard </a></li>
                                <li><a href="{{url('freelance/product')}}"><i class="fa fa-product-hunt"></i> Product </a></li>
                                <li><a href="{{url('freelance/order')}}"><i class="fa fa-shopping-cart"></i> Order List</a></li>
                                <li><a href="{{url('freelance/message')}}"><i class="fa fa-envelope"></i> Messages</a></li>
                                <!-- <li>
                                    <a href="#">
                                        <i class="fa fa-users"></i> Pesan
                                        <span class="fa fa-chevron-down"></span>
                                    </a>

                                    <ul class="nav child_menu">
                                        <li><a href="{{url('freelance/new-messages/create')}}">Pesan Baru</a></li>
                                        <li><a href="{{ url('freelance/inbox')}}">Pesan Masuk</a></li>
                                        <li><a href="{{ url('freelance/outbox')}}">Pesan Keluar</a></li>
                                    </ul>
                                </li> -->
                                <li><a href="{{ url('freelance/cetak')}}"><i class="fa fa-print"></i> Cetak </a></li>
                                <li><a href="{{ url('freelance/pembayaran')}}"><i class="fa fa-credit-card"></i> Pembayaran </a></li>
                                <li><a href="{{ url('freelance/report')}}"><i class="fa fa-navicon"></i> Report </a></li>
                                <li><a href="{{ url('freelance/pembayaran')}}"><i class="fa fa-star"></i> Ulasan </a></li>
                                <li><a href="{{ url('freelance/pengaturan')}}"><i class="fa fa-cog"></i> Pengaturan </a></li>
                                <li><a href="{{url('http://localhost:8080/#/')}}"><i class="fa fa-paper-plane"></i> Lihat Web ya </a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout">
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
                                    <img src="{{asset('member/'.Auth::user()->photo)}}" alt="">{{Auth::user()->username}}
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li><a href="#"> Profile</a></li>
                                    <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                </ul>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                            </li>


                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                @include('templates.freelancer.partials.alerts')
                @yield('content')
            </div>
            <!-- /page content -->
        </div>
    </div>

    <!-- javascript resources -->
    <!-- jQuery -->
<script src="{{asset('freelancer/js/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('freelancer/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('freelancer/js/fastclick.js')}}"></script>
<!-- NProgress -->
<script src="{{asset('freelancer/js/nprogress.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('freelancer/js/icheck.min.js')}}"></script>
<!-- Datatables -->
<script src="{{asset('freelancer/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('freelancer/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('freelancer/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('freelancer/js/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('freelancer/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('freelancer/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('freelancer/js/buttons.print.min.js')}}"></script>
<script src="{{asset('freelancer/js/dataTables.fixedHeader.min.js')}}"></script>
<script src="{{asset('freelancer/js/dataTables.keyTable.min.js')}}"></script>
<script src="{{asset('freelancer/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('freelancer/js/datatables.scroller.min.js')}}"></script>
<script src="{{asset('freelancer/js/jszip.min.js')}}"></script>
<script src="{{asset('freelancer/js/pdfmake.min.js')}}"></script>
<script src="{{asset('freelancer/js/vfs_fonts.js')}}"></script>
<script src="{{asset('freelancer/js/jquery.multifield.min.js')}}"></script>
<!-- <script src="{{asset('freelancer/chat_js/jquery.min.js')}}"></script>
<script src="{{asset('freelancer/chat_js/metisMenu.min.js')}}"></script>
<script src="{{asset('freelancer/chat_js/morris.min.js')}}"></script>
<script src="{{asset('freelancer/chat_js/morris-data.js')}}"></script>
<script src="{{asset('freelancer/chat_js/raphael.min.js')}}"></script>
<script src="{{asset('freelancer/chat_js/sb-admin-2.js')}}"></script> -->

<!-- Custom Theme Scripts -->
<script src="{{asset('freelancer/js/custom.min.js')}}"></script>

<script>
    $('.form-content').multifield({
        section: '.group',
        btnAdd:'#btnAdd',
        btnRemove:'.btnRemove',
    });
</script>
<!-- Datatables -->
<script>
    $(document).ready(function() {
        var handleDataTableButtons = function() {
            if ($("#datatable-buttons").length) {
                $("#datatable-buttons").DataTable({
                    dom: "Bfrtip",
                    buttons: [
                    {
                        extend: "copy",
                        className: "btn-sm"
                    },
                    {
                        extend: "csv",
                        className: "btn-sm"
                    },
                    {
                        extend: "excel",
                        className: "btn-sm"
                    },
                    {
                        extend: "pdfHtml5",
                        className: "btn-sm"
                    },
                    {
                        extend: "print",
                        className: "btn-sm"
                    },
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
    });
</script>

<script>

    $(document).ready(function() {
        $(document).on('change','.category',function(){
            //console.log("hmm its change");
            var cat_id=$(this).val();
            console.log(cat_id);
            var div=$(this).parent();
            var op=" ";
            var token = $(this).data("token");

            $.ajax({

                type:'post',
                url: '/freelance/product/findSubCategoryname/'+cat_id,
                data:{
                    "id":cat_id,
                    "_method":"post",
                    "_token": token
                },
                // '{!!URL::to('freelancer/product/findSubCategoryname')!!}',

                success:function(datas){
                    console.log('success');

                    console.log(datas);

                    // console.log(datas.length);
                    // op+='<option value="0" selected disabled>chose product</option>';


                   $('#subcategory').html(" ");
                    for(var i=0;i<datas.length;i++){


                    console.log(datas[i]);
                     $('#subcategory').append('<option value="'+datas[i].id+'">'+datas[i].name+'</option>');
                   }
                },
                error:function(err){
                    console.log(err);
                }


            });
        });
    });

</script>

</body>
</html>
