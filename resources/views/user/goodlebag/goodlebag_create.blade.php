@extends('templates.user.layout')
@section('content')

  <!-- Page Content -->
    <div class="container">
      {{ csrf_field() }}

      <!-- Portfolio Item Heading -->
      <h1 class="my-4">{{$goodlebag ->jdl_Pdk}}
      </h1>

      <!-- Portfolio Item Row -->
      <div class="row">

        <div class="col-md-5">
          <img class="img-fluid" src="{{ asset('uploads/'.$goodlebag->images)}}" alt="" width="400">
        </div>

        <div class="col-md-4">
          <h3 class="my-3">Deskripsi Produk</h3>
          <p>{{$goodlebag->description}}</p>
          <h3 class="my-3">Harga Produk</h3>
          <ul>
            <li>Rp. {{$goodlebag->hrg_awal}},-</li>
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
          <form class="form-group" action="{{route('goodlebag.store')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <table class="table table-responsive">
              <tr>
                <th>Model Cetak</th>
                <td>
                  <select class="form-control" name="GD_model">
                    <option value="0" disabled="true" selected="true">-Pilih Model Cetak-</option>
                    <option value="Potrait">Potrait</option>
                    <option value="Landscape">Landscape</option>
                  </select>
                </td>
                <th>Ukuran</th>
                <td>
                  <select class="form-control" name="GD_ukuran">
                    <option value="0" disabled="true" selected="true">-Pilih Ukuran-</option>
                    <option value="20 x  25 x 10 CM">20 x  25 x 10 CM</option>
                    <option value="25 x  35 x 10 CM">25 x  35 x 10 CM</option>
                    <option value="30 x  40 x 15 CM">30 x  40 x 15 CM</option>
                    <option value="38 x  45 x 15 CM">38 x  45 x 15 CM</option>
                  </select>
                </td>
              </tr>
              <tr>
                <th>Bahan</th>
                <td>
                  <input type="text" name="GD_bahan" class="form-control" ><!-- value="SPUNBOND 100 GR" -->
                </td>
                <th>Sisi</th>
                <td>
                  <select class="form-control" name="GD_sisi">
                    <option value="0" disabled="true" selected="true">-Pilih Sisi-</option>
                    <option value="1 sisi">1 sisi</option>
                    <option value="2 sisi">2 sisi</option>
                  </select>
                </td>
              </tr>
              <tr>
                <th>Jumlah</th>
                <td>
                  <select class="form-control" name="GD_jumlah">
                    <option value="0" disabled="true" selected="true">-Pilih Jumlah-</option>
                    <option value="100 pcs">100 pcs</option>
                    <option value="300 pcs">300 pcs</option>
                    <option value="500 pcs">500 pcs</option>
                    <option value="1000 pcs">1000 pcs</option>
                  </select>
                </td>
                <tr>
                  <th>Warna</th>
                  <td>
                    <select class="form-control" name="GD_warna">
                      <option value="0" disabled="true" selected="true">-Pilih Warna-</option>
                      <option>Merah</option>
                      <option>Biru</option>
                      <option>Kuning</option>
                      <option>Hijau</option>
                    </select>
                  </td>
                </tr>
                <th>Total (Rp) : </th>
                <td>
                  <input type="text" name="GD_total" class="form-control">
                </td>
              </tr>
              <tr>
                <th>Masukkan deskripsi</th>
                <td>
                  <textarea class="form-control" placeholder="Masukkan descripsi goodle bag anda" style="margin: 0px; width: 400px; height: 192px;" name="GD_deskripsi"></textarea>
                </td>
                <th>Logo </th>
                <td>
                  <input type="file" name="GD_images" class="form-control">
                </td>
              </tr>
              <tr>
                <th colspan="4">
                  <input type="hidden" name="productid" value="{{$goodlebag->id}}">
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


  
          