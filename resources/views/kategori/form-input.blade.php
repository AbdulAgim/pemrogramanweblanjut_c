@extends("blank")
@section("konten")

<form action="{{ route('simpan_kategori') }}" method="post">
        @csrf

        Nama : <input type="text" name="nama"> <br>
        Keterangan: <textarea name="keterangan" id="" cols="30" rows="10"></textarea> <br>
        Film: 
        <select name="id_film">
            @foreach($films as $film)
                <option value="{{$film->id}}">{{$film->id}} . {{$film->nama}}</option>
            @endforeach
        </select>
        <button type="submit">Simpan</button>
    </form>
    
@endsection