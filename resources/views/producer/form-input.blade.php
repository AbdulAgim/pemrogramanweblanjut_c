@extends("blank")
@section("konten")

<form action="{{ route('simpan_producer') }}" method="post">
        @csrf

        Nama : <input type="text" name="nama"> <br>
        Alamat: <textarea name="alamat" id="" cols="30" rows="10"></textarea> <br>
        Jeniskelamin: 
        <input type="radio" name="jeniskelamin" value="pria"> Pria 
        <input type="radio" name="jeniskelamin" value="wanita"> Wanita
        <br>

        Username: <input type="text" name="username"> <br>
        Password: <input type="password" name="password"> <br>
        Level: <input type="text" name="level"> <br>
        <button type="submit">Simpan</button>
    </form>
    
@endsection