@extends("blank")
@section("konten")

<form action="{{ route('update_film', ['id' => $id]) }}" method="post">
        @csrf
        @method("put")

        Namafilm : <input type="text" name="namafilm"> <br>
        Tahunrilis: <textarea name="tahunrilis" id="" cols="30" rows="10"></textarea> <br>

        <button type="submit">Simpan</button>
    </form>
@endsection


