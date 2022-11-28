@extends("blank")
@section("konten")

<form action="{{ route('simpan_film') }}" method="post">
        @csrf

        Namafilm : <input type="text" name="namafilm"> <br>
        Tahunrilis: <textarea name="tahunrilis" id="" cols="30" rows="10"></textarea> <br>
        Produser: 
        <select name="id_produser">
            @foreach($producers as $producer)
                <option value="{{$producer->id}}">{{$producer->id}} . {{$producer->nama}}</option>
            @endforeach
        </select>
        <button type="submit">Simpan</button>
    </form>
    
@endsection