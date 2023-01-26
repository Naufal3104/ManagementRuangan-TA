@extends('app')
@section('title','Order')
@section('content-title','Pesan Ruang')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class = "row">
            <div class = "col-lg-12">
                <div class = "card shadow mb-4">
                    <div class = "card-body">
                        <table class = "table text-center">
                            <div class="position-absolute end-0 translate-middle mt-3">
                                <a href="{{ route('guest.create') }}" class="btn btn-primary btn-sm">Pesan</a><br>
                            </div>
                            <thead>
                                <?php
                                date_default_timezone_set("Asia/Jakarta");
                                $waktu = "Pukul".date(" h:i a");
                                ?>
                                <a href="/order"><i class="ni ni-bold-left ni-lg"></i></a><p class="">{{$waktu}}</p>
                                <tr>
                                    <th scope = "col">No.</th>
                                    <th scope = "col">Ruangan</th>
                                    <th scope = "col">Jadwal - Hingga</th>
                                    <th scope = "col">Acara</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1?>
                                @foreach ($data as $item)
                                <tr>
                                    <th scope = "row">{{ $i++}}</th>
                                    <td>{{$item->ruangan->Namaruangan}}</td>
                                    <td>{{$item->start}} - {{$item->end}}</td>
                                    <td>{{$item->title}}</td>
                                    @endforeach
                                    @csrf
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection