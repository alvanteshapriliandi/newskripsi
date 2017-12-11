
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Fixed Top Navbar Example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('user/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('user/css/dropdown.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('user/css/navbar-fixed-top.css')}}" rel="stylesheet">
    <link href="{{ asset('user/css/star-rating.css')}}" rel="stylesheet">
    <link href="{{ asset('user/css/heroic-features.css')}}" rel="stylesheet">
    <link href="{{ asset('user/css/small-business.css')}}" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="{{ asset('user/js/ie-emulation-modes-warning.js')}}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Techno Graphic</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="{{url('/')}}">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Category <span class="caret"></span></a>
              <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                {{ csrf_field() }}

                <li class="dropdown-submenu" id="category">
                  <a tabindex="-1" href="#">Kartu Nama</a>
                  <ul class="dropdown-menu">
                    <li value="0" id="subcategory"><a href="{{route('kartunama.index')}}">Kartu Nama</a></li>
                    <li value="0" id="subcategory"><a href="{{route('squarecard.index')}}">Square Card</a></li>
                  </ul>
                </li>
                <li class="dropdown-submenu" id="category">
                  <a tabindex="-1" href="#">Office Stationery</a>
                  <ul class="dropdown-menu">
                    <li value="0" id="subcategory"><a href="{{route('amplop.index')}}">Amplop</a></li>
                    <li value="0" id="subcategory"><a href="{{route('kopsurat.index')}}">Kop Surat</a></li>
                    <li value="0" id="subcategory"><a href="{{route('stempel.index')}}">Stempel</a></li>
                    
                  </ul>
                </li>
                <li class="dropdown-submenu" id="category">
                  <a tabindex="-1" href="#">Marketing Material</a>
                  <ul class="dropdown-menu">
                    <li value="0" id="subcategory"><a href="{{route('kalender.index')}}">Kalender</a></li>
                    <li value="0" id="subcategory"><a href="{{route('brosur.index')}}">Brosur</a></li>
                    <li value="0" id="subcategory"><a href="{{route('stiker.index')}}">Stiker</a></li>
                    <li value="0" id="subcategory"><a href="{{route('poster.index')}}">Poster</a></li>
                  </ul>
                </li>
                <li class="dropdown-submenu" id="category">
                  <a tabindex="-1" href="#">Promotional Gifts</a>
                  <ul class="dropdown-menu">
                    <li value="0" id="subcategory"><a href="{{route('goodlebag.index')}}">Goodle Bag</a></li>
                    <li value="0" id="subcategory"><a href="{{route('mug.index')}}">Mug</a></li>
                    <li value="0" id="subcategory"><a href="{{route('bantalfoto.index')}}">Bantal Foto</a></li>
                  </ul>
                </li>
                <li class="dropdown-submenu" id="category">
                  <a tabindex="-1" href="#">Banner</a>
                  <ul class="dropdown-menu">
                    <li value="0" id="subcategory"><a href="{{route('spanduk.index')}}">Spanduk</a></li>
                    <li value="0" id="subcategory"><a href="{{route('xbanner.index')}}">X-banner</a></li>
                    <li value="0" id="subcategory"><a href="{{route('rollup.index')}}">Roll Up Banner</a></li>
                  </ul>
                </li>
                <li class="dropdown-submenu" id="category">
                  <a tabindex="-1" href="#">Clothings</a>
                  <ul class="dropdown-menu">
                    <li value="0" id="subcategory"><a href="{{route('kaos.index')}}">Kaos</a></li>
                    <li value="0" id="subcategory"><a href="{{route('poloshirt.index')}}">Polo Shirt</a></li>
                  </ul>
                </li>




                <!-- <li class="dropdown-submenu" id="category">
                  <a tabindex="-1" href="#">}</a>
                  <ul class="dropdown-menu">
                    <li value="0" id="subcategory"><a href="#">Second level</a></li>
                  </ul>
                </li> -->
              </ul>
            </li>
            @if(!Auth::guest())
              @if(Auth::user()->role == 1)
              <li><a href="{{route('freelance.create')}}">Become A Freelancer</a></li>
              @elseif(Auth::user()->role == 2)
              <li><a href="{{route('freelance.index')}}">Freelancer</a></li>
              @elseif(Auth::user()->role == 3)
              <li><a href="{{url('admin')}}">Admin</a></li>
              @endif
            @else
            <li><a href="{{route('freelance.create')}}">Become A Freelancer</a></li>
            @endif
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{route('checkout.index')}}"><i class="fa fa-shopping-cart"></i></a></li>
            @if (Auth::guest())
                <li><a href="{{ route('login') }}"><span class="fa fa-lock"></span>&nbsp; Login</a></li>
                <li><a href="{{ route('register') }}"><span class="fa fa-user-plus"></span>&nbsp; Register</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->username }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endif
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
      @yield('content')

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="{{ asset('user/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('user/js/star-rating.js')}}"></script>
    <script src="{{ asset('user/js/bootstrap.bundle.min.js')}}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

    <script>

    $(document).ready(function() {
        $(document).on('change','#category',function(){
            console.log("hmm its change");
            var cat_id=$(this).val();
            console.log(cat_id);
            var div=$(this).parent();
            var op=" ";
            var token = $(this).data("token");

            $.ajax({

                type:'post',
                url: '/skripsi/public/user/user/findSubCategoryname/'+cat_id,
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
                     $('#subcategory').append('<li value="'+datas[i].id+'"><a href="">'+datas[i].name+'</a></li>');
                   }
                },
                error:function(err){
                    console.log(err);
                }


            });
        });
    });

</script>
<script type="text/javascript">
  $(document).ready(function(){
    var $inp = $('#rating-input');
    
    //$inp.attr('value','4');
      
    $inp.rating({
                min: 0,
                max: 5,
                step: 1,
                size: 'sm',
                showClear: false
            });
    $inp.on('rating.change', function () {
      alert('Nilai rating : '+$('#rating-input').val());
    });
  });
</script>
    <script type="text/javascript">\
      // $('#list').change(function() {
      //   console.log("hmm its change");
      // });
      $(document).ready(function() {
        $(document).on('change','#list',function(){
            console.log("hmm its change");
        });
      }); 
    </script>
  </body>
</html>
