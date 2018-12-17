<?php
if ($_SERVER['REQUEST_METHOD']=== 'POST') {
	$nama = trim($_POST['nama']);
	$email = trim($_POST['email']);
	$tgllahir = trim($_POST['tanggal_lahir']);
	$deskripsi = trim($_POST['deskripsi']);
}
	if (!empty($nama) && !empty($email)) {
		echo "Data yang sudah anda kirimkan : <br/>";
		echo "Nama : $nama <br/>";
		echo "Email : $email <br/>";
		echo "Tanggal Lahir : <br/>";
		echo "Deskripsi : ". htmlspecialchars($deskripsi). "<br />";
	}

?>