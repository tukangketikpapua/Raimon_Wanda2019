<?php 
$conn = mysqli_connect("localhost","root","","db_ormas");
$result = mysqli_query($conn,"SELECT * FROM tb_distrik"); 
$result2 = mysqli_query($conn,"SELECT * FROM tb_organisasi"); 
$result3 = mysqli_query($conn,"SELECT * FROM tb_persyaratan");
$result4 = mysqli_query($conn,"SELECT * FROM tb_akun2"); 
$result5 = mysqli_query($conn,"SELECT * FROM tb_daftar"); 
$result6 = mysqli_query($conn,"SELECT * FROM tb_panduan"); 
$result7 = mysqli_query($conn,"SELECT * FROM tb_validasi"); 
$result8 = mysqli_query($conn,"SELECT * FROM tb_validasi ");
$result9 = mysqli_query($conn,"SELECT * FROM tb_akun ");
$result10 = mysqli_query($conn,"SELECT * FROM tb_ormas ");
$result11 = mysqli_query($conn,"SELECT * FROM tb_SKT "); 
 
 ?>