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
                        <table class = "table text-center table-borderless">
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
                                @forelse ($event as $key => $item)
                                <tr>
                                    <th>{{ $event->firstItem() + $key}}</th>
                                    <td>{{$item->ruangan->Namaruangan}}</td>
                                    <td>{{$item->start}} - {{$item->end}}</td>
                                    <td>{{$item->title}}</td>
                                    @csrf
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center">Tidak ada data Acara.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $event->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection