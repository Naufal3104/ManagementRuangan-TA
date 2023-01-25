@extends('app')
@section('title','Dashboard')
@section('content-title','Dashboard')
@section('content')
  <div class="container-fluid py-4">
    <div class="row">
        <div class = "row">
            <div class = "col-lg-12">
                <div class = "card shadow mb-4">
                    <div class = "card-body text-center">
                      <h2>Pilih Layanan</h2><br>  
                        <div class="">    
                            <a href = "/order" class = "btn btn-info btn-lg btn-outline-dark w-25"><i class = "ni ni-circle-08"></i><br>Booking Ruangan</a>
                            <a href = "/event" class = "btn btn-warning btn-lg btn-outline-dark w-25"><i class = "ni ni-zoom-split-in"></i><br>Lihat jadwal ruangan</a>
                        </div>
                        <div class="col-ml-12">  
                          <a href = "https://wa.me/62{{$data->telp}}" class = "btn btn-success btn-lg btn-outline-dark w-25"><i class = "ni ni-send"></i><br>Hubungi Admin</a>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection
