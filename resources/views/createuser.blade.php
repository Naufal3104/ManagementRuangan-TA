@extends('app')
@section('title','Order')
@section('content-title','Register')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class = "row">
            <div class = "col-lg-12">
                <div class = "card shadow mb-4">
                    <div class = "card-body">
                        @if (count($errors) > 0)
                        <div class = "alert alert-warning">
                          <ul>
                              @foreach($errors->all() as $error)
                              <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                        </div>
                      @endif
                        <form class="row g-3" method = "POST" enctype  = "multipart/form-data" action="/user/store">
                          @csrf
                            <div class="col-md-12">
                              <label for="Namapengguna" class="form-label">Nama</label>
                              <input type="text" class="form-control" placeholder="Nama" id="Namapengguna" name="Namapengguna" value="{{old('Namapengguna')}}">
                            </div>
                            <div class="col-md-6">
                              <label for="Nomortelepon" class="form-label">Nomor Telepon</label>
                              <input type="text" class="form-control" placeholder="Nomor telepon" id="Nomortelepon" name="Nomortelepon" value="{{old('Nomortelepon')}}">
                            </div>                            
                            <div class="col-md-6">
                              <label for="NISN" class="form-label">NISN</label>
                              <input type="text" class="form-control" placeholder="NISN" id="NISN" name="NISN" value="{{old('NISN')}}">
                            </div>                            
                            <div class = "form-group">
                                <label for = "JK">Jenis Kelamin</label>
                            <select type = "text" class = "form-control form-select" id = "JK" name = "JK" value = "{{old('JK')}}">
                              <option selected ></option>
                              <option value = "Laki-laki">Laki-laki</option>
                              <option value = "Perempuan">Perempuan</option>
                            </select>
                            <div class="col-md-12">
                              <label for="Alamat" class="form-label">Alamat</label>
                              <input type="text" class="form-control" placeholder="Alamat" id="Alamat" name="Alamat" value="{{old('Alamat')}}">
                            </div>  
                            </div>                                                      
                            <div class="col-12">
                              <button type="submit" class="btn btn-primary" value="Simpan">Pesan</button>
                            </div>
                          </form>
                          @if (\Session::has('success'))
                            <div class="alert alert-success text-center">
                              <ul>
                                <ol>{!! \Session::get('success') !!}</ol>
                                <ol><br>Mohon ingat token user tersebut</ol>
                              </ul>
                            </div>
                          @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection