<?php 
include('connect.php');

if(isset($_POST['edit'])){
		
$id_pertemuan      	= $_POST['id_pertemuan'];
$id_matkul 	      	= $_POST['id_matkul'];
$nama_pertemuan    	= $_POST['nama_pertemuan'];
$desk_pertemuan		= $_POST['deskripsi_pertemuan'];

$job = mysqli_query($connect, "UPDATE pertemuan SET nama_pertemuan='$nama_pertemuan', deskripsi_pertemuan='$desk_pertemuan' WHERE id_pertemuan =$id_pertemuan ");

if($job) {
    	header("Location: pertemuan.php?status=Sukses&id_matkul=$id_matkul");
	}else {
		header("Location: pertemuan.php?status=Gagal&id_matkul=$id_matkul");
	}
}
?>