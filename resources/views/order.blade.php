@extends('app')
@section('title','Order')
@section ('content-title','Pesan Ruang')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class = "row">
            <div class = "col-lg-12">
                <div class = "card shadow mb-4">
                    <div class = "card-body text-center">
                        <form class="row g-3" action="">
                            <h2>Pilih Pengguna</h2>
                            <div class="col-md-6"><br>    
                                <a href = "/user" class = "btn btn-success btn-lg btn-outline-dark w-50"><i class = "ni ni-circle-08"></i><br>Warga Sekolah</a>
                            </div>
                            <div class="col-md-6"><br>
                                <a href = "/guest" class = "btn btn-warning btn-lg btn-outline-dark w-50"><i class = "ni ni-bulb-61"></i><br>Warga Luar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection