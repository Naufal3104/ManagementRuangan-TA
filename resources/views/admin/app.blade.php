<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/logosmk.png">
  <link rel="icon" type="image/png" href="./assets/img/logosmk.png">
  <title>
    @yield('title')
  </title>
  @include('admin.css')
</head>
<body class="g-sidenav-show bg-gray-100">
@include('admin.sidebar')
@include('admin.topbar')
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addModal">Tambahkan Ruangan</h5>
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form method = "POST" enctype  = "multipart/form-data" action="{{route('editruangan.store')}}">
              @csrf 
              <input type="text" class="form-control" autocomplete="off" placeholder="Nama ruangan" id="Namaruangan" name="Namaruangan" value="{{old('Namaruangan')}}"><br>
              <label for="foto">Foto ruangan(opsional)</label><br>
              <input class = "form-control-file" type = "file" class = "form-control" id = "foto" name = "foto" value = "{{old('foto')}}"> 
              @if (count($errors) > 0)
                @foreach($errors->all() as $error)
                  <p class="text-danger">{{ $error }}</p>
                @endforeach
              @endif
      </div>
      <div class="modal-footer">
          <button type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
          
      </form>
      </div>
    </div>
  </div>
</div>
  @yield('content')
</main>

@include('admin.script')
</body>

</html>