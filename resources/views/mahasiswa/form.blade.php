@extends('kerangkatampilan')

@section('konten')
<div>
    <h1>Form Mahasiswa</h1>
    @if($errors->any())
        {{ $errors->first() }}
    @endif
    <form method="post" action="{{ url('/mahasiswa/'.($mahasiswa?->id ?? '') ) }}">
        @if ($mahasiswa ?? false)
            @method('PATCH')
        @endif

        @csrf
        <label>NIM</label>
        <input type="text" name="nim" value="{{ $mahasiswa?->nim ?? '' }}">
        <br/>
        <label>NAMA</label>
        <input type="text" name="nama" value="{{ $mahasiswa?->nama ?? '' }}">
        <br/>
        <label>KELAS</label>
        <input type="text" name="kelas" value="{{ $mahasiswa?->kelas ?? '' }}">
        <hr>
        <button>Simpan</button>
    </form>
</div>
@endsection
