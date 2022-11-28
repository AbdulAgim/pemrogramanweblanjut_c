@extends("blank")
@section("konten")

@if ($errors->any())
        <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                   </ul>
                   </div>
 @endif
                
<!-- codingan formInput -->
        <form action="{{ route('form-simpan') }}" method="post">
                @csrf
                
                Nama : <input type="text" name="nama"> <br>
                Username : <input type="text" name="username"> <br>
                Password: <input type="text" name="password"> <br>
                Level : <input type="text" name="level"> <br>
                </select><br>
                <button type="submit">simpan</button>
</form>
@include("menu")
@endsection