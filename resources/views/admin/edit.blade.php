@extends('admin.app')
@section('title','Edit')
@section('content-title','Edit')
@section('content')
<div class="container-fluid py-4 mt-4">
    <div class="row">
        <div class = "row">
            <div class = "col-lg-6">
                <div class = "card shadow mb-2">
                    <div class = "card-body text-center">
                        <h3>Edit Pengguna</h3>
                        <a href = "/editpengguna" class = "btn btn-success btn-outline-light btn-lg w-20"><i class = "ni ni-bulb-61"></i></a>
                    </div>
                </div>
            </div>
            <div class = "col-lg-6">
                <div class = "card shadow mb-2">
                    <div class = "card-body text-center">
                        <h3>Edit Ruangan</h3>
                        <a href = "/editruangan" class = "btn btn-warning btn-outline-light btn-lg w-20"><i class = "ni ni-bulb-61 "></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
