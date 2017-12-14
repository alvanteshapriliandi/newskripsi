@extends('templates.user.layout')
@section('content')

  <!-- Page Content -->
    <div class="container">
      {{ csrf_field() }}

      <!-- Portfolio Item Heading -->
      <h1 class="my-4">{{$mug ->jdl_Pdk}}
      </h1>

      <!-- Portfolio Item Row -->
      <div class="row">

        <div class="col-md-5">
          <img class="img-fluid" src="{{ asset('uploads/'.$mug->images)}}" alt="" width="400">
        </div>

        <div class="col-md-4">
          <h3 class="my-3">Deskripsi Produk</h3>
          <p>{{$mug->description}}</p>
          <h3 class="my-3">Harga Produk</h3>
          <ul>
            <li>Rp. {{$mug->hrg_awal}},-</li>
          </ul>
        </div>

        <div class="col-md-2" style="border: 2px solid #ccc;">
          <h4 align="center">Ulasan Desainer</h4>
          <div>
            @foreach($product as $p)
            <img style="margin: 20%;" src="{{ asset('uploads/'.$p->images)}}" width="100">
            
            <p align="center">Freelance Desainer : {{$p->username}} <br>
            @endforeach
            <p align="center">Ratting <br>
              <input id="rating-input" type="text" title=""/>
            </p>

          </div>
        </div>
      </div>
      <!-- /.row -->

      <!-- Related Projects Row -->
      <h3 class="my-4">Order Now</h3>

      <div class="row">
        <div class="col-lg-12">
          <form class="form-group" action="{{route('mug.store')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <table class="table table-responsive">
              <tr>
                <th>Masukkan Informasi tambahan</th>
                <td>
                  <textarea class="form-control" placeholder="informasi tambahan" style="margin: 0px; width: 400px; height: 192px;" name="MG_description"></textarea>
                </td>
                <th>Gambar</th>
                <td>
                  <input type="file" name="MG_images" class="form-control">
                </td>
              </tr>
              <tr>
                <th>Jenis Mug</th>
                <td>
                  <select class="form-control" name="MG_jenis_mug">
                    <option value="0" disabled="true" selected="true">-Pilih Jenis Mug-</option>
                    <option value="Mug Premium">Mug Premium</option>
                    <option value="Mug Gagang Warna Premium">Mug Gagang Warna Premium</option>
                    <option value="Mug Kerucut Import">Mug Kerucut Import</option>
                    <option value="Mug Jumbo">Mug Jumbo</option>
                    <option value="Mug Warna Dalam (Two Tone)">Mug Warna Dalam (Two Tone)</option>
                    <option value="Travel Mug Stainless (Putih)">Travel Mug Stainless (Putih)</option>
                  </select>
                </td>
              </tr>
              <tr>
                <th>Pemsanan Untuk</th>
                <td>
                  <input type="number" name="MG_jumlah_mug" placeholder="masukkan jumlah pesanan anda" class="form-control">
                </td>
                <th>Total (Rp) : </th>
                <td>
                  <input type="text" name="MG_total" class="form-control">
                </td>
              </tr>
              
              <tr>
                <th colspan="4">
                  <input type="hidden" name="productid" value="{{$mug->id}}">
                  @if(!Auth::guest())
                    @if(Auth::user()->role == 1)
                    <input type="submit" class="btn btn-danger btn-block" value="Lanjutkan">
                    @elseif(Auth::user()->role == 2)
                    <input type="submit" class="btn btn-danger btn-block" value="Lanjutkan">
                    @endif
                  @else
                  <input type="submit" class="btn btn-danger btn-block" disabled="true" value="Anda Harus Login Terlebih dahulu">
                  @endif
                </th>
              </tr>
            </table>
          </form>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

@stop


  
          