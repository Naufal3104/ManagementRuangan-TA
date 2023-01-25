@extends('app')
@section('title','Order')
@section('content-title','Info Ruangan')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class = "row">
            <div class = "col-lg-12">
                <div class = "card shadow mb-4">
                    <div class = "card-body">
                        <table class = "table text-center">
                            <div class="position-absolute end-0 translate-middle mt-3">
                                <a href="user/register" class="btn btn-primary btn-sm">Register</a><br>
                            </div>
                            <thead>
                                <?php
                                date_default_timezone_set("Asia/Jakarta");
                                $waktu = "Pukul".date(" h:i a");
                                ?>
                                <a href="/order" class=""><i class="ni ni-bold-left ni-lg"></i></a><p class="">{{$waktu}}</p>   
                                <tr>
                                    <th scope = "col">No.</th>
                                    <th scope = "col">Ruangan</th>
                                    <th scope = "col">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1?>
                                @foreach ($data as $item)
                                <tr>
                                    <th scope = "row">{{ $i++}}</th>
                                    <td>{{$item->Namaruangan}}</td>
                                    <td><a href = "user/create" class = "btn btn-success btn-group"><i class = "ni ni-fat-add"></i></a></td>    
                                    @endforeach
                                    @csrf
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <a href="/guest" class="text-end">Lihat jadwal penggunaan</a>
            </div>
        </div>
    </div>
</div>
@endsection