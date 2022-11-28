<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pemeran;
use Auth;


class pemeranController extends Controller
{
    
      //untuk input
      public function buat()
      {
        
          return view("pemeran.form-input");
      }
  
      public function simpan(Request $request)
      {
          $pemeran = new pemeran();
          $pemeran->nama= $request->get("nama");
          $pemeran->pemeranfilm = $request->get("pemeranfilm");
          $pemeran->tanggallahir = $request->get("tanggallahir");
          $pemeran->user_id = Auth::user()->id;
          $pemeran->save();
 
  
          return redirect(route("tampil_pemeran", ['id' => $pemeran->id]));
      }
 
      //untuk menampilkan 
     public function tampil($id)
     {
       $pemeran = pemeran::find($id);
 
       return view("pemeran.tampil")->with("pemeran", $pemeran);
   }
 
   public function semua()
   {
       $data = pemeran::all();
       return view("pemeran.semua")->with("data", $data);
   }
 
   public function ubah($id)
   {
       return view("pemeran.form-edit")->with("id", $id);
   }
 
   public function update(Request $request, $id)
   {
       $pemeran= pemeran::find($id);
       $pemeran->nama= $request->get("nama");
       $pemeran->pemeranfilm= $request->get("pemeranfilm");
       $pemeran->tanggallahir= $request->get("tanggallahir");
       $pemeran->save();
 
       return redirect(route("tampil_pemeran", ['id' => $pemeran->id]));
   }
 
   public function hapus($id)
   {
       pemeran::destroy($id);
       return redirect(route('semua_pemeran'));
   }
}
