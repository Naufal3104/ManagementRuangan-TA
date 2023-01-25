@extends('app')
@section('title','Booking Ruang')
@section('content-title','Booking Jadwal Ruangan')
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
                        <form class="row g-3" method = "POST" enctype  = "multipart/form-data" action="/user/save">
                          <a href="/user"><i class="ni ni-bold-left ni-lg"></i></a>
                          @csrf
                          <div class = "col-md-6">       
                          <label for = "id_ruangan">Ruangan</label>
                            <select type = "text" class = "form-control" id = "id_ruangan" name = "id_ruangan">
                                @foreach ($data as $item)
                                    @if ($item->id_ruangan == $item->id)
                                    <option value ="{{$item->id}}" selected>{{$item->Namaruangan}}</option>
                                    @else
                                    <option value="{{$item->id}}">{{$item->Namaruangan}}</option>
                                    @endif
                                @endforeach
                            </select>
                          </div>                         
                          <div class = "col-md-6">
                            <label for = "id_user">Token User</label>
                            <input type = "text" class = "form-control" id = "id_user" name = "id_user" value = "{{old('id_user')}}">
                          </div>                              
                          <div class = "col-md-8">
                            <label for = "Acara">Acara</label>
                            <input type = "text" class = "form-control" id = "Acara" name = "Acara" value = "{{old('Acara')}}">
                          </div>                                                        
                          <div class = "col-md-6">
                            <label for = "Waktupenggunaan">Waktu Penggunaan</label>
                            <input type = "datetime-local" class = "form-control" id = "Waktupenggunaan" name = "Waktupenggunaan" value = "{{old('Waktupenggunaan')}}">
                          </div>                              
                          <div class = "col-md-6">
                            <label for = "Waktuhingga">Waktu Hingga</label>
                            <input type = "datetime-local" class = "form-control" id = "Waktuhingga" name = "Waktuhingga" value = "{{old('Waktuhingga')}}">
                          </div>                              
                            <div class="col-12">
                              <button type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
                            </div>
                            <ul>
                              <ol>
                                Pemesanan ini khusus untuk warga sekolah
                              </ol>
                            </ul>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection