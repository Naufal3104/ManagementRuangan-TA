@extends('admin.app')
@section('title','Request')
@section('content-title','Request')
@section('content')
<div class="container-fluid py-4 mt-4">
        <div class = "row">
            <div class = "col-lg-12">
                <div class = "card shadow mb-4">
                    <div class = "card-body">
                        <table class = "table table-borderless table-responsive-xl">
                            <thead class="text-center">
                                    <tr>
                                        <th scope = "col">Daftar Permintaan</th>
                                        <th scope = "col">Action</th>
                                    </tr>
                                </thead>
                            <tbody>
                                @foreach ($transaksi as $item)
                                <tr>
                                    <td>
                                        {{$item->Nama}} Mengajukan pemesanan untuk ruangan/fasilitas {{$item->ruangan->Namaruangan}} | {{$item->token}} | 
                                    @if($item->Status == "1")
                                        Disetujui
                                    @else
                                        Menunggu persetujuan
                                    @endif
                                    </td>
                                    <td class="text-center">
                                        <a class="btn btn-info " href="#" onclick="show('{{ $item->id }}', event)" data-toggle="modal" data-target="#requestModal">Rincian</a>
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal-{{$item->id}}">Izinkan</button> 
                                        <form action="adminrequest/{{$item->id}}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data permintaan?')">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger" type="submit">Hapus</button>    
                                        </form>                          
                                    </td>   
                                </tr>
                                <div class="modal fade" id="exampleModal-{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Izinkan Transaksi</h5>
                                        </div>
                                        <div class="modal-body">
                                          <form method = "POST" enctype  = "multipart/form-data" action="{{route('adminrequest.update',$item->id)}}">
                                            {{method_field('PUT')}}
                                             @csrf
                                            Izinkan pemesanan ruangan?
                                            <input type="hidden" class="form-control" id="Status" name="Status" value="1">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-success" value="Simpan">Izinkan</button>
                                          </form>
                                          <form method = "POST" enctype  = "multipart/form-data" action="{{route('adminrequest.update',$item->id)}}">
                                            {{method_field('PUT')}}
                                             @csrf
                                             <input type="hidden" class="form-control" id="Status" name="Status" value="">
                                             <button type="submit" class="btn btn-primary">Batalkan Izin</button>
                                             <button type="button" class="btn btn-danger" data-dismiss="modal">Batalkan</button>
                                          </form>
                                          </div>
                                      </div>
                                    </div>
                                  </div> 
                                @endforeach
                            </tbody>
                        </table>
                        {{$transaksi->links()}}
                    </div>
                </div>
                @if (\Session::has('success'))
                <div class="alert alert-success text-center fw-bold">
                  <ul>
                    <ol>{!! \Session::get('success') !!}<button type="button" class="btn-close position-absolute end-1" data-bs-dismiss="alert" aria-label="Close"></button></ol>
                    <ol><a href="/editpengguna">Menuju ke management ruangan</a></ol>
                  </ul>
                </div>
              @endif
            </div>
        </div>
</div>
<div class="modal modal-transaksi" id="requestModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

</div>
<script>
    function show(id){
        $.get('/adminrequest/'+id, function(data){
            $('.modal-transaksi').html(data);
        })
    }
</script>
@endsection

