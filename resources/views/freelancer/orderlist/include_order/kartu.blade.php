@foreach($bantal as $btl)
    <tr>
        <th colspan="2" style="text-align: center;color: orange;">Order List Bantal Foto</th>
    </tr>
    <tr>
        <th>Product Name</th>
        <td>{{$ban->jdl_Pdk}}</td>
    </tr>
    <tr>
        <th>Sub-category Name</th>
        <td>{{$ban->name}}</td>
    </tr>
    <tr>
        <th>Images Product</th>
        <td><img src="{{asset('uploads/'.$ban->images)}}"></td>
    </tr>
    <tr>
        <th>Description Product Order</th>
        <td>{{$ban->BN_description}}</td>
    </tr>
    <tr>
        <th>Images Order</th>
        <td><img src="{{asset('orders/'.$ban->BN_images)}}"></td>
    </tr>
    <tr>
        <th>Ukuran Product Order</th>
        <td>{{$ban->BN_ukuran}}</td>
    </tr>
    <tr>
        <th>Jenis Product Order</th>
        <td>{{$ban->BN_jenis}}</td>
    </tr>
    <tr></tr>
@endforeach