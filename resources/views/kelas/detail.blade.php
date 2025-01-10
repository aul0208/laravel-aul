@extends('layout/index')
@section('konten')
    <div>
        <a href='/kelas' class='btn btn-secondary'><< KEMBALI</a>
        <h1>{{$data->nama_kelas}}</h1>
        <p>
            <b>wali kelas: </b>{{$data->walikelas}}
        </p>
        <p>
            <b>jumlah siswa: </b>{{$data->jumlah_siswa}}
        </p>
    </div>
@endsection
