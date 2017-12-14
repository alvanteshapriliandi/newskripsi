@extends('templates.user.layout')
@section('content')

  <!-- Page Content -->
    <div class="container">
      {{ csrf_field() }}

      <!-- Portfolio Item Heading -->
      <h1 class="my-4">{{$stiker ->jdl_Pdk}}
      </h1>

      <!-- Portfolio Item Row -->
      <div class="row">

        <div class="col-md-5">
          <img class="img-fluid" src="{{ asset('uploads/'.$stiker->images)}}" alt="" width="400">
        </div>

        <div class="col-md-4">
          <h3 class="my-3">Deskripsi Produk</h3>
          <p>{{$stiker->description}}</p>
          <h3 class="my-3">Harga Produk</h3>
          <ul>
            <li>Rp. {{$stiker->hrg_awal}},-</li>
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
          <form class="form-group" action="{{route('stiker.store')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <table class="table table-responsive">
              <tr>
               <th>Ukuran</th>
                  <td>
                    <select class="form-control" name="ST_ukuran">
                      <option value="0" disabled="true" selected="true">-Bentuk-</option>
                      <option value="Bulat (Diameter 5 cm)">Bulat (Diameter 5 cm)</option>
                      <option value="Bulat (Diameter 7 cm)">Bulat (Diameter 7 cm)</option>
                      <option value="Bulat (Diameter 8 cm)">Bulat (Diameter 8 cm)</option>
                      <option value="Persegi (5 x 5 cm)">Persegi (5 x 5 cm)</option>
                      <option value="Persegi (7 x 7 cm)">Persegi (7 x 7 cm)</option>
                      <option value="Persegi (10 x 10 cm)">Persegi (10 x 10 cm)</option>
                      <option value="Persegi Panjang (6 x 4 cm)">Persegi Panjang (6 x 4 cm)</option>
                      <option value="Persegi Panjang (9 x 6 cm)">Persegi Panjang (9 x 6 cm)</option>
                      <option value="Persegi Panjang (12 x 8 cm)">Persegi Panjang (12 x 8 cm)</option>
                    </select>
                  </td>              
                </tr>
                <tr>
                  <th>Material</th>
                  <td>
                    <select class="form-control" name="ST_material">
                      <option value="0" disabled="true" selected="true">-Material-</option>
                      <option  value="Standart">Standart</option>
                      <option value="Medium">Medium</option>
                    </select>
                  </td>
                </tr>
                <th>Total (Rp) : </th>
                <td>
                  <input type="text" name="ST_total" class="form-control">
                </td>
              </tr>
              <tr>
                <th>Masukkan Informasi tambahan</th>
                <td>
                  <textarea class="form-control" placeholder="informasi tambahan" style="margin: 0px; width: 400px; height: 192px;" name="ST_description"></textarea>
                  <label><i>*bagian ini boleh anda isi atau tidak</i></label>
                </td>
                <th>Logo / Gambar</th>
                <td>
                  <input type="file" name="ST_images" class="form-control">
                </td>
              </tr>
              <tr>
                <th colspan="4">
                  <input type="hidden" name="productid" value="{{$stiker->id}}">
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


  
          