<html>
<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{$title or "Laravel Admin Panel"}}</title>

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
   


</head>
<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="#" class="site_title"><i class="fa fa-lock"></i> <span>Admin Management</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <img src="{{asset('freelancer/images/img.jpg')}}" alt="..." class="img-circle profile_img">
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
                                <li><a href="{{url('admin')}}"><i class="fa fa-dashboard"></i> Dashboard </a></li>
                                <li><a href="{{route('material.index')}}"><i class="fa fa-folder-open"></i> Material </a></li>
                                <li><a href="{{route('products.index')}}"><i class="fa fa-product-hunt"></i> Product </a></li>
                                <li><a href="{{url('admin/orderlist')}}"><i class="fa fa-shopping-basket"></i> Order List </a></li>
                                <li><a href="{{url('admin/orderlist')}}"><i class="fa fa-envelope"></i> Pesan </a></li>
                                <li><a href="{{url('admin/cetakpesanan')}}"><i class="fa fa-print"></i> Cetak </a></li>
                                <!-- <li><a href="{{url('admin/freelance-payment')}}"><i class="fa fa-credit-card-alt"></i> Pembayaran </a></li> -->
                                <li>
                                    <a href="#">
                                        <i class="fa fa-credit-card-alt"></i> Pembayaran
                                        <span class="fa fa-chevron-down"></span>
                                    </a>

                                    <ul class="nav child_menu">
                                        <li><a href="{{url('admin/freelance-payment')}}">Freelancer</a></li>
                                        <li><a href="{{url('admin/freelance-payment')}}">Report</a></li>
                                        <li><a href="{{url('admin/freelancelist')}}">Report-comment</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-users"></i> Data Pengguna
                                        <span class="fa fa-chevron-down"></span>
                                    </a>

                                    <ul class="nav child_menu">
                                        <li><a href="{{url('admin/userlist')}}">User</a></li>
                                        <li><a href="{{url('admin/freelancelist')}}">Freelance</a></li>
                                        <li><a href="{{url('admin/bank')}}">Bank</a></li>
                                    </ul>
                                </li>
                                <li><a href=""><i class="fa fa-cog"></i> Pengaturan </a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->
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
                                    <img src="{{asset('freelancer/images/img.jpg')}}" alt="">{{Auth::user()->username}}
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

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
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

<script>
        $('.form-content').multifield({
            section: '.group',
            btnAdd:'#btnAdd',
            btnRemove:'.btnRemove',
        });
    </script>

<!-- Custom Theme Scripts -->
<script src="{{asset('freelancer/js/custom.min.js')}}"></script>

<!-- Datatables -->

<script type="text/javascript">
    $(document).ready(function() {
// Initializing arrays with city names.
        var persegi = [
            {display: "25 X 25 CM",value: "25 X 25 CM"},
            {display: "40 X 40 CM",value: "40 X 40 CM"},
            {display: "80 X 80 CM",value: "80 X 80 CM"},
        ];
        var persegi_panjang = [
            {display: "20 X 25 cm",value: "20 X 25 cm"},
            {display: "40 X 60 cm",value: "40 X 60 cm"},
            {display: "40 X 80 cm",value: "40 X 80 cm"},
        ];
        var guling = [
            {display: "Panjang 40 CM",value: "Panjang 40 CM"},
            {display: "Panjang 65 CM",value: "Panjang 65 CM"}
        ];
        // Function executes on change of first select option field.
        $("#model").change(function() {
            var select = $("#model option:selected").val();
            switch (select) {
                case "Persegi":
                ukuran(persegi);
                break;
                case "Persegi Panjang":
                ukuran(persegi_panjang);
                break;
                case "Guling":
                ukuran(guling);
                break;
                default:
                $("#ukuran").empty();
                $("#ukuran").append("<option>--Select--</option>");
                break;
            }
        });
        // Function To List out Cities in Second Select tags
        function ukuran(arr) {
            $("#ukuran").empty(); //To reset cities
            $("#ukuran").append("<option>--Select--</option>");
            $(arr).each(function(i) { //to list cities
                $("#ukuran").append("<option value=\"" + arr[i].value + "\">" + arr[i].display + "</option>")
            });
        }
    });
</script>
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
<script language="javascript">
   function tambahHobi() {
     var idf = document.getElementById("idf").value;
     console.log(idf)
     var stre;
     stre="<p id='srow" + idf + "'><div class='form-group{{ $errors->has('harga_awal') ? ' has-error' : '' }} col-md-6'><label class='col-xs-12' for='harga_awal'>Bahan <span class='required'>*</span></label><div class='col-xs-12'><input type='text' value='{{ Request::old('harga_awal') ?: '' }}'' id='harga_awal' name='harga_awal[]' class='form-control col-md-7 col-xs-12'>@if ($errors->has('harga_awal'))<span class='help-block'>{{ $errors->first('harga_awal') }}</span>@endif</div></div><div class='form-group{{ $errors->has('harga_awal') ? ' has-error' : '' }} col-md-6'><label class='col-xs-12' for='harga_awal'>Harga <span class='required'>*</span></label><div class='col-xs-12'><input type='text' value='{{ Request::old('harga_awal') ?: '' }}'' id='harga_awal' name='harga_awal[]' class='form-control col-md-7 col-xs-12'>@if ($errors->has('harga_awal'))<span class='help-block'>{{ $errors->first('harga_awal') }}</span>@endif</div></div><a href='#' style='color:#3399FD;' onclick='hapusElemen(\"#srow" + idf + "\"); return false;'>Hapus</a></p>";
     $("#divHobi").append(stre);
     idf = (idf-1) + 3;
     document.getElementById("idf").value = idf;
   }
   // function tambahHobi() {
   //   var idf = document.getElementById("idf").value;
   //   var stre;
   //   stre="<p id='srow" + idf + "'><input type='text' size='40' name='rincian_hobi[]' placeholder='Masukkan Hobi' /> <input type='text' size='40' name='rincian_hobi[]' placeholder='Masukkan Hobi' /> <a href='#' style='color:#3399FD;' onclick='hapusElemen(\"#srow" + idf + "\"); return false;'>Hapus</a></p>";
   //   $("#divHobi").append(stre);
   //   idf = (idf-1) + 3;
   //   document.getElementById("idf").value = idf;f
   // }
   function hapusElemen(idf) {
     $(idf).remove();
   }
</script>
<script>

    $(document).ready(function() {
        $(document).on('change','.model',function(){
            console.log("hmm its change");
            var cat_id=$(this).val();
            console.log(cat_id);
            var div=$(this).parent();
            var op=" ";
            var token = $(this).data("token");

            $.ajax({

                type:'post',
                url: '/admin/material/12/find/'+cat_id,
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


                   $('#ukurans').html(" ");
                    for(var i=0;i<datas.length;i++){


                    console.log(datas[i]);
                     $('#ukurans').append('<option value="'+datas[i].id+'">'+datas[i].name+'</option>');
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
