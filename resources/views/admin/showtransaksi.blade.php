<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Rincian permintaan</h5>
      </div>
      <div class="modal-body">
        Nama : {{$transaksi->Nama}}<br>
        Nomor telepon : {{$transaksi->NomorTelepon}}<br>
        Alamat : {{$transaksi->alamat}}<br>
        Pengajuan Ruangan : {{$transaksi->ruangan->Namaruangan}}<br>
        Token : {{$transaksi->token}}<br>
        @if($transaksi->Status == null)
        Status : Belum Disetujui
        @else
        Status : Disetujui
        @endif
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>

{{-- <div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> --}}
