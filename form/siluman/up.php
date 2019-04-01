
<?php
$conn=mysqli_connect('localhost','root','','db_ormas') ;
 $r= mysqli_query($conn,"SELECT * FROM tb_ormas  limit 1" );  global $conn;



 ?>


<!DOCTYPE html>
<html>
<style>

 

.carousel{
    background: #2f4357;
    margin-top: 50px;
}
.carousel .item{
    min-height: 100px; /* Prevent carousel from being distorted if for some reason image doesn't load */
}
.carousel .item img{
    margin: 0 auto; /* Align slide image horizontally center */
    max-height: 100px;
    width:60%;
}
.bs-example{
    margin: 20px;
}


</style>
<head>

 
 <!-- Core Scripts - Include with every page -->
    <script src="../../assets/plugins/jquery-1.10.2.js"></script>
    <script src="../../assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../../assets/plugins/pace/pace.js"></script>
    <script src="../../assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="../../assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="../../assets/plugins/morris/morris.js"></script>
    <script src="../../assets/scripts/dashboard-demo.js"></script>


    <!-- jQuery -->
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Flot Charts JavaScript -->
    <script src="../../vendor/flot/excanvas.min.js"></script>
    <script src="../../vendor/flot/jquery.flot.js"></script>
    <script src="../../vendor/flot/jquery.flot.pie.js"></script>
    <script src="../../vendor/flot/jquery.flot.resize.js"></script>
    <script src="../../vendor/flot/jquery.flot.time.js"></script>
    <script src="../../vendor/flot-tooltip/jquery.flot.tooltip.min.js"></script>
    <script src="../../data/flot-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../dist/js/sb-admin-2.js"></script>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SISTEM INFORMASI</title>
<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
<script src="../../bootstrap/jquery-3.3.1.min.js"></script>
	<title></title>
</head>
<body>
<form method="post" action="" enctype="multipart/form-data">
	<input type="text" name="no">
	<input type="file" name="pot">


	<button type="submit" name="save">Simpan</button>
	


</form>


 <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            GALERY
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                          <div class="col-lg-12">
<?php if(mysqli_num_rows($r )){ ?>
<?php while($row=mysqli_fetch_array($r)){ ?> 
<div class="panel-heading" style="color: green">
<?= $row ["nama_ormas"]; ?>
</div>
 
<div class='col-md-12 col-sm-4'>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="panel-heading" style="background-color: white"  >
<marquee>Tanggal Upload :<?= $row ["tanggal_upload"]; ?></marquee>
</div>
<!-- Carousel indicators -->
<ol class="carousel-indicators">
<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
<li data-target="#myCarousel" data-slide-to="1"></li>
<li data-target="#myCarousel" data-slide-to="2"></li>
<li data-target="#myCarousel" data-slide-to="3"></li>
<li data-target="#myCarousel" data-slide-to="4"></li>
<li data-target="#myCarousel" data-slide-to="5"></li>
<li data-target="#myCarousel" data-slide-to="6"></li>
<li data-target="#myCarousel" data-slide-to="7"></li>
<li data-target="#myCarousel" data-slide-to="8"></li>
<li data-target="#myCarousel" data-slide-to="9"></li>

</ol>   
<!-- Wrapper for carousel items -->
<div class="carousel-inner">
<div class="item active">
<td>  <?php if ($row ['foto1']==='' ){
echo "<a href='../user/foto/".$row['foto1']."' alt='First Slide' />" ;
}else{
echo "<a href='../user/foto/".$row['foto1']."'   </a><img src='../user/foto/".$row['foto1']."' alt='First Slide' />" ;}?></td> 
</div>
<div class="item">
<td>  <?php if ($row ['foto2']==='' ){
echo "<a href='../user/foto/".$row['foto2']."' alt='First Slide' />" ;
}else{
echo "<a href='../user/foto/".$row['foto2']."'   </a><img src='../user/foto/".$row['foto2']."'  alt='Second Slide'/>" ;}?></td> 
</div>
<div class="item">
<td>  <?php if ($row ['foto3']==='' ){
echo "<a href='../user/foto/".$row['foto3']."' alt='First Slide' />" ;
}else{
echo "<a href='../user/foto/".$row['foto3']."'   </a><img src='../user/foto/".$row['foto3']."'  alt='Third Slide'/>" ;}?></td>
</div>
<div class="item">
<td>  <?php if ($row ['foto4']==='' ){
echo "<a href='../user/foto/".$row['foto4']."' alt='First Slide' />" ;
}else{
echo "<a href='../user/foto/".$row['foto4']."'   </a><img src='../user/foto/".$row['foto4']."'  alt='Third Slide'/>" ;}?></td>
</div>
<div class="item">
<td>  <?php if ($row ['foto5']==='' ){
echo "<a href='../user/foto/".$row['foto5']."' alt='First Slide' />" ;
}else{
echo "<a href='../user/foto/".$row['foto5']."'   </a><img src='../user/foto/".$row['foto5']."'  alt='Third Slide'/>" ;}?></td>
</div>
<div class="item">
<td>  <?php if ($row ['foto6']==='' ){
echo "<a href='../user/foto/".$row['foto6']."' alt='First Slide' />" ;
}else{
echo "<a href='../user/foto/".$row['foto6']."'   </a><img src='../user/foto/".$row['foto6']."'  alt='Third Slide'/>" ;}?></td>
</div>
<div class="item">
<td>  <?php if ($row ['foto7']==='' ){
echo "<a href='../user/foto/".$row['foto7']."' alt='First Slide' />" ;
}else{
echo "<a href='../user/foto/".$row['foto7']."'   </a><img src='../user/foto/".$row['foto7']."'  alt='Third Slide'/>" ;}?></td>
</div>
<div class="item">
<td>  <?php if ($row ['foto8']==='' ){
echo "<a href='../user/foto/".$row['foto8']."' alt='First Slide' />" ;
}else{
echo "<a href='../user/foto/".$row['foto8']."'   </a><img src='../user/foto/".$row['foto8']."'  alt='Third Slide'/>" ;}?></td>
</div>
<div class="item">
<td>  <?php if ($row ['foto9']==='' ){
echo "<a href='../user/foto/".$row['foto9']."' alt='First Slide' />" ;
}else{
echo "<a href='../user/foto/".$row['foto9']."'   </a><img src='../user/foto/".$row['foto9']."'  alt='Third Slide'/>" ;}?></td>
</div>
<div class="item">
<td>  <?php if ($row ['foto10']==='' ){
echo "<a href='../user/foto/".$row['foto10']."' alt='First Slide' />" ;
}else{
echo "<a href='../user/foto/".$row['foto10']."'   </a><img src='../user/foto/".$row['foto10']."'  alt='Third Slide'/>" ;}?></td>
</div>

</div>
<!-- Carousel controls -->
<a class="carousel-control left" href="#myCarousel" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left"></span>
</a>
<a class="carousel-control right" href="#myCarousel" data-slide="next">
<span class="glyphicon glyphicon-chevron-right"></span>

</a>
 <div class="kegiatan"     >
<?= $row ["jenis_kegiatan"]; ?>
</div>
</div>
<?php } ?>
<?php } ?>             
</div>
 
<p>&nbsp;</p>
<p>&nbsp;</p> 
                        </div>
    </div>  

</body>
 <!-- Core Scripts - Include with every page -->
    <script src="../../assets/plugins/jquery-1.10.2.js"></script>
    <script src="../../assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../../assets/plugins/pace/pace.js"></script>
    <script src="../../assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="../../assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="../../assets/plugins/morris/morris.js"></script>
    <script src="../../assets/scripts/dashboard-demo.js"></script>
</html>



<?php 
$conn=mysqli_connect('localhost','root','','db_ormas');
 if (isset($_POST["save"])) {
 	# code...
 	$a=$_POST['no'];
 	$nama=$_FILES['pot']['name'];
 	$lokasi=$_FILES['pot']['tmp_name'];
 	move_uploaded_file($lokasi,"../utama/photo/".$nama);

 	//query insert data
$query= "INSERT INTO no_photo 
                    VALUE ('$a','$nama') " ; 
mysqli_query($conn,$query);
return mysqli_affected_rows($conn);
 
 }
 ?>