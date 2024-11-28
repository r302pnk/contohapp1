@extends('kerangkatampilan')

@section('konten')
<div>
   <h1>Mahasiswa</h1>
    <table border="1" style="width:100%">
        <tr>
            <th>NIM</th>
            <th>NAMA</th>
            <th>KELAS</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        <tbody>
            <a href="{{ url('/mahasiswa/create') }}">Tambah</a>
            @foreach ($mahasiswas as $m )
                <tr>
                    <td>{{ $m->nim }}</td>
                    <td>{{ $m->nama }}</td>
                    <td>{{ $m->kelas }}</td>
                    <td><a href="{{ url('/mahasiswa/'.$m->id) }}">Edit</a></td>
                    <td><a href="{{ url('/mahasiswa/delete/'.$m->id) }}">Delete</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
