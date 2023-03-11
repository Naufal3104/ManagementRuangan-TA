@extends('app')
@section('title','Event')
@section('content-title','Rincian Acara')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class = "row">
            <div class = "col-lg-4">
                <div class = "card shadow mb-4">
                    <div class = "card-body text-center" style="text-align: center;">
                        <h1>{{$event->ruangan->Namaruangan}}</h1>
                        <img src="{{asset('/template/img/'.$event->ruangan->foto)}}" class="rounded-circle" alt="ruangan" width="400" /><br><br>
                        <h4><br>Waktu penggunaan</h4>
                        <h4 class="fs-5">{{$event->start}}</h4>
                        <h4>Sampai hingga</h4>
                        <h4 class="fs-5">{{$event->end}}</h4>
                    </div>
                </div>
            </div>
            <div class ="col-lg-8">
                <div class = "card shadow">
                        <div class ="card header">
                            <div class = "card-body text-center">
                                <h1>Pengguna</h1>
                                @if($event->id_user == null && $event->nisn == null && $event->nip == null)
                                    <h4>Guest</h4>
                                    <h5>Nama : {{$event->transaksi->Nama}}</h5>
                                    <h5>Nama : {{$event->transaksi->NomorTelepon}}</h5>
                                    <h5>Nama : {{$event->transaksi->alamat}}</h5>
                                @elseif($event->id_transaksi == null && $event->nisn == null && $event->nip == null)
                                    <h4>User Registration</h4>
                                    <h5>Nama : {{$event->user->Namapengguna}}</h5>
                                    <h5>Nomor Telepon : {{$event->user->NomorTelepon}}</h5>
                                    <h5>Alamat : {{$event->user->Alamat}}</h5>
                                    <h5>Jenis Kelamin : {{$event->user->jeniskelamin}}</h5>
                                @elseif($event->id_transaksi == null && $event->id_user == null)
                                    <h4>User</h4>
                                    <h5>NISN : 
                                        @if($event->nisn == null)
                                        Tidak ada
                                        @else
                                        {{$event->nisn}}
                                        @endif
                                    </h5>
                                    <h5>NIP : 
                                        @if($event->nip == null)
                                        Tidak ada
                                        @else
                                        {{$event->nip}}
                                        @endif
                                    </h5>
                                @endif
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection

