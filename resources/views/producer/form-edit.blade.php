@extends("blank")
@section("konten")

<form action="{{ route("update_producer", ['id' => $id]) }}" method="post">
        @csrf
        @method("put")

        Nama : <input type="text" name="nama"> <br>
        Alamat: <textarea name="alamat" id="" cols="30" rows="10"></textarea> <br>
        Jeniskelamin: 
        <input type="radio" name="jeniskelamin" value="pria"> Pria 
        <input type="radio" name="jeniskelamin" value="wanita"> Wanita
        <br>
        
        <button type="submit">Simpan</button>
    </form>
@endsection


