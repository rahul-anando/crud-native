<!DOCTYPE html>
<html lang="en">
<head>
  <title>UTS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 514px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
	  margin-bottom: 0px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-light" style="background-color: #6610f2;"">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><font color="white">AMIKOM</a></font>
    </div>
    <div class="collapse navbar-collapse" id="Navbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index_after_login.php"><font color="white">Home</a></font></li>
        <li><a href="matkul.php"><font color="white">Mata Kuliah</a></font></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user" style="color:white"></span><font color="white"> User</a></font></li>
      </ul>
    </div>
  </div>
</nav>
 
<?php
include("connect.php");

$id_matkul = $_GET['id_matkul'];

$sql= "Select * FROM matkul WHERE id_matkul='$id_matkul'" ;
$data = mysqli_query($connect, $sql);
$tampil = mysqli_fetch_array($data);
?> 

<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav"></div>
    <div class="col-sm-8 text-left"> 
      <h1><b><?php echo $tampil['nama_matkul']?></h1></b>
	  <hr>
	  <a class="btn btn-warning btn-sm pull-right" href="tambah_pertemuan.php?id_matkul=<?=$id_matkul?>" role="button">Tambah Pertemuan</a>	  <br><br>

     <div class="card-body">
        <table class="table table-bordered table-striped">
            <tr>
                <th>No</th>
                <th>Nama Pertemuan</th>
                <th>Deskripsi</th>
                <th>Action</th>
            </tr>
<?php
include('connect.php');

$no=1;
$tampil = mysqli_query($connect, "SELECT * FROM pertemuan WHERE matkul_id=$id_matkul");
while($data = mysqli_fetch_array($tampil)):
?>
            <tr>
                <td><?=$no++;?></td>
                <td><?=$data['nama_pertemuan']?></td>
                <td><?=$data['deskripsi_pertemuan']?></td>
                <td>
                    <a href="edit_pertemuan.php?id_pertemuan=<?=$data['id_pertemuan']?>"class="btn btn-success">Edit</a> 
					<a href="hapus_pertemuan.php?id_pertemuan=<?=$data['id_pertemuan']?>&id_matkul=<?php echo $id_matkul?>"class="btn btn-danger">Hapus</a>
				</td>
                
            </tr>
            <?php endwhile; ?>

        </table>
        
    </div>
    </div>
	<div class="col-sm-2 sidenav"></div>
    </div>
    </div>
    
  </div>
</div>



<footer class="footer text-center">
  <div class="container">© 2021 Copyright:
            <a class="mr-5" href="https://amikom.ac.id" target="_blank"><font color="white">UNIVERSITAS AMIKOM YOGYAKARTA All Right Reserved.</font></a>
			<a href="https://instagram.com/prodid3ti?igshid=1qwfmrt3bb15r" target="_blank" class="tw-ic">
            <span style="font-size: 20px; color: white;">
            <i class="icon-instagram"></i>
            </a>
            </span>
   </div>
</footer>


</body>
</html>
