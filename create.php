<?php
//mengakses file koneksi.php
include "conf/koneksi.php";

//membuat basisdata
$sql = "CREATE DATABASE sdm"; //membuat sebuah SQL query
$q = $koneksi-> query($sql); // memproses query
if ($q === TRUE) {
	echo "Basisdata 'sdm' sukses dibuat";
}else {
	echo "Gagal membuat basisdata 'sdm'.". $koneksi->error;
}
$koneksi->close(); //menutup koneksi

?>