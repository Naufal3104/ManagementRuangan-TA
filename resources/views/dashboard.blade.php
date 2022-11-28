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
                      <h2>Pilih Layanan</h2>
                        <div class="">    
                            <a href = "/user" class = "btn btn-info btn-lg btn-outline-dark"><i class = "ni ni-circle-08"></i><br>Booking Ruangan</a>
                            <a href = "/guest" class = "btn btn-danger btn-lg btn-outline-dark"><i class = "ni ni-bulb-61"></i><br>Lihat jadwal ruangan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection
