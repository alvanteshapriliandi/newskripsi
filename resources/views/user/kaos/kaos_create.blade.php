@extends('templates.user.layout')
@section('content')

  <!-- Page Content -->
    <div class="container">
      {{ csrf_field() }}

      <!-- Portfolio Item Heading -->
      <h1 class="my-4">{{$kaos ->jdl_Pdk}}
      </h1>

      <!-- Portfolio Item Row -->
      <div class="row">

        <div class="col-md-5">
          <img class="img-fluid" src="{{ asset('uploads/'.$kaos->images)}}" alt="" width="400">
        </div>

        <div class="col-md-4">
          <h3 class="my-3">Deskripsi Produk</h3>
          <p>{{$kaos->description}}</p>
          <h3 class="my-3">Harga Produk</h3>
          <ul>
            <li>Rp. {{$kaos->hrg_awal}},-</li>
          </ul>
        </div>

        <div class="col-md-2" style="border: 2px solid #ccc;">
          <h4 align="center">Ulasan Desainer</h4>
          <div>
            <img style="margin: 20%;" src="https://cdn.pixabay.com/photo/2016/08/20/05/38/avatar-1606916_640.png" width="100">
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
          <form class="form-group" action="{{route('kaos.store')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <table class="table table-responsive">
              <tr>
                <th>Masukkan Informasi tambahan</th>
                <td>
                  <textarea class="form-control" placeholder="informasi tambahan" style="margin: 0px; width: 400px; height: 192px;" name="KS_description"></textarea>
                  <label><i>*bagian ini boleh anda isi atau tidak</i></label>
                </td>
                <th>Gambar Pendukung</th>
                <td>
                  <input type="file" name="KS_images" class="form-control">
                </td>
              </tr>
              <tr>
                <th>Bahan Kaos</th>
                <td>
                  <input type="text" name="KS_bahan" readonly="true" value="GILDAN SOFTSTYLE" class="form-control"> <!-- value="GILDAN SOFTSTYLE"
                </td> -->
                <th>Warna</th>
                <td>
                    <select class="form-control" name="KS_warna">
                      <option value="0" disabled="true" selected="true">-Pilih warna-</option>
                      <option value="White">White</option>
                      <option value="Black">Black</option>
                      <option value="Dark Brown">Dark Brown</option>
                      <option value="Irish Green">Irish Green</option>
                      <option value="Light Blue">Light Blue</option>
                      <option value="Pink">Pink</option>
                      <option value="Novy Blue">Novy Blue</option>
                      <option value="Red">Red</option>
                      <option value="Royal Blue">Royal Blue</option>
                      <option value="Sport Grey">Sport Grey</option>
                    </select>
                  </td>
              </tr>
              <tr>
                <th>Ukuran</th>
                <td>
                    <select class="form-control" name="KS_ukuran">
                      <option value="0" disabled="true" selected="true">-Pilih Ukuran-</option>
                      <option value="XS - Extra Small">XS - Extra Small</option>
                      <option value="S - Small">S - Small</option>
                      <option value="M - Medium">M - Medium</option>
                      <option value="L - Large">L - Large</option>
                      <option value="XL - Extra Large">XL - Extra Large</option>
                      <option value="XXL - 2 Extra Large">XXL - 2 Extra Large</option>
                    </select>
                  </td>
              </tr>
              <tr>
                <th>Area Cetak Depan</th>
                <td>
                  <select class="form-control" name="KS_depan">
                      <option value="0" disabled="true" selected="true">-Pilih Area Cetak Depan-</option>
                      <option value="Tidak Ada">Tidak Ada</option>
                      <option value="A4">A4</option>
                      <option value="A3">A3</option>
                    </select>
                </td>
                <th>Area Cetak Belakang</th>
                <td>
                  <select class="form-control" name="KS_belakang">
                      <option value="0" disabled="true" selected="true">-Pilih Area Cetak Belakang-</option>
                      <option value="Tidak Ada">Tidak Ada</option>
                      <option value="A4">A4</option>
                      <option value="A3">A3</option>
                    </select>
                </td>
              </tr>
              <tr>
                <th>Pemsanan Untuk</th>
                <td>
                  <input type="number" name="KS_pemesanan" placeholder="masukkan jumlah pesanan anda" class="form-control">
                </td>
                <th>Total (Rp) : </th>
                <td>
                  <input type="text" name="KS_total" class="form-control">
                </td>
              </tr>
              <tr>
                <th colspan="4">
                  <input type="hidden" name="productid" value="{{$kaos->id}}">
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


  
          