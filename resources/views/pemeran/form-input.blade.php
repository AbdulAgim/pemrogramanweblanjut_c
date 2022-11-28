@extends("blank")
@section("konten")

<form action="{{ route('simpan_pemeran') }}" method="post">
        @csrf

        nama : <input type="text" name="nama"> <br>
        pemeranfilm: <textarea name="pemeranfilm" id="" cols="30" rows="10"></textarea> <br>
        tanggallahir : <input type="text" name="tanggallahir"> <br>
       
        <button type="submit">Simpan</button>
    </form>
    
@endsection