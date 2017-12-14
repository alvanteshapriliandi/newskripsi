@extends('templates.user.layout')
@section('content')

  <!-- Page Content -->
    <div class="container">
      {{ csrf_field() }}

      <!-- Portfolio Item Heading -->
      <h1 class="my-4">{{$rollup ->jdl_Pdk}}
      </h1>

      <!-- Portfolio Item Row -->
      <div class="row">

        <div class="col-md-5">
          <img class="img-fluid" src="{{ asset('uploads/'.$rollup->images)}}" alt="" width="400">
        </div>

        <div class="col-md-4">
          <h3 class="my-3">Deskripsi Produk</h3>
          <p>{{$rollup->description}}</p>
          <h3 class="my-3">Harga Produk</h3>
          <ul>
            <li>Rp. {{$rollup->hrg_awal}},-</li>
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
          <form class="form-group" action="{{route('rollup.store')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <table class="table table-responsive">
              <tr>
                <th>Masukkan Informasi tambahan</th>
                <td>
                  <textarea class="form-control" placeholder="informasi tambahan" style="margin: 0px; width: 400px; height: 192px;" name="BN_description"></textarea>
                </td>
                <th>Gambar Pendukung</th>
                <td>
                  <input type="file" name="BN_images" class="form-control">
                </td>
              </tr>
            
              <tr>
                <th>Ukuran</th>
                <td>
                  <select class="form-control" name="BN_ukuran">
                    <option value="0" disabled="true" selected="true">-Pilih Ukuran-</option>
                    <option value="25 X 45 CM">25 X 45 CM</option>
                    <option value="60 X 160 CM">60 X 160 CM</option>
                  </select>
                </td>
                <th>Jenis</th>
                <td>
                  <select class="form-control" name="BN_jenis">
                    <option value="0" disabled="true" selected="true">-Pilih Jenis-</option>
                    <option value="FF Korea 440 GR">FF Korea 440 GR</option>
                    <option value="FF China 340GR">FF China 340GR</option>
                  </select>
                </td>
              </tr>
              <tr>
                <th>Pemsanan Untuk</th>
                <td>
                  <input type="number" name="BN_pemesanan" placeholder="masukkan jumlah pesanan anda" class="form-control">
                </td>
                <th>Total (Rp) : </th>
                <td>
                  <input type="text" name="BN_total" class="form-control">
                </td>
              </tr>
              <tr>
                <th colspan="4">
                  <input type="hidden" name="productid" value="{{$rollup->id}}">
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


  
          