<?php
include("connect.php");

$id_matkul = $_GET['id_matkul'];

$sql= "DELETE FROM matkul WHERE id_matkul='$id_matkul'" ;
$query = mysqli_query($connect, $sql);
	
if($query) {
		header("Location: matkul.php?status=Sukses&id_matkul=$id_matkul");
	}else {
		header("Location: matkul.php?status=Gagal&id_matkul=$id_matkul");
	}

?> 

