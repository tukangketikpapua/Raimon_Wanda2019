<?php 
require'../../function/function_koneksi.php';
$result =mysqli_query($conn," SELECT * FROM tb_ormas  limit 5"); 
$fotoslide = mysqli_query($conn,"SELECT * FROM tb_ormas limit 1" ); 

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style >
.bulat{
  width: 50px;
  height: 50px;
  background-color: none;
  border-radius: 80%;
  overflow: hidden;
}
.bulat2{
  width: 100px;
  height: 140px;
  background-color: none;
  border-radius: 100%;
  overflow: hidden;
}

.carousel{
    background: none;
    margin-top: 20px;
}
.carousel .item{
    min-height: 150px; /* Prevent carousel from being distorted if for some reason image doesn't load */
}
.carousel .item img{
    margin: 0 auto; /* Align slide image horizontally center */
    max-height: 100px;
    width:60%;
}
.bs-example{
    margin: 10px;
}


</style>
  <title>Bakesbangpol</title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link href="../../../template/default.css" rel="stylesheet" type="text/css" />
  <!-- Core CSS - Include with every page -->
  <link href="../../../assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
  <link href="../../../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="../../../assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
  <link href="../../../assets/css/style.css" rel="stylesheet" />
  <link href="../../../assets/css/main-style.css" rel="stylesheet" />
  <link href="../../../assets/dropdown.css" rel="stylesheet" type="text/css" />
 

</head>
<body>
  <div id="header">

  </div>
  <!-- end #header -->
  <div id="menu">
    <ul>
      <li class="first"><a href="../m_utama.php" accesskey="1">Home</a></li>
    <li><a href="l_kegiatan.php" accesskey="2">Data</a></li>
    <li><a href="l_panduan.php" accesskey="3">Informasi</a></li>
    <li><a href="galeri.php" accesskey="4">Galery</a></li>
    <li><a href="#" accesskey="5" data-toggle="modal" data-target="#login-modal4">Tentang Kami</a></li>
    </ul>
  </div>
  <!-- end #menu -->
  <div id="content">
    <div class="col-lg-12">
       <!--    Context Classes  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Kegiatan Organisasi
                        </div>
                        <div class="panel-body">
          
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th width="20%"><center>Nama Organisasi</center></th>
                                                <th width="20%"><center>Jenis Kegiatan</center></th>
                                                <th>Foto1</th>
                                                <th>Foto2</th>
                                                <th>Foto3</th>
                                                <th>Foto4</th>
                                                <th>Foto5</th>
                                                <th>Foto6</th>
                                                <th>Foto7</th>
                                                <th>Foto8</th>
                                                <th>Foto9</th>
                                                <th>Foto10</th>



                                            </tr>
                                        </thead>
                                        <?php $i = 1; ?>
      <?php if(mysqli_num_rows($result)){ ?>
      <?php while($row=mysqli_fetch_array($result)){ ?>
                                    <tbody style="font-size: 13px" >
                                        <tr class="success">
                                            <td ><?= $row ["nama_ormas"]; ?></td>
                                            <td ><?= $row ["jenis_kegiatan"]; ?></td>
<td >
  <div class="bulat" > <?php if ($row ['foto1']==='' ){
echo "<a href='' alt='First Slide' /><img src='../photo/no.png' style='width: 98%'" ;
}else{
echo "<a href='../../user/foto/".$row['foto1']."'   </a><img src=' ../../user/foto/".$row['foto1']."' alt='First Slide' style='width: 140%'/>" ;}?> 
</div>
</td>


<td >
 <div class="bulat" > <?php if ($row ['foto2']==='' ){
echo "<a href='' alt='First Slide' /><img src='../photo/no.png' style='width: 98%' " ;
}else{
echo "<a href='../../user/foto/".$row['foto2']."'   </a><img src=' ../../user/foto/".$row['foto2']."' alt='First Slide' style='width: 140%'/>" ;}?> 
</div>
</td>


<td >
  <div class="bulat" > <?php if ($row ['foto3']==='' ){
echo "<a href='' alt='First Slide' /><img src='../photo/no.png' style='width: 98%'" ;
}else{
echo "<a href='../../user/foto/".$row['foto3']."'   </a><img src=' ../../user/foto/".$row['foto3']."' alt='First Slide' style='width: 140%'/>" ;}?> 
</div>
</td>


<td >
 <div class="bulat" > <?php if ($row ['foto4']==='' ){
echo "<a href='' alt='First Slide' /><img src='../photo/no.png' style='width: 98%'" ;
}else{
echo "<a href='../../user/foto/".$row['foto4']."'   </a><img src=' ../../user/foto/".$row['foto4']."' alt='First Slide' style='width: 140%'/>" ;}?> 
</div>
  </td>


<td >
  <div class="bulat" > <?php if ($row ['foto5']==='' ){
echo "<a href='' alt='First Slide' /><img src='../photo/no.png' style='width: 98%'" ;
}else{
echo "<a href='../../user/foto/".$row['foto5']."'   </a><img src=' ../../user/foto/".$row['foto5']."' alt='First Slide' style='width: 140%'/>" ;}?> 
</div>
  </td>


<td >
  <div class="bulat" > <?php if ($row ['foto6']==='' ){
echo "<a href='' alt='First Slide' /><img src='../photo/no.png' style='width: 98%'" ;
}else{
echo "<a href='../../user/foto/".$row['foto6']."'   </a><img src=' ../../user/foto/".$row['foto6']."' alt='First Slide' style='width: 140%'/>" ;}?> 
</div>
  </td>


<td >
  <div class="bulat" > <?php if ($row ['foto7']==='' ){
echo "<a href='' alt='First Slide' /><img src='../photo/no.png' style='width: 98%'" ;
}else{
echo "<a href='../../user/foto/".$row['foto7']."'   </a><img src=' ../../user/foto/".$row['foto7']."' alt='First Slide' style='width: 140%'/>" ;}?> 
</div>
  </td>


<td >
  <div class="bulat" > <?php if ($row ['foto8']==='' ){
echo "<a href='' alt='First Slide' /><img src='../photo/no.png' style='width: 98%'" ;
}else{
echo "<a href='../../user/foto/".$row['foto8']."'   </a><img src=' ../../user/foto/".$row['foto8']."' alt='First Slide' style='width: 140%'/>" ;}?> 
</div>
  </td>

<td >
  <div class="bulat" > <?php if ($row ['foto9']==='' ){
echo "<a href='' alt='First Slide' /><img src='../photo/no.png' style='width: 98%'" ;
}else{
echo "<a href='../../user/foto/".$row['foto9']."'   </a><img src=' ../../user/foto/".$row['foto9']."' alt='First Slide' style='width: 140%'/>" ;}?> 
</div>
  </td>


<td >
  <div class="bulat" > <?php if ($row ['foto10']==='' ){
echo "<a href='' alt='First Slide' /><img src='../photo/no.png' style='width: 98%'" ;
}else{
echo "<a href='../../user/foto/".$row['foto10']."'   </a><img src=' ../../user/foto/".$row['foto10']."' alt='First Slide' style='width: 140%'/>" ;}?> 
</div>
  </td>     

                         </tr>
                                        </tr>
                                    </tbody>
       <?php $i++; ?>
      <?php } ?>
      <?php } ?> 


                                                    </tbody>
                                                </table>
