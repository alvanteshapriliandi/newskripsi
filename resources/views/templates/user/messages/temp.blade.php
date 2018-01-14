<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>LKP Media Com</title>
  <meta name="description" content="Scarica gratis il nostro Template HTML/CSS GARAGE. Se avete bisogno di un design per il vostro sito web GARAGE può fare per voi. Web Domus Italia">
  <meta name="author" content="Web Domus Italia">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" type="text/css" href="{{asset('source/bootstrap-3.3.6-dist/css/bootstrap.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('source/font-awesome-4.5.0/css/font-awesome.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('style/slider.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('style/mystyle.css')}}">
</head>
<body>
<!-- Header -->

<!-- <div class="allcontain">
  <div class="header">
      <ul class="socialicon">
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
      </ul>
      <ul class="givusacall">
        <li>Give us a call : +66666666 </li>
      </ul>
      <ul class="logreg">
        <li><a href="#">Login </a> </li>
        <li><a href="#"><span class="register">Register</span></a></li>
      </ul>
  </div> -->
  <!-- Navbar Up -->
  <nav class="topnavbar navbar-default topnav">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed toggle-costume" data-toggle="collapse" data-target="#upmenu" aria-expanded="false">
          <span class="sr-only"> Toggle navigaion</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand logo" href="{{route('berita.index')}}"><img src="{{asset('image/logo1.png')}}" alt="logo"></a>
      </div>   
    </div>
    <div class="collapse navbar-collapse" id="upmenu">
      <ul class="nav navbar-nav" id="navbarontop">
        <li class="active">
          <a href="{{route('berita.index')}}">Berita </a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profil <span class="caret"></span></a>
          <ul class="dropdown-menu dropdowncostume">
            <li><a href="{{route('katapengantar.index')}}">Kata Pengantar </a></li>
            <li><a href="{{route('visimisi.index')}}">Visi Misi</a></li>
            <li><a href="{{route('struktur.index')}}">Struktur</a></li>
          </ul>
        </li>
        <li>
          <a href="{{route('galeri.index')}}">Galeri </a>
        </li>
        <li>
          <a href="{{route('info.index')}}">Info </a>
        </li>
        <li>
          <a href="{{route('ebook.index')}}">E-Book </a>
        </li>
        <li>
          <a href="{{route('hubungi.index')}}">Hubungi Kami </a>
        </li>
      </ul>
    </div>
  </nav>
</div>
<!-- Carousel -->
<div class="allcontain">
  <div id="carousel-up" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner " role="listbox">
      <div class="item active">
        <img src="{{asset('image/oldcar.jpg')}}" alt="oldcar">
        <div class="carousel-caption">
          <h2>Gambar Slide 1</h2>
          <p>Menampilkan gambar slide 1</p>
        </div>
      </div>
      <div class="item">
        <img src="{{asset('image/porche.jpg')}}" alt="porche">
        <div class="carousel-caption">
          <h2>Gambar Slide 2</h2>
            <p>Menampilkan gambar slide 2</p>
        </div>
      </div>
      <div class="item">
        <img src="{{asset('image/benz.jpg')}}" alt="benz">
        <div class="carousel-caption">
          <h2>Gambar Slide 3</h2>
          <p>Menampilkan gambar slide 3</p>
        </div>
      </div>
    </div>
    
  </div>
</div>

@include('templates.user.partials.alerts')
@yield('content')

  <!-- Bottom Menu -->
  <div class="bottommenu">
    <div class="bottomlogo">
    <span class="dotlogo">&bullet;</span><img src="{{asset('image/collectionlogo1.png')}}" alt="logo1"><span class="dotlogo">&bullet;;</span>
    </div>
    <ul class="nav nav-tabs bottomlinks">
      <li role="presentation" ><a href="#/" role="button">ABOUT US</a></li>
      <li role="presentation"><a href="#/">CATEGORIES</a></li>
      <li role="presentation"><a href="#/">PREORDERS</a></li>
      <li role="presentation"><a href="#/">CONTACT US</a></li>
      <li role="presentation"><a href="#/">RECEIVE OUR NEWSLETTER</a></li>
    </ul>
    <p>"Lorem ipsum dolor sit amet, consectetur,  sed do eiusmod tempor incididunt <br>
      eiusmod tempor incididunt </p>
     <img src="{{asset('image/line.png')}}" alt="line"> <br>
     <div class="bottomsocial">
      <a href="#"><i class="fa fa-facebook"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>
      <a href="#"><i class="fa fa-google-plus"></i></a>
      <a href="#"><i class="fa fa-pinterest"></i></a>
    </div>
      <div class="footer">
        <div class="copyright">
          &copy; Copy right 2017 | <a href="#">Privacy </a>| <a href="#">Policy</a>
        </div>
      </div>
  </div>
</div>

<script type="text/javascript" src="{{asset('source/bootstrap-3.3.6-dist/js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('source/js/isotope.js')}}"></script>
<script type="text/javascript" src="{{asset('source/js/myscript.js')}}"></script> 
<script type="text/javascript" src="{{asset('source/bootstrap-3.3.6-dist/js/jquery.1.11.js')}}"></script>
<script type="text/javascript" src="{{asset('source/bootstrap-3.3.6-dist/js/bootstrap.js')}}"></script>

</body>
</html>