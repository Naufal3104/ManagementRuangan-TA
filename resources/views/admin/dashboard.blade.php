@extends('admin.app')
@section('title','Dashboard')
@section('content-title','Dashboard')
@section('content')
  <div class="container-fluid py-4">
    <div class="row">
        <div class = "row">
            <div class = "col-lg-12">
                <div class = "card shadow mb-4">
                    <div class = "card-body">
                        <table class = "table text-center">
                            <thead>
                                <tr>
                                    <th scope = "col">No.</th>
                                    <th scope = "col">Ruangan</th>
                                    <th scope = "col">Status</th>
                                    <th scope = "col">Deskripsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1?>
                                @foreach ($data as $item)
                                <tr>
                                    <th scope = "row">{{ $i++}}</th>
                                    <td>{{$item->Namaruangan}}</td>
                                    <td>
                                        @if ($item->id_user == null)
                                            Tidak digunakan
                                        @else
                                            Digunakan
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->id_user == null)
                                        <a href = "admin/{{ $item->id}}" class = "btn btn-success btn-group"><i class = "ni ni-archive-2"></i></a>
                                        @else
                                        <a href = "admin/{{ $item->id}}" class = "btn btn-warning btn-group"><i class = "ni ni-archive-2"></i></a>
                                        @endif
                                    </td>    
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
