@extends('templates.user.layout')
@section('content')

  <!-- Page Content -->
    <div class="container">
      {{ csrf_field() }}

      <!-- Portfolio Item Heading -->
      <h1 class="my-4">{{$bantalfoto ->jdl_Pdk}}
      </h1>

      <!-- Portfolio Item Row -->
      <div class="row">

        <div class="col-md-5">
          <img class="img-fluid" src="{{ asset('uploads/'.$bantalfoto->images)}}" alt="" width="400">
        </div>

        <div class="col-md-4">
          <h3 class="my-3">Deskripsi Produk</h3>
          <p>{{$bantalfoto->description}}</p>
          <h3 class="my-3">Harga Produk</h3>
          <ul>
            <li>Rp. {{$bantalfoto->hrg_awal}},-</li>
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
          <form class="form-group" action="{{route('bantalfoto.store')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <table class="table table-responsive">
              <tr>
                <th>Masukkan Informasi tambahan</th>
                <td>
                  <textarea class="form-control" placeholder="informasi tambahan" style="margin: 0px; width: 400px; height: 192px;" name="BT_description"></textarea>
                  <label><i>*bagian ini boleh anda isi atau tidak</i></label>
                </td>
                <th>Gambar</th>
                <td>
                  <input type="file" name="BT_images" class="form-control">
                </td>
              </tr>

              <tr>
                <th>Model Bantal</th>
                <td>
                  <select class="form-control" name="BT_model">
                    <option value="0" disabled="true" selected="true">-Pilih Model Bantal-</option>
                    <option value="Persegi">Persegi</option>
                    <option value="Persegi Panjang">Pesegi Panjang</option>
                    <option value="Guling">Guling</option>
                  </select>
                </td>
                <th>Jenis Kain</th>
                <td>
                  <select class="form-control" name="BT_kain">
                    <option value="0" disabled="true" selected="true">-Pilih Kain-</option>
                    <option value="Rasfur">Rasfur</option>
                    <option value="Snail">Snail</option>
                  </select>
                </td>
              </tr>


              <tr>
                <th>Ukuran</th>
                <td>
                  <select class="form-control" name="BT_ukuran">
                    <option value="0" disabled="true" selected="true">-Pilih Ukuran Bantal-</option>
                    <option value="25 x 25 CM">25 X 25 CM</option>
                    <option value="40 X 40 CM">40 X 40 CM</option>
                    <option value="60 X 60 CM">60 X 60 CM</option>
                    <option value="80 X 80 CM">80 X 80 CM</option>
                  </select>
                </td>
                <th>Jenis Warna</th>
                <td>
                  <select class="form-control" name="BT_warna">
                    <option value="0" disabled="true" selected="true">-Pilih Warna-</option>
                    <option value="Hitam">Hitam</option>
                    <option value="Abu-abu">Abu-abu</option>
                    <option value="Kuning">Kuning</option>
                    <option value="Hijau">Hijau</option>
                    <option value="Biru Tua">Biru Tua</option>
                    <option value="Biru">Biru</option>
                    <option value="Biru Muda">Biru Muda</option>
                    <option value="Merah">Merah</option>
                    <option value="Pink Tua">Pink Tua</option>
                    <option value="Pink Muda">Pink Muda</option>
                    <option value="Coklat Tua">Cokklat Tua</option>
                    <option value="Coklat">Coklat</option>
                    <option value="Cream">Cream</option>
                    <option value="Orange">Orange</option>
                    <option value="Ungu">Ungu</option>
                  </select>
                </td>
              </tr>

              <tr>
                <th>Pemsanan Untuk</th>
                <td>
                  <input type="number" name="BT_pemesanan" placeholder="masukkan jumlah pesanan anda" class="form-control">
                </td>
                <th>Total (Rp) : </th>
                <td>
                  <input type="text" name="BT_total" class="form-control">
                </td>
              </tr>
              
              <tr>
                <th colspan="4">
                  <input type="hidden" name="productid" value="{{$bantalfoto->id}}">
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


  
          