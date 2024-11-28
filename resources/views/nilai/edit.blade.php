@extends('kerangkatampilan')

@section('konten')
    <form method="post" action="{{url('/nilai/'.$nilai->id)}}">
        @csrf
        @method('PATCH')
        <label>Mahasiswa</label>
        <select name="nim">
            @foreach ($mahasiswa as $m )
                <option {{ $nilai->nim == $m->nim ? 'selected' : '' }} value="{{$m->nim}}">{{ $m->nim }} - {{ $m->nama}}</option>
            @endforeach
        </select>
        <br/>
        <label>Matakuliah</label>
        <select name="kd_mtk">
            @foreach ($matakuliah as $mtk )
                <option {{$nilai->kd_mtk == $mtk->kd_mtk ? 'selected' : ''}} value="{{$mtk->kd_mtk}}">
                    {{ $mtk->kd_mtk }} - {{ $mtk->nm_mtk }}
                </option>
            @endforeach
        </select><br/>
        <label>Nilai</label>
        <input type="number" name="nilai" value="{{ $nilai->nilai }}" />
        <hr>
        <label>Grade</label>
        <h1>{{ $nilai->grade }}</h1>
        <hr/>
        <button>Simpan</button>
    </form>
@endsection
