<?php 
$conn = mysqli_connect("localhost","root","","db_ormas");

function edit_distrik($data){
	global $conn;
//ambil data dari tiap elemen dalam form
	$kdd 	=htmlspecialchars($data["kd_distrik"]) ;
	$nmd 	=htmlspecialchars($data["nm_distrik"]) ;
	$almd  	=htmlspecialchars($data["alamat"]) ;
//query insert data
$query= "UPDATE  tb_distrik SET nm_distrik='$nmd', alamat='$almd' WHERE kd_distrik='$kdd' ";
mysqli_query($conn,$query);
return mysqli_affected_rows($conn);
}


function edit_Jormas($data){
	global $conn;
//ambil data dari tiap elemen dalam form
	$kdo 	=htmlspecialchars($data["kd_ormas"]) ;
	$jo 	=htmlspecialchars($data["nm_ormas"]) ;
//query insert data
$query= "UPDATE  tb_organisasi SET jenis_organisasi='$jo' WHERE kd_organisasi='$kdo' ";
mysqli_query($conn,$query);
return mysqli_affected_rows($conn);

}


function edit_panduan($data){
	global $conn;
//ambil data dari tiap elemen dalam form
	$kdp 	=htmlspecialchars($data["kd_panduan"]) ;
	$pp	=htmlspecialchars($data["panduan"]) ;
//query insert data
$query= "UPDATE  tb_panduan SET Panduan_Pendaftaran='$pp' WHERE kd_panduan='$kdp' ";
mysqli_query($conn,$query);
return mysqli_affected_rows($conn);

}


function edit_syarat($data){
	global $conn;
//ambil data dari tiap elemen dalam form
	$kds 	=htmlspecialchars($data["kd_syarat"]) ;
	$sp	=htmlspecialchars($data["syarat"]) ;
//query insert data
$query= "UPDATE  tb_persyaratan SET persyaratan='$sp' WHERE id_persyaratan='$kds' ";
mysqli_query($conn,$query);
return mysqli_affected_rows($conn);

}


function edit_SKT($data){
	global $conn;
//ambil data dari tiap elemen dalam form
	$kd 			=htmlspecialchars($data["kd"]) ;
	$normas			=htmlspecialchars($data["normas"]) ;
	$jormas 		=htmlspecialchars($data["jormas"]) ;
	$nosu			=htmlspecialchars($data["nosu"]) ;
	$tglsu 			=htmlspecialchars($data["tglsu"]) ;
	$namket			=htmlspecialchars($data["namket"]) ;
	$namsek 		=htmlspecialchars($data["namsek"]) ;
	$masa 			=htmlspecialchars($data["masa"]) ;
	$tebus 			=htmlspecialchars($data["tebus"]) ;
	$tlp			=htmlspecialchars($data["tlp"]) ;
	$alamatsek		=htmlspecialchars($data["alamatsek"]) ;
	$ket			=htmlspecialchars($data["ket"]) ;

//query insert data
$query= "UPDATE  tb_skt SET kd_SKT='$kd' , nm_ormas='$normas',jenis_ormas='$jormas',no_surat='$nosu',tgl_surat='$tglsu',nm_ketua='$namket',nm_sekretaris='$namsek',masa_berlaku='$masa', tebusan_ke='$tebus',tlp='$tlp',alamat='$alamatsek ',keterangan='$ket' WHERE kd_SKT='$kd ' ";
mysqli_query($conn,$query);
return mysqli_affected_rows($conn);

}






 ?>