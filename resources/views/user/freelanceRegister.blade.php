@extends('templates.user.layout')
@section('content')

  <div class="container">

    <form class="form-group" action="{{route('freelance.store')}}" method="post" style="padding:20px; margin:0 auto; width:75%;" enctype="multipart/form-data">
      {{ csrf_field() }}
      <h3>Daftarkan Dirimu Menjadi Seorang Freelance Desainer</h3>
      <table class="table table-responsive">
        <tr>
          <th>No. Telepon</th>
          <td>
            <input type="number" name="no_tlp" value="" class="form-control">
          </td>
        </tr>
        <tr>
          <th>No. Rekening</th>
          <td>
            <input type="number" name="no_rekening" value="" class="form-control">
          </td>
        </tr>
        <tr>
          <th>Alamat</th>
          <td>
            <textarea name="alamat" rows="8" cols="80" class="form-control"></textarea>
          </td>
        </tr>
        <tr>
          <th>Images</th>
          <td>
            <input type="file" name="images" value="images" class="form-control">
          </td>
        </tr>
        <tr>
          <td colspan="3">
            <input type="submit" name="btnsubmit" value="Simpan" class="btn btn-danger">
          </td>
        </tr>
      </table>
    </form>

  </div>

@stop
