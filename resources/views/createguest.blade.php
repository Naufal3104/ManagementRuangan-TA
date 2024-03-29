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
                        <form class="row g-3" method = "POST" enctype  = "multipart/form-data" action="/guest">
                          <a href="/guest"><i class="ni ni-bold-left ni-lg"></i></a>
                          @csrf 
                            <div class="col-md-6">
                              <label for="Nama" class="form-label">Nama</label>
                              <input type="text" class="form-control" placeholder="Nama" id="Nama" name="Nama" value="{{old('Nama')}}">
                            </div>
                            <div class="col-md-6">
                              <label for="NomorTelepon" class="form-label">Nomor Telepon</label>
                              <input type="text" class="form-control" placeholder="Nomor telepon" id="NomorTelepon" name="NomorTelepon" value="{{old('NomorTelepon')}}">
                            </div>       
                            <div class="col-md-6">
                              <label for="alamat" class="form-label">Alamat</label>
                              <input type="text" class="form-control" placeholder="Alamat" id="alamat" name="alamat" value="{{old('alamat')}}">
                            </div>                     
                            <div class="col-md-6">
                              <label for="tanggal_penggunaan" class="form-label">Tanggal Penggunaan</label>
                              <input type="date" name="tanggal_penggunaan" id="tanggal_penggunaan" class="form-control" value="{{old('tanggal_penggunaan')}}">
                            </div>                     
                            <div class = "col-md-12">
                                <label for = "id_ruangan">Ruangan</label>
                            <select type = "text" class = "form-control form-select" id = "id_ruangan" name = "id_ruangan" value = "{{old('id_ruangan')}}">
                                @foreach ($ruangan as $item)
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
                                <li>Setelah disetujui oleh pihak sekolah, mohon datang ke ruang Tata Usaha SMKN 1 Surabaya untuk melakukan konfirmasi sekaligus pembayaran</li>
                              </ul>
                            </div>
                          </form>
                          @if (count($errors) > 0)
                            <ul class="text-danger">
                                @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
                @if (\Session::has('success'))
                <div class="alert alert-success text-center">
                  <ul>
                    <ol>{!! \Session::get('success') !!}<button type="button" class="btn-close position-absolute end-1" data-bs-dismiss="alert" aria-label="Close"></button></ol>
                  </ul>
                </div>
              @endif
            </div>
        </div>
    </div>
</div>
@endsection

<script>

  
  //    	  $('.date_pick').datetimepicker({
	// format: 'DD/MM/YYYY',			
  //              pickTime: false
              
  //           });
            
  //        $('.time_pick').datetimepicker({
	// 		pickDate: false
  //           }); 
</script>