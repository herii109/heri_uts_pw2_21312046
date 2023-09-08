@extends('layout.master')

@section('judul')
    Tambah peran
@endsection

@section('content')
<form method="post" action="{{ route('peran.store') }}"> <!-- Gunakan route name untuk menghindari penggunaan URL langsung -->
    @csrf
    <div class="form-group">
      <label for="nama">Nama</label>
      <input type="text" name="nama" value="" class="form-control" placeholder="Masukkan Nama" >
    </div>
    @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
   
    <div class="form-group">
      <label for="cast">Cast</label>
      <input type="number" name="cast" value="" class="form-control" placeholder="Masukkan Cast" >
    </div>
    @error('cast')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    
    <div class="form-group">
      <label for="action">Action</label>
      <textarea class="form-control" name="action" placeholder="Masukkan Action"></textarea>
    </div>
    @error('action')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    
    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
@endsection