<h4 style="color: red">*.Klik pada gambar untuk melihat full gambar.</h4>
                                            </div>         
                                        </div>
                                    </div>
                                    <!--End Advanced Tables --> 
 
    
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <h3><marquee>Selamat datang di website kesbangpol kota jayapura</marquee></h3>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>

    </div>
    <!-- end #posts -->

    <!-- end #links -->
    <div style="clear: both;">&nbsp;</div>
  </div>
  <!-- end #content -->
  <div id="footer">
    <p id="legal">2019 Biak. Design By @PapuaKoding</a></p>
  </div>
  <!-- end #footer -->
</body>

<!-- Core Scripts - Include with every page -->
<script src="../../../assets/plugins/jquery-1.10.2.js"></script>
<script src="../../../assets/plugins/bootstrap/bootstrap.min.js"></script>
<script src="../../../assets/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="../../../assets/plugins/pace/pace.js"></script>
<script src="../../../assets/scripts/siminta.js"></script>
 
 
</html>




        <!-- modal tentang kami -->

<div class="modal fade" id="login-modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
       <div class="modal-dialog">
    <div class="loginmodal-container">
     <h1>Tentang Kami</h1><br>
    <div class="form-group">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" ><a href="tupoksi.php">Tujuan Pokok dan Fungsi
                                                </a></label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"><a href="struktur.php">Struktur Organisasi</a>
                                                </label>
                                            </div>
                                            <br>
                                            <a href=""  data-toggle="modal" data-target="#login-modal5"><h1>Info Programmer.</h1></a>
                                        </div>
    </div>
   </div>
    </div>
    <!-- end modal tentang kami -->

    <!-- Biodata Programmer-->

<div class="modal fade" id="login-modal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="loginmodal-container">
     <h1>Tentang Pembuat</h1><br>
      <div class="form-group"  style="font-size: 16px;">
          <table width="264" border="0">
  <tr>
    <td height="71" colspan="2"><img src="../bio.jpg" width="45%"></td>
  </tr>
  <tr>
    <td width="114">Nama Lengkap</td>
    <td width="134">Marlon Wanggai</td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>Kompleks DPU Biak</td>
  </tr>
  <tr>
    <td>Jurusan</td>
    <td>Teknik Informatika</td>
  </tr>
  <tr>
    <td>Fakultas</td>
    <td>FIKOM</td>
  </tr>
  <tr>
    <td>Lulusan</td>
    <td>Universitas Sains dan Teknologi Jayapura</td>
  </tr>
  <tr>
    <th colspan="2" bgcolor="#6699FF"><div align="center">Info Kontak</div></th>
  </tr>
  <tr>
    <td>WA</td>
    <td>085254097520</td>
  </tr>
  <tr>
    <td>Facebook</td>
    <td>Marlon Wanggai</td>
  </tr>
  <tr>
    <td>Instagram</td>
    <td>Marlonwanggai</td>
  </tr>
</table>
      </div>
    </div>
  </div>
</div>
    <!-- end modal tentang kami --> 



