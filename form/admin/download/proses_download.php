<?php 

$conn=mysqli_connect("Localhost","root","","db_ormas");

if (isset($_GET["download"])) {
	# code...
	$path =$_GET["kd_berkas"];
	$res  =mysqli_query($conn,"SELECT * FROM tb_daftar WHERE kd_berkas=$res ");

	header('Content-Type:application/octet-stream');
	header('Content-Disposition:attachment;filename="'.basename($path).'"');
	header('Content-Lenght:'.filesize($path));
		readfile($path);
}







 ?>