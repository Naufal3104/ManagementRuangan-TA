{{-- @extends('admin.app')
@section('title','Edit')
@section('content-title','Show Pengguna')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class = "row">
            <div class = "col-lg-12">
                <div class = "card shadow mb-4">
                    <div class = "card-body">
                        <h3 class="text-center">{{$data->ruangan->Namaruangan}}</h3>
                        <h4>Tipe pengguna</h4>
                        @if($data->id_guest == null)
                        <p class="font-weight-bold">Warga sekolah</p>
                        @else
                        <p>Warga luar</p>
                        @endif
                        <h4>Nama pengguna</h4>
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
        @if($data->id_user == null)
        Guest<br>
        Nama    :   {{$data->transaksi->Nama}}<br>
        Nomor Telepon   :   {{$data->transaksi->NomorTelepon}}<br>
        Alamat : {{$data->transaksi->alamat}}<br><br>
        Ruangan :   {{$data->ruangan->Namaruangan}}<br> 
        Acara : {{$data->title}}<br>
        Waktu penggunaan  : {{$data->start}}<br>
        Waktu hingga : {{$data->end}}
        @else
        User<br> 
        Nama    :   {{$data->user->Namapengguna}}<br>
        Nomor Telepon   :   {{$data->user->Nomortelepon}}<br>
        NISN/NRG    :   {{$data->user->nisn}}<br>
        Jenis Kelamin   :   {{$data->user->jeniskelamin}}<br>
        Alamat  :   {{$data->user->Alamat}}<br><br>
        Ruangan :   {{$data->ruangan->Namaruangan}} <br>
        Acara : {{$data->title}}<br>
        Waktu penggunaan  : {{$data->start}}<br>
        Waktu hingga : {{$data->end}}
        @endif
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
