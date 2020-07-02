<?php 
require("koneksi.php");
$perintah = "SELECT * FROM daftar";
$eksekusi = mysqli_query($konek, $perintah);
$cek = mysqli_affected_rows($konek);

if($cek > 0){
	$response["kode"] = 1;
	$response["pesan"] = "Data Tersedia";
	$response["data"] = array();

	while($ambil = mysqli_fetch_object($eksekusi)){
		$F["id"] = $ambil->id;
		$F["nik"] = $ambil->nik;
		$F["nama"] = $ambil->nama;
		$F["umur"] = $ambil->umur;
		$F["no_telepon"] = $ambil->no_telepon;

		array_push($response["data"], $F); 
	}
}
else{
	$response["kode"] = 0;
	$response["pesan"] = "Data Tidak Tersedia";	
}

echo json_encode($response);
mysqli_close($konek);

?>
