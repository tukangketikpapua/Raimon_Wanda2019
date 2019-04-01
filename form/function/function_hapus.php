<?php
 
//koneksi ke database 
require'function_koneksi.php';

function hapus_distrik($No){
global $conn;
$No ="DELETE FROM tb_distrik WHERE kd_distrik='$No'";
mysqli_query($conn,$No);
	return mysqli_affected_rows($conn);
}

function hapus_berkas($No){
global $conn;
$No ="DELETE FROM tb_daftar WHERE kd_berkas='$No'";
mysqli_query($conn,$No);
	return mysqli_affected_rows($conn);

}

function hapus_validasi($No){
global $conn;
$No ="DELETE FROM tb_validasi WHERE kd_berkas='$No'";
mysqli_query($conn,$No);
	return mysqli_affected_rows($conn);

}

function hapus_SKT($No){
global $conn;
$No ="DELETE FROM tb_skt WHERE kd_SKT='$No'";
mysqli_query($conn,$No);
	return mysqli_affected_rows($conn);

}

function hapus_syarat($No){
global $conn;
$No ="DELETE FROM tb_persyaratan WHERE id_persyaratan='$No'";
mysqli_query($conn,$No);
	return mysqli_affected_rows($conn);

}

function hapus_panduan($No){
global $conn;
$No ="DELETE FROM tb_panduan WHERE kd_panduan='$No'";
mysqli_query($conn,$No);
	return mysqli_affected_rows($conn);

}