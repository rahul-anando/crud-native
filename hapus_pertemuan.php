<?php
include("connect.php");

$id_pertemuan = $_GET['id_pertemuan'];
$id_matkul = $_GET['id_matkul'];

$sql= "DELETE FROM pertemuan WHERE id_pertemuan='$id_pertemuan'" ;
$query = mysqli_query($connect, $sql);
	
if($query) {
		header("Location: pertemuan.php?status=Sukses&id_matkul=$id_matkul");
	}else {
		header("Location: pertemuan.php?status=Gagal&id_matkul=$id_matkul");
	}

?> 

