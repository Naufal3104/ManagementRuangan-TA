@extends('app')
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
@endsection