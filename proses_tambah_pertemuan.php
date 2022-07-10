<?php

include('connect.php');

if (isset($_POST['submit'])){
		
	$id_pertemuan = $_POST['id_matkul'];
	$nama_pertemuan = $_POST['nama_pertemuan'];
	$deskripsi_pertemuan = $_POST['deskripsi_pertemuan'];
	
	$sql = "INSERT INTO pertemuan (matkul_id, nama_pertemuan, deskripsi_pertemuan) VALUES ('$id_pertemuan', '$nama_pertemuan', '$deskripsi_pertemuan')";
	$query = mysqli_query($connect, $sql);
	
	if($query) {
		header("Location: pertemuan.php?status=Sukses&id_matkul=$id_pertemuan");
	}else {
		header("Location: pertemuan.php?status=Gagal");
	}
}
?>