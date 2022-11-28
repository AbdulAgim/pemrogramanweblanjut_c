@extends("blank")

@section("konten")

<a href="{{route('form-input')}}">isi user baru</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Username</th>
      <th scope="col">level</th>
      <th scope="col">password</th>
      <th scope="col">created_at</th>
      <th scope="col">updated_at</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data_user as $user)
    <tr>
      <th scope="row">{{ $user->id }}</th>
      <td>{{ $user->nama }}</td>
      <td>{{ $user->username }}</td>
      <td>{{ $user->level }}</td>
      <td>{{ $user->password}}</td>
      <td>{{ $user->created_at }}</td>
      <td>{{ $user->updated_at }}</td>
      <td>
        <a href="{{ route("form-edit", ["id" => $user-> id]) }}">edit</a>
        <a href="{{ route("user_show", ["id"=> $user->id]) }}">show</a>"

        <form action="{{ route("user_hapus", ['id' => $user->id]) }}" method="post">
          @csrf
          @method("delete")
          <button type="submit">hapus</button>
        </form> 

      </td>
    </tr>
  </tr>
   
    @endforeach
  </tbody>
</table>



@endsection