<?php 
include "conf/koneksi.php";

//mengubah struktur tabel
$sql = "ALTER TABLE Departemen
ADD FOREIGN KEY (id_manajer) REFERENCES Pegawai(id_pegawai)";
$q = $koneksi->query($sql);
if ($q === TRUE){
	echo "Tabel Pegawai Sukses diubah"
}