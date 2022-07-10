<?php 
include('connect.php');

if(isset($_POST['edit'])){
	
$id_matkul      	= $_POST['id_matkul'];
$nama_matkul     	= $_POST['nama_matkul'];
$desk_matkul  		= $_POST['deskripsi_matkul'];

$job = mysqli_query($connect, "UPDATE matkul SET nama_matkul='$nama_matkul', deskripsi_matkul='$desk_matkul' WHERE id_matkul =$id_matkul ");

if($job) {
    	header('Location: matkul.php?status=Sukses');
	}else {
		header('Location: matkul.php?status=Gagal');
	}
}
?>