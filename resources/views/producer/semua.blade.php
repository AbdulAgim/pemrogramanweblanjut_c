@extends("blank")
@section("konten")

    <h1>Semua Data</h1>

@foreach($data as $producer)
    nama : {{ $producer->user->nama }} <br>
    Producer: {{ $producer->keterangan }} <br>
    <a href="{{ route('ubah_producer', ['id' => $producer->id]) }}">Ubah</a>
    <a href="{{ route('tampil_producer', ['id' => $producer->id]) }}">Tampil</a>

    <form action="{{ route('hapus_producer', ['id' => $producer->id]) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Hapus</button>
    </form>
    <hr>
@endforeach
@endsection