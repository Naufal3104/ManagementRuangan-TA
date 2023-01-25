@extends('admin.app')
@section('title','Edit')
@section('content-title','Edit Ruangan')
@section('content')
<div class="container-fluid py-4 mt-4">
    <div class="row">
        <div class = "row">
            <div class = "col-lg-12">
                <div class = "card shadow mb-4">
                    <div class = "card-body">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addModal">Tambah Ruangan</button>
                        <table class = "table text-center">
                            <thead>
                                <tr>
                                    <th scope = "col">No.</th>
                                    <th scope = "col">Ruangan</th>
                                    <th scope = "col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1?>
                                @foreach ($data as $item)
                                <tr>
                                    <th scope = "row">{{ $i++}}</th>
                                    <td>{{$item->Namaruangan}}</td>
                                    <td>
                                        <a href = "editruangan/{{ $item->id}}/edit" class = "btn btn-warning btn-group"><i class = "ni ni-lock-circle-open"></i></a>
                                        <form action="editruangan/{{$item->id}}" method="POST" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class = "btn btn-danger btn-group"><i class = "ni ni-fat-remove"></i></button>
                                        </form>
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