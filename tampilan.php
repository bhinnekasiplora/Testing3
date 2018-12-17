<?php

include "C:/xampp/htdocs/conf/koneksi.php";

//mengakses isi tabel departemen
$sql = "Select * from departemen";
// $sql = "SELECT d.kode_departemen,d.nama_departemen, concat (p.nama_depan, ' ', p.nama_belakang) as manager, date_format(d.tanggal_mulai_manager, '%d-%M-%Y') as tgl from departemen d join pegawai p on (d.id_manager = p.id_pegawai)";
$hasil = $koneksi->query($sql);
echo "<table border='1'>
<tr>
<th>Kode Departemen </th>
<th>Nama Departmen </th>
<th>Manajer </th>
<th>Tanggal Mulai Menjabat </th>
<th>Aksi </th>
</tr>";
if($hasil->num_rows >0){
	while($baris = $hasil ->fetch_assoc()){
		$id = $baris['kode_departemen'];
		$nama = $baris['nama_departemen'];
		//
		$manajer = $baris['id_manager'];
		$tanggal = $baris['tanggal_mulai_manager'];
		echo "<tr><td>$id</td>";
		echo "<td>$nama</td>
		<td>$manajer</td>
		<td>$tanggal</td>
		<td>
		<a href='ubahdepartemen.php?id=$id'>Edit</a> |
		<a href ='hapusdepartemen.php?id=$id'>Hapus</a> </td></tr>";
	}
	echo "</table>";
} else {
	echo "Data tidak ditemukan";
}
$koneksi->close();
?>