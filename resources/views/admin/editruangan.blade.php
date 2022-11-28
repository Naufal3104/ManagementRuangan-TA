@extends('admin.app')
@section('title','Edit')
@section('content-title','Edit Ruangan')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class = "row">
            <div class = "col-lg-12">
                <div class = "card shadow mb-4">
                    <div class = "card-body">
                        <table class = "table text-center">
                            <thead>
                                <tr>
                                    <th scope = "col">No.</th>
                                    <th scope = "col">Ruangan</th>
                                    <th scope = "col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1?>
                                @foreach ($data as $item)
                                <tr>
                                    <th scope = "row">{{ $i++}}</th>
                                    <td>{{$item->Namaruangan}}</td>
                                    <td>
                                        <a class="btn btn-info " href="#" onclick="create('{{ $item->id }}', event)" data-toggle="modal" data-target="#requestModal">Rincian</a>                                        
                                        <a href = "editpengguna/{{ $item->id}}/edit" class = "btn btn-warning btn-group"><i class = "ni ni-key-25"></i></a>
                                        <form action="editpengguna/{{$item->id}}" method="POST" class="d-inline">
                                            @method('delete')
                                            <button class = "btn btn-danger btn-circle btn-group"><i class = "ni ni-key-25"></i></button>
                                        </form>
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
    function create(id){
        $.get('/adminedit/'+id, function(data){
            $('.modal-transaksi').html(data);
        })
    }
</script>
@endsection