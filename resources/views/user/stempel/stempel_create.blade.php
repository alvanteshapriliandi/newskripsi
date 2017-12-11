@extends('templates.user.layout')
@section('content')

  <!-- Page Content -->
    <div class="container">
      {{ csrf_field() }}

      <!-- Portfolio Item Heading -->
      <h1 class="my-4">{{$stempel ->jdl_Pdk}}
      </h1>

      <!-- Portfolio Item Row -->
      <div class="row">

        <div class="col-md-5">
          <img class="img-fluid" src="{{ asset('uploads/'.$stempel->images)}}" alt="" width="400">
        </div>

        <div class="col-md-4">
          <h3 class="my-3">Deskripsi Produk</h3>
          <p>{{$stempel->description}}</p>
          <h3 class="my-3">Harga Produk</h3>
          <ul>
            <li>Rp. {{$stempel->hrg_awal}},-</li>
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
          <form class="form-group" action="{{route('stempel.store')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <table class="table table-responsive">
              <tr>
                <th>Nama Perusahaan</th>
                <td>
                  <input type="text" name="SM_perusahaan" placeholder="masukkan nama anda" class="form-control">
                </td>
                <th>Ukuran</th>
                  <td>
                    <select class="form-control" name="SM_ukuran">
                      <option value="0" disabled="true" selected="true">-Ukuran-</option>
                      <option value="58 x 22 mm">58 x 22 mm</option>
                    </select>
                  </td>
              </tr>
              <tr>
                <th>Pemsanan Untuk</th>
                <td>
                  <input type="number" name="SM_pemesanan" placeholder="masukkan jumlah pesanan anda" class="form-control">
                </td>
                <th>Warna</th>
                  <td>
                    <select class="form-control" name="SM_warna">
                      <option value="0" disabled="true" selected="true">-Warna-</option>
                      <option value="Merah">Merah</option>
                      <option value="Biru">Biru</option>
                    </select>
                  </td>
                </tr>
                <tr>
                <th>Total (Rp) : </th>
                <td>
                  <input type="text" name="SM_total" class="form-control">
                </td>
              </tr>
              <tr>
                <th>Masukkan Informasi tambahan</th>
                <td>
                  <textarea class="form-control" placeholder="informasi tambahan" style="margin: 0px; width: 400px; height: 192px;" name="SM_description"></textarea>
                  <label><i>*bagian ini boleh anda isi atau tidak</i></label>
                </td>
                <th>Logo Perusahaan</th>
                <td>
                  <input type="file" name="SM_images" class="form-control">
                </td>
              </tr>
              <tr>
                <th colspan="4">
                  <input type="hidden" name="productid" value="{{$stempel->id}}">
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


  
          