<?php

//inisialisasi nilai nilai parameter koneksi
$namaserver = "localhost";
$namapenguna = "root";
$password = "";
$nama_db = "sdm";
//membuat koneksi
$koneksi = new mysqli ($namaserver,$namapenguna,$password,$nama_db);
if ($koneksi->connect_error){
	die ("Koneksi gagal :" . $koneksi ->connect_error. "<br>");
}
echo "Koneksi Sukses. <br >";
?>