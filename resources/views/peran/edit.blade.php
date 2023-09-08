@extends('layout.master')

@section('judul')
    Edit peran
@endsection

@section('content')
<form method="post" action="/peran/{{ $peran->id }}">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label>Nama</label>
      <input type="text" name="nama" value="{{ $peran->nama }}" class="form-control" >
    </div>
    @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
   
    <div class="form-group">
      <label>Umur</label>
      <input type="number" name="umur" value="{{ $peran->umur }}" class="form-control" >
    </div>
    @error('umur')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    
    <div class="form-group">
      <label>Bio</label>
      <textarea class="form-control" name="bio">{{ $peran->bio }}</textarea> <!-- Perbaikan di sini -->
    </div>
    @error('bio')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    
    <button type="submit" class="btn btn-primary">Ubah</button>
</form>
@endsection
