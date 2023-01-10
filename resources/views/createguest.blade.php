@extends('app')
@section('title','Order')
@section('content-title','Booking')
@section('content')
{{-- @dd($data) --}}
<div class="container-fluid py-4">
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
                        <form class="row g-3" method = "POST" enctype  = "multipart/form-data" action="/guest">
                          @csrf 
                            <div class="col-md-6">
                              <label for="Nama" class="form-label">Nama</label>
                              <input type="text" class="form-control" placeholder="Nama" id="Nama" name="Nama" value="{{old('Nama')}}">
                            </div>
                            <div class="col-md-6">
                              <label for="NomorTelepon" class="form-label">Nomor Telepon</label>
                              <input type="text" class="form-control" placeholder="Nomor telepon" id="NomorTelepon" name="NomorTelepon" value="{{old('NomorTelepon')}}">
                            </div>                            
                            <div class = "form-group">
                                <label for = "id_ruangan">Ruangan</label>
                            <select type = "text" class = "form-control form-select" id = "id_ruangan" name = "id_ruangan" value = "{{old('id_ruangan')}}">
                                <option selected ></option>
                                @foreach ($data as $item)
                                <option value = {{$item->id}}>{{$item->Namaruangan}}</option>
                                @endforeach
                            </select>
                            </div>                                                      
                            <div class="col-12">
                              <button type="submit" class="btn btn-primary" value="Simpan">Pesan</button>
                            </div>
                            <div class="col-12">
                              <ul>
                                <li>Peminjaman ruangan sekolah akan disetujui bila tidak ada kegiatan pada hari itu di ruangan tersebut</li>
                                <li>Setelah disetujui oleh pihak sekolah, mohon datang ke ruang Tata Usaha SMKN 1 Surabaya untuk melakukan pembayaran</li>
                              </ul>
                            </div>
                          </form>
                          @if (\Session::has('success'))
                            <div class="alert alert-success text-center">
                              <ul>
                                <ol>{!! \Session::get('success') !!}</ol>
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