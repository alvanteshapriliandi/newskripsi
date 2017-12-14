@extends('templates.user.layout')
@section('content')

  <!-- Page Content -->
    <div class="container">
      {{ csrf_field() }}

      <!-- Portfolio Item Heading -->
      <h1 class="my-4">{{$kopsurat ->jdl_Pdk}}
      </h1>

      <!-- Portfolio Item Row -->
      <div class="row">

        <div class="col-md-5">
          <img class="img-fluid" src="{{ asset('uploads/'.$kopsurat->images)}}" alt="" width="400">
        </div>

        <div class="col-md-4">
          <h3 class="my-3">Deskripsi Produk</h3>
          <p>{{$kopsurat->description}}</p>
          <h3 class="my-3">Harga Produk</h3>
          <ul>
            <li>Rp. {{$kopsurat->hrg_awal}},-</li>
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
          <form class="form-group" action="{{route('kopsurat.store')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <table class="table table-responsive">
                <th>Nama Perusahaan</th>
                <td>
                  <input type="text" name="OF_perusahaan" placeholder="masukkan nama perusahaan anda" class="form-control">
                </td>
                <th>Alamat</th>
                <td>
                  <textarea name="OF_alamat" placeholder="masukkan alamat perusahaan anda" class="form-control"></textarea>
                </td>
              </tr>
              <tr>
                <th>No. Telepon</th>
                <td>
                  <input type="Telepon" name="OF_tlp" placeholder="masukkan no Telepon anda" class="form-control">
                </td>
                <th>Email</th>
                <td>
                  <input type="email" name="OF_email" placeholder="masukkan email anda" class="form-control">
                </td>
              </tr>
              <tr>
                <th>Pemesanan Untuk</th>
                <td>
                   <select class="form-control" name="OF_pemesanan">
                      <option value="50" disabled="true" selected="true">-Jumlah-</option>
                      <option value="50">50</option>
                      <option value="100">100</option>
                    </select>
                    <span id="list_feedback"></span>
                </td>
                </tr>
                <tr>
                  <th>Jenis Kertas</th>
                  <td>
                    <select class="form-control" name="OF_kertas">
                      <option value="0" disabled="true" selected="true">-Pilih Kertas-</option>
                      <option value="standart">Standart</option>
                      <option value="medium">Medium</option>
                    </select>
                  </td>
                </tr>
                <th>Total (Rp) : </th>
                  <td>
                    <input type="text"  name="OF_total"  class="form-control">
                  </td>
                
              </tr>
              <tr>
                <th>Masukkan Informasi tambahan</th>
                <td>
                  <textarea class="form-control" name="OF_description" placeholder="informasi tambahan" style="margin: 0px; width: 400px; height: 192px;"></textarea>
                  <label><i>*bagian ini boleh anda isi atau tidak</i></label>
                </td>
                <th>Logo Perusahaan</th>
                <td>
                  <input type="file" name="OF_images" class="form-control">
                </td>
              </tr>
              <tr>
                <th colspan="4">
                  <input type="hidden" name="productid" value="{{$kopsurat->id}}">
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


  
          