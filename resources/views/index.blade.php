@extends('layout.header')
@section('container')
<div class="container mt-5">
 
    <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">Email</th>
          <th scope="col">Alamat</th>
          <th scope="col">Action</th>
        </tr>
      </thead>

      <tbody>
        @php $no = 1; @endphp
    @foreach ($users as $siswa)
    <tr>
      <th>{{$no++}}</th>
      <td>{{$siswa['nama']}}</td>
      <td>{{$siswa['gender'] == 0 ? 'Perempuan' :'Laki - Laki';}}</td>
      <td>{{$siswa['email']}}</td>
      <td>{{$siswa['alamat']}}</td>
      <td ><a href={{"del/".$siswa['id']}} class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Hapus</a>
      <a href={{"update/".$siswa['id']}} class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit</a></td>
      
    </tr>
    @endforeach
  </tbody>
    </table>
</div>
@endsection