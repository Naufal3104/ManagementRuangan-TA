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
                        <form class="row g-3" method = "POST" enctype  = "multipart/form-data" action="{{route('editpengguna.update',$jadwal->id)}}">
                            {{method_field('PUT')}}
                            @csrf 
                            <h4 class="text-center text-bold">Pilih salah satu</h4>
                            <div class="col-md-6">
                              <label for="id_user" class="form-label">Id User</label>
                              <input type="text" class="form-control" autocomplete="off" id="id_user" name="id_user" value="{{$jadwal->id_user}}">
                            </div>
                            <div class="col-md-6">
                              <label for="id_guest" class="form-label">Id Guest</label>
                              <input type="text" class="form-control" autocomplete="off" id="id_guest" name="id_guest" value="{{$jadwal->id_guest}}">
                            </div>
                            <div class = "col-md-12">       
                                <label for = "id_ruangan">Pilih Ruangan</label>
                                  <select type = "text" class = "form-control" id = "id_ruangan" name = "id_ruangan">
                                      @foreach ($ruangan as $item)
                                          @if ($item->id_ruangan == $item->id)
                                          <option value ="{{$item->id}}" selected>{{$item->Namaruangan}}</option>
                                          @else
                                          <option value="{{$item->id}}">{{$item->Namaruangan}}</option>
                                          @endif
                                      @endforeach
                                  </select>
                            </div>
                            <div class = "col-md-12">
                                <label for = "Acara">Acara</label>
                                <input type = "text" class = "form-control" autocomplete="off" id = "Acara" name = "Acara" value = "{{$jadwal->Acara}}">
                              </div>                                                        
                              <div class = "col-md-12">
                                <label for = "Waktupenggunaan">Waktu Penggunaan</label>
                                <input type = "datetime-local" class = "form-control" id = "Waktupenggunaan" name = "Waktupenggunaan" value = "{{$jadwal->Waktupenggunaan}}">
                              </div>                              
                              <div class = "col-md-12">
                                <label for = "Waktuhingga">Waktu Hingga</label>
                                <input type = "datetime-local" class = "form-control" id = "Waktuhingga" name = "Waktuhingga" value = "{{$jadwal->Waktuhingga}}">
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
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection