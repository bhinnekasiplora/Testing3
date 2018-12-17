<?php
// mengakses file koneksi.php
include "conf/koneksi.php";

//membuat tabel 
$sql = "CREATE TABLE Departemen (
kode_departemen char(4) PRIMARY KEY, 
nama_departemen varchar(100) UNIQUE NOT NULL,
id_manajer int (6) UNSIGNED,
tanggal_mulai_manajer date
)"; //membuat sebuah sql query
$q = $koneksi->query($sql); // memproses query
if ($q === TRUE) {
	echo "Tabel Departemen Sukses Dibuat";
}else {
	echo "Gagal membuat tabel.".$koneksi->error;
}
$koneksi->close(); 