@extends('kerangkatampilan')

@section('konten')
    <form method="post" action="{{url('/nilai')}}">
        @csrf
        <label>Mahasiswa</label>
        <select name="nim">
            @foreach ($mahasiswa as $m )
                <option value="{{$m->nim}}">{{ $m->nim }} - {{ $m->nama}}</option>
            @endforeach
        </select>
        <br/>
        <label>Matakuliah</label>
        <select name="kd_mtk">
            @foreach ($matakuliah as $mtk )
                <option value="{{$mtk->kd_mtk}}">
                    {{ $mtk->kd_mtk }} - {{ $mtk->nm_mtk }}
                </option>
            @endforeach
        </select><br/>
        <label>Nilai</label>
        <input type="number" name="nilai" />
        <hr>
        <button>Simpan</button>
    </form>
@endsection
