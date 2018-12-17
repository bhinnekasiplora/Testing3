<?php
include "conf/koneksi.php";

$kode = $_POST['Kode_Departemen'];
$nama = $_POST['Nama_Departemen'];
$id = $_POST['id_manajer'];
$tanggal= $_POST['Tanggal_mulai_manajer'];

$sql = "INSERT INTO departemen values('$kode','$nama','$id','$tanggal')";
$q = $koneksi -> query($sql);
if($q === TRUE){
	echo "Data berhasil ditambahkan";
}else{
	echo "Data gagal di buat".$koneksi ->error;
}
$koneksi->close();