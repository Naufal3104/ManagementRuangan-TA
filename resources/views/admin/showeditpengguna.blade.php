@extends('admin.app')
@section('title','Edit')
@section('content-title','Show Pengguna')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class = "row">
            <div class = "col-lg-12">
                <div class = "card shadow mb-4">
                    <div class = "card-body">
                        <h2 class="text-center">{{$data->ruangan->Namaruangan}}</h2>
                        <h3>Tipe pengguna</h3>
                        @if($data->id_guest == null)
                        <p>Warga sekolah</p>
                        @else
                        <p>Warga luar</p>
                        @endif
                        <h3>Nama pengguna</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection