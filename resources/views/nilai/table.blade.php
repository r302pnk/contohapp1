@extends('kerangkatampilan')

@section('konten')
    <h1>Data Nilai Mahasiswa</h1>
    <a href="{{ url('/nilai/create') }}">Tambah data Nilai Mahasiswa</a>
    <table border="1" style="width: 100%; border-collapse: collapse">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Kode</th>
                <th>Matakuliah</th>
                <th>Nilai</th>
                <th>Grade</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $d )
                <tr>
                    <td>{{ $d->nim }}</td>
                    <td>{{ $d->mhs->nama }}</td>
                    <td>{{ $d->kd_mtk }}</td>
                    <td>{{ $d->mtk->nm_mtk }}</td>
                    <td>{{ $d->nilai }}</td>
                    <td>{{ $d->grade }}</td>
                    <td>
                        <a href="{{ url('/nilai/'.$d->id) }}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{ url('/nilai/'.$d->id) }}">
                            @csrf
                            @method('DELETE')
                            <button>Hapus</button>
                        </form>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
