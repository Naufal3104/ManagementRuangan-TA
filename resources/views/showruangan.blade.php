<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Rincian Ruangan</h5>
      </div>
      <div class="modal-body">
        <p class="fw-bold">{{$ruangan->Namaruangan}}</p>
        @if($ruangan->foto == null)
        <p>Tidak ada foto ruangan</p>
        @else
        <img src="{{asset('/template/img/'.$ruangan->foto)}}" alt="image" width="200" />
        @endif
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>