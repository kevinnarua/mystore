@extends('layouts.conquer2')
@section('javascript')
<script>
function getDetailData(id) {
    $.ajax({
    type:'POST',
    url:'{{route("transaction.showAjax")}}',
    data:'_token= <?php echo csrf_token() ?> &id='+id,
    success:function(data) {
    $("#msg").html(data.msg);
    }
    });
}


</script>
@endsection
@section('isitransaksi')
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Pembeli</th>
            <th>Kasir</th>
            <th>Tanggal Transaction</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $d)
        <tr>
            <td>{{$d->id}}</td>
            <td>{{$d->buyer->name}}</td>
            <td>{{$d->user->name}}</td>
            <td>{{$d->transaction_date}}</td>
            
            <td><a class="btn btn-default" data-toggle="modal" href="#basic" 
            onclick="getDetailData({{$d->id}});"></a>Lihat Rincian Pembeli</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection