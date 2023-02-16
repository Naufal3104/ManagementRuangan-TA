@extends('admin.app')
@section('title','Dashboard')
@section('content-title','Dashboard')
@section('content')
  <div class="container-fluid py-4 mt-4">
    <div class = "row">
        <div class = "col-lg-12">
            <div class = "card shadow ">
                <div class = "card-body">
                    <table class = "table text-center table-borderless">
                        <h4 class="text-center">Jadwal</h4>
                        <thead>
                            <tr>
                                <th scope = "col">Ruangan</th>
                                <th scope = "col">Waktu - Hingga </th>
                                <th scope = "col">Acara</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($event as $item)
                            <tr>
                                <td>{{$item->ruangan->Namaruangan}}</td>
                                <td>{{$item->start}} - {{$item->end}}</td>
                                <td>{{$item->title}}</td>      
                            </tr>                  
                            @empty
                                <tr>
                                  <td colspan="5" class="text-center">Tidak ada data Acara.</td>
                                </tr>
                            @endforelse
                            @csrf
                        </tbody>
                    </table>
                    {{ $event->links()}}<br>
                    <div class="text-center">
                        @foreach($event as $item)
                        <form action="admin/delete/{{$item->id}}" method="POST">
                            @csrf
                            @endforeach
                            <button type="submit" class ="btn btn-info w-25"><i class="ni ni-watch-time"></i><br>Perbarui Jadwal</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  
@endsection

