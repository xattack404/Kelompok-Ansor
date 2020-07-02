<?php 	
require("koneksi.php");

$response = array();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

	$nik = $_POST["nik"];
	$nama = $_POST["nama"];
	$umur = $_POST["umur"];
	$no_telepon = $_POST["no_telepon"];
	

	$perintah = "INSERT INTO daftar (nik, nama, umur, no_telepon) VALUES('$nik','$nama','$umur','$no_telepon')";
	$eksekusi = mysqli_query($konek, $perintah);
	$cek = mysqli_affected_rows($konek);

	if($cek >0){
		$response["kode"] = 1;
 		$response["pesan"] = "Data Berhasil Disimpan!";
	}
	else{
		$response["kode"] = 0;
	 	$response["pesan"] = "Gagal Menyimpan Data!";
	}


 }
 else{
 	$response["kode"] = 0;
 	$response["pesan"] = "Tidak Ada Post Data";
 }

 echo json_encode($response);
 mysqli_close($konek);
