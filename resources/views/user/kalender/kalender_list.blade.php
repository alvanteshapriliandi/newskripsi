@extends('templates.user.layout')
@section('content')

<!-- Page Content -->
    <div class="container">
      <!-- Jumbotron Header -->
      <header class="jumbotron my-4">
        <h1 class="display-3">Welcome To Kalender Template!</h1>
        <p class="lead">Cetak Kalender anda sekarang juga agar anda lebih percaya diri di hadapan para client anda</p>
        <a href="#" class="btn btn-primary btn-lg">Cetak sekarang!</a>
      </header>

      @foreach($product as $p)

      @if($p->status == 0)

      @else
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="{{ asset('uploads/'.$p->images)}}" alt="..." width="150" style="margin-top: 5%;">
          <div class="caption">
            <h3>{{$p->name}}</h3>
            <p>{{$p->description}}</p>
            <p>
              <a href="{{route('kalender.show',['id'=> $p->id])}}" class="btn btn-primary" role="button"> <span class="fa fa-list-alt"> Detail</span></a>
              <a href="#" class="btn btn-default" role="button"> <span class="fa fa-cart-plus"> Order Now</a>
            </p>
          </div>
        </div>
      </div>
      @endif

      @endforeach

      <!-- <div class="row">
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="..." alt="...">
            <div class="caption">
              <h3>Thumbnail label</h3>
              <p>...</p>
              <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="..." alt="...">
            <div class="caption">
              <h3>Thumbnail label</h3>
              <p>...</p>
              <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="..." alt="...">
            <div class="caption">
              <h3>Thumbnail label</h3>
              <p>...</p>
              <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
            </div>
          </div>
        </div>
      </div> -->

      <!-- /.row -->
    </div>
    <!-- /.container -->
@stop
