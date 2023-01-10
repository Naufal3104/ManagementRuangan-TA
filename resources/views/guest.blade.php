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
                            echo "Pukul".date(" h:i a",strtotime('-720 minutes'));
                            ?>
                            
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
                                    <td>{{$item->Waktupenggunaan}} - {{$item->Waktuhingga}}</td>
                                    <td>{{$item->Acara}}</td>
                                    {{-- <form action="guest/{{$item->id}}" method="POST" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class = "btn btn-danger btn-circle btn-sm"><i class = "fas fa-trash"></i></button>
                                    </form> --}}
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