@foreach($bantal as $btl)
    <tr>
        <th colspan="2" style="text-align: center;color: orange;">Order List Bantal Foto</th>
    </tr>
    <tr>
        <th>Product Name</th>
        <td>{{$btl->jdl_Pdk}}</td>
    </tr>
    <tr>
        <th>Sub-category Name</th>
        <td>{{$btl->name}}</td>
    </tr>
    <tr>
        <th>Images Product</th>
        <td><img src="{{asset('uploads/'.$btl->images)}}"></td>
    </tr>
    <tr>
        <th>Description Product Order</th>
        <td>{{$btl->BT_description}}</td>
    </tr>
    <tr>
        <th>Images Order</th>
        <td><img src="{{asset('orders/'.$btl->BT_images)}}"></td>
    </tr>
    <tr>
        <th>Ukuran Product Order</th>
        <td>{{$btl->BT_ukuran}}</td>
    </tr>
    <tr>
        <th>Jenis Product Order</th>
        <td>{{$btl->BT_jenis}}</td>
    </tr>
    <tr></tr>
@endforeach