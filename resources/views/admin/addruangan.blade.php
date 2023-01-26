@extends('admin.app')
@section('title','Edit')
@section('content-title','Tambah Ruangan')
@section('content')
{{-- @dd($data) --}}
<div class="container-fluid py-4 mt-4">
    <div class="row">
        <div class = "row">
            <div class = "col-lg-12">
                <div class = "card shadow mb-4">
                    <div class = "card-body">
                      @if (count($errors) > 0)
                        <div class = "alert alert-warning text-center">
                          <ul>
                              @foreach($errors->all() as $error)
                              <ol>{{ $error }}</ol>
                              @endforeach
                          </ul>
                        </div>
                      @endif
                        <form class="row g-3" method = "POST" enctype  = "multipart/form-data" action="{{route('editruangan.store')}}">
                          @csrf 
                            <div class="col-md-12">
                              <label for="Namaruangan" class="form-label">Nama Ruangan</label>
                              <input type="text" class="form-control" autocomplete="off" placeholder="Nama ruangan" id="Namaruangan" name="Namaruangan" value="{{old('Namaruangan')}}">
                            </div>
                            <div class="col-md-12">
                              <label for="foto" class="form-label">Foto ruangan(opsional)</label>
                              <input class = "form-control-file" type = "file" class = "form-control" id = "foto" name = "foto" value = "{{old('foto')}}">                            </div>
                            <div class="col-12">
                              <button type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
                              <a href="/editruangan" class="btn btn-danger" value="Simpan">Kembali</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection