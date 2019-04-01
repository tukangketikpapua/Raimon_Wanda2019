<?php 

$conn	= mysqli_connect("localhost","root","","db_ormas");

function edit_distrik($data){
	global $conn;
//ambil data dari tiap elemen dalam form

	$kdd =htmlspecialchars($data["kd"]) ;
	$nmd =htmlspecialchars($data["nm"]) ;
	$ealamat =htmlspecialchars($data["alm"]) ;

//query insert data
	$query= "UPDATE  tb_distrik SET  kd_distrik='$kdd',nm_distrik='$nmd',alamat='$ealamat'
	         WHERE kd_distrik=$kdd " ;

	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
}

?>
