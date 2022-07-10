<?php

include('connect.php');

if (isset($_POST['submit'])){
		
	$id = $_POST['id_matkul'];	
	$nama_matkul = $_POST['nama_matkul'];
	$deskripsi_matkul = $_POST['deskripsi_matkul'];
	
	$sql = "INSERT INTO matkul (id_matkul, nama_matkul, deskripsi_matkul) VALUES ('$id_matkul', '$nama_matkul', '$deskripsi_matkul')";
	$query = mysqli_query($connect, $sql);
	
	if($query) {
		header('Location: matkul.php?status=Sukses');
	}else {
		header('Location: matkul.php?status=Gagal');
	}
}
?>