<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\film;
use App\Models\producer;
use Auth;

class filmController extends Controller
{
   
     //untuk input
     public function buat()
     {
        $producers = producer::all();
        return view("film.form-input")->with('producers', $producers);
     }
 
     public function simpan(Request $request)
     {
         $film = new film();
         $film->namafilm= $request->get("namafilm");
         $film->tahunrilis = $request->get("tahunrilis");
         $pemeran->user_id = Auth::user()->id;
         $film->save();

 
         return redirect(route("tampil_film", ['id' => $film->id]));
     }

     //untuk menampilkan 
    public function tampil($id)
    {
      $film = film::find($id);

      return view("film.tampil")->with("film", $film);
  }

  public function semua()
  {
      $data = film::all();
      return view("film.semua")->with("data", $data);
  }

  public function ubah($id)
  {
      return view("film.form-edit")->with("id", $id);
  }

  public function update(Request $request, $id)
  {
      $film= film::find($id);
      $film->namafilm= $request->get("namafilm");
      $film->tahunrilis= $request->get("tahunrilis");
      $film->save();

      return redirect(route("tampil_film", ['id' => $film->id]));
  }

  public function hapus($id)
  {
      film::destroy($id);
      return redirect(route('semua_film'));
  }
}



 

