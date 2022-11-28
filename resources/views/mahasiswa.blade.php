@extends("blank")

@section("konten")
@include("menu")

<br>


<?php


$nama = "Abdul Agim";
$nim  = "2011102441238";
$alamatkampus = "Jl.Ir Juanda";
$prodi = "S1 Teknik Informatika Malam";
$semester = "5";


echo "nama : ",$nama, "<br>";
echo "nim : ",$nim, "<br>";
echo "alamatkampus : ",$alamatkampus, "<br>";
echo "prodi : ",$prodi, "<br>";
echo "semester : ",$semester, "<br>";
?>
@endsection

