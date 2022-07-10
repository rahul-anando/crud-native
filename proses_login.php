<?php

include 'connect.php';

$nim = $_POST['nim_mahasiswa'];
$nama = $_POST['nama_mahasiswa'];

$cek_login = mysqli_query($connect, "select * from mahasiswa where nim_mahasiswa='$nim' and nama_mahasiswa='$nama'");
$cek = mysqli_num_rows($cek_login);

if ($cek > 0) {
  header('location:../UTS/index_after_login.php');
}else{
  header('location:form_login.php');
}
?>