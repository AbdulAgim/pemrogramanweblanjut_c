@extends("blank")
@section("konten")


<h1>Tampil Data</h1>


    nama : {{ $pemeran->nama }} <br>
    pemeranfilm: {{ $pemeran->pemeranfilm }} <br>
    tanggallahir: {{ $pemeran->tanggallahir}} <br>
    
@endsection