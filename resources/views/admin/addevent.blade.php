@extends('admin.app')
@section('title','Edit')
@section('content-title','Tambah Penguna')
@section('content')
{{-- @dd($data) --}}
<div class="container-fluid py-4 mt-4">
    <div class="row">
        <div class = "row">
            <div class = "col-lg-12">
                <div class = "card shadow mb-4">
                    <div class = "card-body">
                        <form class="row g-3" method = "POST" enctype  = "multipart/form-data" action="{{route('editpengguna.store')}}">
                          @csrf 
                            <h4 class="text-center text-bold">Pilih salah satu pengguna</h4>
                            <div class="col-md-6"> 
                              <label for="">User</label><br>
                              <label for="">NISN</label>
                              <input type="text"class="form-control" name="" id="">
                            </div>
                            <div class="col-md-6">
                              <Label for="">Guest</Label><br>
                              <label for="id_transaksi" class="form-label">Id Guest</label>
                              <select type="text" class="form-control form-select" id="id_transaksi" name="id_transaksi" value="{{old('id_transaksi')}}">
                                <option selected></option>
                                @foreach ($transaksi as $item)
                                <option value="{{$item->id}}">{{$item->Nama}} - {{$item->id}} - {{$item->token}}</option>
                                @endforeach
                              </select>
                            </div>
                            <div class="col-md-6">
                              <label for="">NIP</label>
                              <input type="text" class="form-control" name="" id="">
                            </div>
                            <div class = "col-md-12">       
                                <label for = "id_ruangan">Pilih Ruangan</label>
                                  <select type = "text" class = "form-control" id = "id_ruangan" name = "id_ruangan">
                                    <option selected></option>
                                      @foreach ($ruangan as $item)
                                          <option value ="{{$item->id}}" >{{$item->Namaruangan}}</option>
                                      @endforeach
                                  </select>
                            </div>
                            <div class = "col-md-12">
                                <label for = "title">Acara</label>
                                <input type = "text" class = "form-control" autocomplete="off" id = "title" name = "title" value = "{{old('title')}}">
                              </div>                                                        
                              <div class = "col-md-12">
                                <label for = "start">Waktu Penggunaan</label>
                                <input type = "datetime-local" class = "form-control" id = "start" name = "start" value = "{{old('start')}}">
                              </div>                              
                              <div class = "col-md-12">
                                <label for = "end">Waktu Hingga</label>
                                <input type = "datetime-local" class = "form-control" id = "end" name = "end" value = "{{old('end')}}">
                              </div>     
                            <div class="col-12">
                              <button type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
                              <a href="/editpengguna" class="btn btn-danger" value="Simpan">Kembali</a>
                            </div>
                            <div class="col-12">
                              @if (count($errors) > 0)
                                <ul class="text-danger">
                                  @foreach($errors->all() as $error)
                                  <li>{{ $error }}</li>
                                  @endforeach
                                </ul>
                                @endif
                                @if (\Session::has('error'))
                                <ul class="text-start text-danger">
                                  <li>{!! \Session::get('error') !!}</li>
                                </ul>
                              </div>
                              @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection