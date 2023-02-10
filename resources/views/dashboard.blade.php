@extends('app')
@section('title','Dashboard')
@section('content-title','Dashboard')
@section('content')
<style>
  .my-custom-scrollbar {
    position: relative;
    height: 200px;
    overflow: auto;
  }

  .table-wrapper-scroll-y {
    display: block;
  }
</style>
  <div class="container-fluid py-4">
    <div class="row">
        <div class = "row">
            <div class = "col-lg-6">
                <div class = "card shadow mb-4 h-93">
                    <div class = "card-body text-center">
                      <h2>Pilih Layanan</h2><br> <br> 
                        <div class="">    
                            <a href = "/order" class = "btn btn-info btn-sm btn-outline-light w-50"><i class = "ni ni-circle-08"></i><br>Booking</a>
                            <a href = "/full-calender" class = "btn btn-warning btn-sm btn-outline-light w-50"><i class = "ni ni-zoom-split-in"></i><br>Lihat jadwal</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class = "col-lg-6">
              <div class = "card shadow mb-4 h-93">
                  <div class = "card-body text-center">
                    <h2>Butuh bantuan?</h2><br><br><br>  
                    <div class="col-ml-12">  
                      <a href = "https://wa.me/62{{$admin->telp}}" class = "btn btn-success btn-lg btn-outline-light w-50"><i class = "ni ni-send"></i><br>Hubungi Admin</a>  
                    </div>
                  </div>
              </div>
          </div>
            <div class = "col-lg-6">
                <div class = "card shadow mb-4">
                    <div class = "card-body text-center">
                      <h2>Daftar Ruangan</h2><br>
                      <div class="table-wrapper-scroll-y my-custom-scrollbar mb-3">
                      <table class="table text-center table-borderless">
                        <tbody>
                          <tr>
                            @foreach($data as $item)
                            <td>{{$item->Namaruangan}}</td>
                            <td>
                              <a class="btn btn-info " href="#" onclick="show('{{ $item->id }}', event)" data-toggle="modal" data-target="#roomModal"><i class="ni ni-air-baloon"></i></a>
                            </td>
                          </tr>
                          @endforeach
                          <div class="modal modal-ruangan" id="roomModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

                          </div>
                          <script>
                            function show(id){
                                $.get('/room/'+id, function(data){
                                    $('.modal-ruangan').html(data);
                                })
                            }
                        </script>
                        </tbody>
                      </table>
                      </div>
                    </div>
                </div>
            </div>
            <div class = "col-lg-6">
                <div class = "card shadow mb-4">
                    <div class = "card-body text-center">
                      <a href="/full-calender" class="btn">
                      <h2>Acara</h2><br>  
                      <div class="table-wrapper-scroll-y my-custom-scrollbar mb-3">
                      <table class="table text-center table-borderless">
                        <thead>
                          <th>Ruangan</th>
                          <th>Pengguna</th>
                          <th>Waktu penggunaan - Hingga</th>
                        </thead>
                        <tbody>
                          <tr>
                            @foreach($event as $item)
                            <td>{{$item->ruangan->Namaruangan}}</td>
                            <td>
                              @if($item->id_transaksi == null)
                              {{$item->user->Namapengguna}}
                              @else
                              {{$item->transaksi->Nama}}
                              @endif
                            </td>
                            <td>{{$item->start}} - {{$item->end}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                      </div>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection
