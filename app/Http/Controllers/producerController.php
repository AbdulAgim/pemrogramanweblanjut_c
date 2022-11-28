<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\producer;
use App\Models\User;

class producerController extends Controller
{
    
      //untuk input
      public function buat()
      {
          return view("producer.form-input");
      }
  
      public function simpan(Request $request)
      {
        // dd($request);
        $user = new User();
        $user->nama = $request->get('nama');
        $user->username = $request->get('username');
        $user->password = $request->get('password');
        $user->level = $request->get('level');
        $user->save();

          $producer = new producer();
          $producer->nama = $request->get("nama");
          $producer->alamat = $request->get("alamat");
          $producer->jeniskelamin = $request->get("jeniskelamin");
          $producer->user_id = $user->id;
          $producer->save();

          
  
          return redirect(route("tampil_producer", ['id' => $producer->id]));
      }
    //untuk menampilkan 
    public function tampil($id)
    {
        $producer = producer::find($id);

        return view("producer.tampil")->with("producer", $producer);
    }


    
    public function semua()
    {
        $data = producer::all();
        return view("producer.semua")->with("data", $data);
    }

    public function ubah($id)
    {
        return view("producer.form-edit")->with("id", $id);
    }

    public function update(Request $request, $id)
    {
        $producer = producer::find($id);
        $producer->nama = $request->get("nama");
        $producer->alamat= $request->get("alamat");
        $producer->jeniskelamin= $request->get("jeniskelamin");
        $producer->save();

        return redirect(route("tampil_producer", ['id' => $producer->id]));
    }

    public function hapus($id)
    {
        producer::destroy($id);
        return redirect(route('semua_producer'));
    }
}

