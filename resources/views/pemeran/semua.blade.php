@extends("blank")
@section("konten")

    <h1>Semua Data</h1>

@foreach($data as $pemeran)
    nama : {{ $pemeran->user->nama }} <br>
    pemeranfilm: {{ $pemeran->pemeranfilm }} <br>
    <a href="{{ route('ubah_pemeran', ['id' => $pemeran->id]) }}">Ubah</a>
    <a href="{{ route('tampil_pemeran', ['id' => $pemeran->id]) }}">Tampil</a>
    tanggallahir : {{ $pemeran->tanggallahir }} <br>

    <form action="{{ route('hapus_pemeran', ['id' => $pemeran->id]) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Hapus</button>
    </form>
    <hr>
@endforeach
@endsection