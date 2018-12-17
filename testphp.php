<!--?php $nama = " Roy"; ?>
<html>
<head>
	<title></title> 
</head>
<body>
<?php echo "Assalamualaikum" . $nama; 
	  echo "<br />";
	  echo "Cara lain mengakses nilai suatu variable. <br /> HAI $nama";
?>
</body>
</html> -->

<!--?php
$fakultasdiuii = array();

$fakultasdiuii = [];

$fakultasdiuii = array("FE","FTI","FTSP","FK","FPSB");

$jurusandifti = ["TIF"];

echo($fakultasdiuii);
echo "<br />Fakultas di UII ";
print_r($fakultasdiuii);
echo "<br /> Jurusan di FTI : ";
print_r($jurusandifti);
?-->

<!--?php
$Suratalquran = array(
	'madaniyah' => array(
		'al baqarah',
		'al maidah',
		'an nur'
	),
	'makkiyah' => array(
		'al ikhlas',
		'adh dhuha',
		'al fajr'
	),
);
print_r($Suratalquran);
//echo $Suratalquran["madaniyah"][1];
print_r($Suratalquran)['madaniyah'];
//echo $Suratalquran["makkiyah"][0];
print_r($Suratalquran)['makkiyah'];
? -->

<?php
$toleransi = 7;
$tanggalPinjam = date('d-m-y');
echo "tanggal pinjam :" . $tanggalPinjam;
$tanggalkembali = date('d-m-y',strtotime($tanggalPinjam.'.'.$toleransi,"days"));
echo "<br > Tanggal Kembali: ",$tanggalkembali. "<br />";
$harikembali = date_format(date_create($tanggalkembali),'l');
if($harikembali == "Sunday"){
	echo "Perpustakaan tutup pada hari Ahad";
}elseif($harikembali == "Saturday"){
	echo "Anda dapat mengembalikan buku pada pukul 08.00 - 12.00";
}else{
	echo "Anda dapat mengembalikan buku pada pukul 08.00 - 12.00";
}
?>