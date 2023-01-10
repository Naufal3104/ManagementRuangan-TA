@extends('admin.app')
@section('title','Dashboard')
@section('content-title','Dashboard')
@section('content')
<div class="container-fluid py-4 mt-4">
    <div class = "row">
        <div class = "col-lg-12">
            <div class = "card shadow">
                <div class = "card-body text-center">
                    @foreach($data1 as $item)
                    <form action="admin/{{$item->id}}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        @endforeach
                        <button class = "btn btn-info btn-lg"><i class="ni ni-watch-time"></i><br>Perbarui Jadwal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>    
</div>
  <div class="container-fluid">
    <div class = "row">
        <div class = "col-lg-12">
            <div class = "card shadow ">
                <div class = "card-body">
                    <table class = "table text-center">
                        <h4 class="text-center">Jadwal</h4>
                        <thead>
                            <tr>
                                <th scope = "col">No.</th>
                                <th scope = "col">Ruangan</th>
                                <th scope = "col">Waktu - Hingga </th>
                                <th scope = "col">Acara</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1?>
                            @foreach ($data1 as $item)
                            <tr>
                                <th scope = "row">{{ $i++}}</th>
                                <td>{{$item->ruangan->Namaruangan}}</td>
                                <td>{{$item->Waktupenggunaan}} - {{$item->Waktuhingga}}</td>
                                <td>{{$item->Acara}}</td>                                
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
@endsection
