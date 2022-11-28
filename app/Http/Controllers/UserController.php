<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; //import model user
use App\Http\Requests\UserRequest;


class UserController extends Controller
{
    public function tampil() {
        $data_user = User::all(); 
        return view("user.tampil-user")
        -> with("data_user", $data_user);
    
    }

    public function formInput()
    {
        return view("user.form");

 }
    
    // simpan data baru 
    public function simpan(UserRequest $request)
    {
        $user = new User();
        $user->nama = $request->get(key:"nama");
        $user->username = $request->get(key:"username");
        $user->password = $request->get(key:"password");
        $user->level = $request->get(key:"level");
        $user->save();

        return "Data telah disimpan <a href ='".route('tampil-user')."'>Tampilkan</a>";

    }

//ngarahkan ke views - update from
public function formEdit( $id)
{
    return view(view:"user.form-update")->with("id", $id);
    }

 // proses mengubah data
 public function update(UserRequest $request,$id)
 {
     $user = user::find($id);
     $user->nama = $request->get(key:"nama");
     $user->username = $request->get(key:"username");
     $user->password = $request->get(key:"password");
     $user->level = $request->get(key:"level");
     $user->save();

     return "Data telah disimpan <a href ='".route('tampil-user')."'>Tampilkan</a>";

     }
     
     public function hapus($id)
     {
        User::destroy($id); // kode untuk menghapus data user berdasarkan id-nya
        return redirect(route("tampil-user")); // redirect: mengarahkan kealamat URL tertentu.
     }

     public  function show($id) {
        $data_user = User::find($id); // ambil data pada tabel berdasarkan id 
        return view("user.show")->with("data_user", $data_user); //tampilkan menggunakan view
     }

}



