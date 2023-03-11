@extends('admin.app')
@section('title','Edit')
@section('content-title','Edit Pengguna')
@section('content')
<div class="container-fluid py-4 mt-4">
    <div class="row">
        <div class = "row">
            <div class = "col-lg-6">
                <div class = "card shadow mb-4">
                    <div class = "card-body">
                        <table class = "table text-center table-responsive-xl table-borderless">
                            <h4 class="text-center">Ruangan dengan User | <a href="{{route('editpengguna.create')}}" class="text-success">Tambah data</a></h4>
                            <thead>
                                <tr>
                                    <th scope = "col">Ruangan</th>
                                    <th scope = "col">Pengguna</th>
                                    <th scope = "col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($user as $item)
                                <tr>
                                    <td>{{$item->ruangan->Namaruangan}}</td>
                                    <td>{{$item->nisn}}{{$item->nip}}</td>
                                    <td>
                                        <a class="btn btn-primary " href="#" onclick="show('{{ $item->id }}', event)" data-toggle="modal" data-target="#requestModal"><i class="ni ni-bulb-61"></i></a>
                                        <a href="editpengguna/{{ $item->id}}/edit" class="btn btn-warning"><i class="ni ni-single-copy-04"></i></a>  
                                        <form action="editpengguna/{{ $item->id}}" method="POST" class="d-inline" onsubmit="return confirm('Hapus data Acara Ini?')">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger"><i class="ni ni-fat-delete"></i></button>      
                                        </form> 
                                    </td>   
                                </tr> 
                                    @empty
                                    <tr>
                                        <td colspan="5">No data</td>
                                    </tr>
                                    @endforelse
                                    @csrf
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class = "col-lg-6">
                <div class = "card shadow mb-4">
                    <div class = "card-body">
                        <table class = "table text-center table-responsive-xl table-borderless">
                            <h4 class="text-center">Ruangan dengan Guest |  <a href="{{route('editpengguna.create')}}" class="text-success">Tambah data</a></h4>
                            <thead>
                                <tr>
                                    <th scope = "col">Ruangan</th>
                                    <th scope = "col">Pengguna</th>
                                    <th scope = "col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @forelse ($guest as $key => $item)
                            <tr>
                                <td>{{$item->ruangan->Namaruangan}}</td>
                                <td>{{$item->transaksi->Nama}}</td>
                                <td>
                                    <a class="btn btn-primary " href="#" onclick="show('{{ $item->id }}', event)" data-toggle="modal" data-target="#requestModal"><i class="ni ni-bulb-61"></i></a>
                                    <a href="editpengguna/{{ $item->id}}/edit" class="btn btn-warning"><i class="ni ni-single-copy-04"></i></a>  
                                    <form action="editpengguna/{{ $item->id}}" method="POST" class="d-inline" onsubmit="return confirm('Hapus data Acara Ini?')">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger"><i class="ni ni-fat-delete"></i></button>      
                                    </form>
                                </td>                                    
                            </tr> 
                            @empty
                                    <tr>
                                        <td colspan="5">No data</td>
                                    </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal modal-transaksi" id="requestModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

</div>
<script>
    function show(id){
        $.get('/editpengguna/'+id, function(data){
            $('.modal-transaksi').html(data);
        })
    }
</script>
@endsection