@extends("blank")
@section("konten")

    <h1>Semua Data</h1>

@foreach($data as $film)
    Namafilm : {{ $film->namafilm }} <br>
    Tahunrilis: {{ $film->tahunrilis }} <br>
    Namapemeran : {{$film->user->nama}}
    <a href="{{ route('ubah_film', ['id' => $film->id]) }}">Ubah</a>
    <a href="{{ route('tampil_film', ['id' => $film->id]) }}">Tampil</a>

    <form action="{{ route('hapus_film', ['id' => $film->id]) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Hapus</button>
    </form>
    <hr>
@endforeach
@endsection