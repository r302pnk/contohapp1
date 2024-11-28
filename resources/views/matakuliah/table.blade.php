@extends('kerangkatampilan')

@section('konten')
    <h1>Matakuliah</h1>
    <table border="1" style="width:100%">
        <tr>
            <th>Kode</th>
            <th>Matakuliah</th>
            <th>SKS</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        <tbody>
            <a href="{{ url('/matakuliah/create') }}">Matakuliah</a>
            @foreach ($matakuliahs as $m )
                <tr>
                    <td>{{ $m->kd_mtk }}</td>
                    <td>{{ $m->nm_mtk }}</td>
                    <td>{{ $m->sks }}</td>
                    <td><a href="{{ url('/matakuliah/'.$m->id) }}">Edit</a></td>
                    <td><a href="{{ url('/matakuliah/delete/'.$m->id) }}">Delete</a></td>
                </tr>
            @endforeach
        </tbody>
@endsection
