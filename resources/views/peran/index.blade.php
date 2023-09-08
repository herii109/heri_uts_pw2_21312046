@extends('layout.master')

@section('judul')
    Daftar peran
@endsection

@push('script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Pastikan jQuery telah dimuat sebelum DataTables -->
    <script src="https://cdn.datatables.net/v/bs4/dt-1.13.6/datatables.min.js"></script>   
    <script>
        $(function(){
            $('#example1').DataTable();
        });
    </script> 
@endpush

@push('style')
    <link href="https://cdn.datatables.net/v/bs4/dt-1.13.6/datatables.min.css" rel="stylesheet">  
@endpush

@section('content')
<a class="btn btn-secondary mb-3" href="{{ route('peran.create') }}">Tambah Data</a>
<table class="table" id="example1">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Umur</th>
        <th scope="col">Bio</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($peran as $key => $item)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{$item->nama}}</td>
            <td>{{$item->umur}}</td>
            <td>{{$item->bio}}</td>
            <td>
                <form action="{{ route('peran.destroy', $item->id) }}" method="POST" id="deleteForm">
                    <a href="{{ route('peran.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit"  onclick="return confirm('Apakah anda yakin menghapus data ini ?')" class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
            <tr>
                <td colspan="5">Data tidak ada</td>
            </tr>
        @endforelse
    </tbody>
  </table>
@endsection
