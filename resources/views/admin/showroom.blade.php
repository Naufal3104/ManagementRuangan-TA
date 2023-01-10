@extends('admin.app')
@section('title','About Room')
@section('content-title','Rincian')
@section('content')
  <div class="container-fluid py-4 mt-4">
    <div class="row">
        <div class = "row">
            <div class = "col-lg-4">
                <div class = "card shadow mb-4">
                    <div class = "card-body text-center" style="text-align: center;">
                        <h1>{{$data->Namaruangan}}</h1>
                        <h4><br>Waktu penggunaan</h4>
                        @if ($data->id_user == null)
                        <p class="fs-5">Tidak ada</p>    
                        @else
                        <p class="fs-5">{{$data->Waktupenggunaan}}</p>   
                        @endif
                        <h4>Sampai hingga</h4>
                        @if ($data->id_user == null)
                        <p class="fs-5">Tidak ada</p>
                        @else
                        <p class="fs-5">{{$data->Waktuhingga}}</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class ="col-lg-8">
                <div class = "card shadow">
                        <div class ="card header">
                            <div class = "card-body text-center">
                                <h4>Pengguna</h4>
                                @if ($data->id_user == null)
                                <p class="fs-5">Tidak ada</p>    
                                @else
                                <p class="fs-5">{{$data->user->Namapengguna}}</p>
                                @endif
                                <h4>Nomor telepon</h4>
                                @if ($data->id_user == null)
                                <p class="fs-5">Tidak ada</p>
                                @else
                                <p class="fs-5">{{$data->user->Nomortelepon}}</p>
                                @endif
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection
