@extends('templates.user.layout')
@section('content')

  <!-- Page Content -->
    <div class="container">
      {{ csrf_field() }}

      <!-- Portfolio Item Heading -->
      <h1 class="my-4">{{$kalender ->jdl_Pdk}}
      </h1>

      <!-- Portfolio Item Row -->
      <div class="row">

        <div class="col-md-5">
          <img class="img-fluid" src="{{ asset('uploads/'.$kalender->images)}}" alt="" width="400">
        </div>

        <div class="col-md-4">
          <h3 class="my-3">Deskripsi Produk</h3>
          <p>{{$kalender->description}}</p>
          <h3 class="my-3">Harga Produk</h3>
          <ul>
            <li>Rp. {{$kalender->hrg_awal}},-</li>
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
          <form class="form-group" action="{{route('kalender.store')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <table class="table table-responsive">
              <tr>
                <th>Nama Perusahaan</th>
                <td>
                  <input type="text" name="KL_perusahaan" placeholder="masukkan nama anda" class="form-control">
                </td>
                <th>Alamat</th>
                <td>
                  <textarea name="KL_alamat" placeholder="masukkan alamat perusahaan anda" class="form-control"></textarea>
                </td>
              </tr>
              <tr>
                <th>No. Telepon</th>
                <td>
                  <input type="text" name="KL_tlp" placeholder="masukkan no Telepon anda" class="form-control">
                </td>
                <th>Email</th>
                <td>
                  <input type="email" name="KL_email" placeholder="masukkan email anda" class="form-control">
                </td>
              </tr>
              <tr>
                <th>Pemesanan Untuk</th>
                <td>
                  <input type="number" name="KL_pemesanan" placeholder="masukkan jumlah pesanan anda" class="form-control">
                </td>
                <th>Type Jilid</th>
                  <td>
                    <select class="form-control" name="KL_jilid">
                      <option value="0" disabled="true" selected="true">-Type Jilid-</option>
                      <option value="Jepit Kaleng">Jepit Kaleng</option>
                      <option value="Spiral Hanger">Spiral Hanger</option>
                    </select>
                  </td>
                <tr>
                  <th>Jenis Kertas</th>
                  <td>
                    <select class="form-control" name="KL_kertas">
                      <option value="0" disabled="true" selected="true">-Pilih Kertas-</option>
                      <option value="Standart">Standart</option>
                      <option value="Medium">Medium</option>
                    </select>
                  </td>
                  <th>Jumlah Lembar</th>
                  <td>
                    <select class="form-control" name="KL_lembar">
                      <option value="0" disabled="true" selected="true">-Jumlah Lembar-</option>
                      <option value="7 (2 Bulan + 1 Cover)">7 (2 Bulan + 1 Cover)</option>
                      <option value="13 (1 Bulan + 1 Cover)">13 (1 Bulan + 1 Cover)</option>
                    </select>
                  </td>
                </tr>
                <th>Total (Rp) : </th>
                <td>
                  <input type="text" name="KL_total" class="form-control">
                </td>
              </tr>
              <tr>
                <th>Masukkan Informasi tambahan</th>
                <td>
                  <textarea class="form-control" placeholder="informasi tambahan" style="margin: 0px; width: 400px; height: 192px;" name="KL_description"></textarea>
                  <label><i>*bagian ini boleh anda isi atau tidak</i></label>
                </td>
                <th>Logo Perusahaan & Gambar</th>
                <td>
                  <input type="file" name="KL_images" class="form-control">
                </td>
              </tr>
              <tr>
                <th colspan="4">
                  <input type="hidden" name="productid" value="{{$kalender->id}}">
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


  
          