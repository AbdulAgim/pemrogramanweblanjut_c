@extends("blank")
@section("konten")


<h1>Tampil Data</h1>


    Nama : {{ $producer->nama }} <br>
    Alamat: {{ $producer->alamat}} <br>
    Jeniskelamin: {{ $producer->jeniskelamin }} <br>
  
@endsection