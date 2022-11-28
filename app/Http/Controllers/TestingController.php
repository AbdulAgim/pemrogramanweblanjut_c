<?php

namespace App\Http\Controllers;


class TestingController extends Controller
{
        function data ($nama) {
                return view("data")
                ->with("nama", $nama)
                ->with("umur", "20 Tahun")
                ->with("alamat", "Jl.H.Adam Malik")
                ->with("nim", "2011102441238")
                ->with("waktu", date("H:m:s") ) ;
        }


}