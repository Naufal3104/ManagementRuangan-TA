@extends('admin.app')
@section('title','Request')
@section('content-title','Request')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class = "row">
            <div class = "col-lg-12">
                <div class = "card shadow mb-4">
                    <div class = "card-body">
                        <table class = "table">
                            <thead class="text-center">
                                    <tr>
                                        <th scope = "col">Daftar Permintaan</th>
                                        <th scope = "col">Action</th>
                                    </tr>
                                </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <td>
                                        @if ($item->status == 0)
                                        {{$item->Nama}} Mengajukan pemesanan untuk ruangan {{$item->ruangan->Namaruangan}} | {{$item->token}}</td>
                                        @else
                                            
                                        @endif
                                    <td class="text-center">
                                        <a class="btn btn-info " href="#" onclick="show('{{ $item->id }}', event)" data-toggle="modal" data-target="#requestModal">Rincian</a>                          
                                        <a class="btn btn-success " href="">Izinkan</a>                          
                                        <a class="btn btn-warning " href="">Hapus</a>                          
                                    </td>
                                    @endforeach
                                    @csrf
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade modal-transaksi" id="requestModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

</div>
<script>
    function show(id){
        $.get('/adminrequest/'+id, function(data){
            $('.modal-transaksi').html(data);
        })
    }
</script>
@endsection

