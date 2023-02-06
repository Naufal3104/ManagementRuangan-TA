{{-- @extends('app')
@section('title','Event')
@section('content-title','Event')
@section('content')
<div class="container-fluid py-4 mt-4">
    <div class="row">
        <div class = "row">
            <div class = "col-lg-4">
                <div class = "card shadow mb-4">
                    <div class = "card-body text-center">
                        <h1 class="fw-bold">{{$event->ruangan->Namaruangan}}</h1>
                        @if($event->ruangan->foto == null)
                        <h3>Tidak ada foto ruangan</h3>
                        @else
                        <img src="{{asset('/template/img/'.$event->ruangan->foto)}}" alt="image" width="410" class="rounded-circle img-thumbnail mt-4" />
                        @endif
                    </div>
                </div>
            </div>
            <div class ="col-lg-8">
                <div class = "card shadow">
                        <div class ="card header">
                            <div class="card-body text-center">
                                <h2 class="fw-bold">Acara</h2>
                                <h3>{{$event->title}}</h3>
                            </div>
                            <div class = "card-body text-center">
                                @if($event->id_transaksi == null)
                                    <h2 class="fw-bold">Pengguna</h2>
                                    <h3>{{$event->user->Namapengguna}}</h3>
                                    <h2 class="fw-bold">Nomor telepon</h2>
                                    <h3>{{$event->user->Nomortelepon}}</h3>
                                    <h2 class="fw-bold">NISN/NRG</h2>
                                    <h3>{{$event->user->nisn}}</h3>
                                    <h2 class="fw-bold">Alamat</h2>
                                    <h3>{{$event->user->Alamat}}</h3>
                                @else
                                    <h2 class="fw-bold">Pengguna</h2>
                                    <h3>{{$event->transaksi->Nama}}</h3>
                                    <h2 class="fw-bold">Nomor telepon</h2>
                                    <h3>{{$event->transaksi->NomorTelepon}}</h3>
                                    <h2 class="fw-bold">Alamat</h2>
                                    <h3>{{$event->transaksi->alamat}}</h3>
                                @endif
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Rincian penggunaan</h5>
      </div>
      <div class="modal-body">     
        <p class="fw-bold">{{$event->ruangan->Namaruangan}}</p>
        @if($event->ruangan->foto == null)
        <p>Tidak ada foto ruangan</p>
        @else
        <img src="{{asset('/template/img/'.$event->ruangan->foto)}}" alt="image" width="200" /><br><br>
        @endif  
        Ruangan :   {{$event->ruangan->Namaruangan}}<br> 
        Acara : {{$event->title}}<br>
        Waktu penggunaan  : {{$event->start}}<br>
        Waktu hingga : {{$event->end}}<br>
        @if($event->id_user == null)
        Guest<br>
        Nama    :   {{$event->transaksi->Nama}}<br>
        Nomor Telepon   :   {{$event->transaksi->NomorTelepon}}<br>
        Alamat  :   {{$event->transaksi->alamat}}<br><br>
        @else
        User<br> 
        Nama    :   {{$event->user->Namapengguna}}<br>
        Nomor Telepon   :   {{$event->user->Nomortelepon}}<br>
        NISN/NRG    :   {{$event->user->nisn}}<br>
        Jenis Kelamin   :   {{$event->user->jeniskelamin}}<br>
        Alamat  :   {{$event->user->Alamat}}<br><br>
        @endif
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
