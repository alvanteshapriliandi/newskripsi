@extends('templates.user.layout')
@section('content')

  <!-- Page Content -->
    <div class="container">
      {{ csrf_field() }}

      <!-- Portfolio Item Heading -->
      <h1 class="my-4">{{$poster ->jdl_Pdk}}
      </h1>

      <!-- Portfolio Item Row -->
      <div class="row">

        <div class="col-md-5">
          <img class="img-fluid" src="{{ asset('uploads/'.$poster->images)}}" alt="" width="400">
        </div>

        <div class="col-md-4">
          <h3 class="my-3">Deskripsi Produk</h3>
          <p>{{$poster->description}}</p>
          <h3 class="my-3">Harga Produk</h3>
          <ul>
            <li>Rp. {{$poster->hrg_awal}},-</li>
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
          <form class="form-group" action="{{route('poster.store')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <table class="table table-responsive">
            <tr>
                <th>Pemesanan Untuk</th>
                <td>
                  <input type="number" name="PT_pemesanan" placeholder="masukkan jumlah pesanan anda" class="form-control">
                </td>
                  <th>Ukuran</th>
                  <td>
                    <select class="form-control" name="PT_ukuran">
                      <option value="0" disabled="true" selected="true">-Ukuran-</option>
                      <option value="B2 (50 x 70.7 cm)">B2 (50 x 70.7 cm)</option>
                      <option value="A3 (29.7 x 42 cm)">A3 (29.7 x 42 cm)</option>
                    </select>
                  </td>
                </tr>
              </tr>
                <tr>
                  <th>Jenis Kertas</th>
                  <td>
                    <select class="form-control" name="PT_kertas">
                      <option value="0" disabled="true" selected="true">-Pilih Kertas-</option>
                      <option value="Standart">Standart</option>
                      <option value="Medium">Medium</option>
                    </select>
                  </td>
                </tr>
                <th>Total (Rp) : </th>
                <td>
                  <input type="text" name="PT_total" class="form-control">
                </td>
              </tr>
              <tr>
                <th>Masukkan Informasi tambahan</th>
                <td>
                  <textarea class="form-control" placeholder="informasi tambahan" style="margin: 0px; width: 400px; height: 192px;" name="PT_description"></textarea>
                  <label><i>*bagian ini boleh anda isi atau tidak</i></label>
                </td>
                <th>Logo / Gambar</th>
                <td>
                  <input type="file" name="PT_images" class="form-control">
                </td>
              </tr>
              <tr>
                <th colspan="4">
                  <input type="hidden" name="productid" value="{{$poster->id}}">
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


  
          