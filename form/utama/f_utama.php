<?php
error_reporting(0);
$conn =mysqli_connect("localhost","root","","db_ormas");
 require'function_daftar.php';                                     

$result1 =mysqli_query($conn," SELECT * FROM tb_akun LIMIT 0,5 ");
$num=mysqli_num_rows($result1);
  $fotoslide = mysqli_query($conn,"SELECT * FROM tb_ormas limit 2" );  
   
$tabkegiatan = mysqli_query($conn,"SELECT * FROM tb_ormas limit 10" );   
  ?>

<!DOCTYPE html>
<html>
<style>
   .login{
        font-style: italic;
        color: white;
        background-color: green; 
    }
    .jalan{
        font-size: 18px;
        color: white;
    }
    .judul{
        font-size: 13px;
        color :blue;
    }
    .kegiatan{
        color: green;
        background-color: white;
        font-size: 13px;
    }
    .coklat{
        color: #CC6600;
        font-size: 12px;
    }


.carousel{
    background: #2f4357;
    margin-top: 0 auto;
}
.carousel .item{
    min-height: 120px; /* Prevent carousel from being distorted if for some reason image doesn't load */
}
.carousel .item img{
    margin: 0 auto; /* Align slide image horizontally center */
    max-height: 120px;
    width:100%;
}
.bs-example{
    margin: 20px;
}

     @media print {
        .a1,.a2,.a3{
            display: none;

        }
    }

</style>
<head>

    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SISTEM INFORMASI</title>
<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
<script src="../../bootstrap/jquery-3.3.1.min.js"></script>
 
<!-- bootstrap css -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- library jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<!-- bootstrap js -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Core CSS - Include with every page -->
    <link href="../../assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="../../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="../../assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="../../assets/css/style.css" rel="stylesheet" />
    <link href="../../assets/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="../../assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />

    <!-- GRAFIK -->
    <script type="text/javascript" src="../../chartjs/Chart.js"></script>



</head>
<body>
    <!--  wrapper -->
    <div id="wrapper" class="a1">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <h5>SISTEM INFORMASI</h5>
                </a>
                <div class="jalan"><marquee> SELAMAT DATANG DI WEBSITE KESBANGPOL</marquee></div>
            </div>




            <!-- end navbar-header -->

           <!-- navbar-top-links -->
           <ul class="nav navbar-top-links navbar-right">
            <!-- main dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <span class="top-label label label-danger"><?php echo $num ?></span><i class="fa fa-envelope fa-3x"></i>
                </a>
                <!-- dropdown-messages -->
                <ul class="dropdown-menu dropdown-messages">
                    <li>
                        <div class="panel panel-default" >
                            <div class="panel-heading">
                                INFO BARU
                            </div>


                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <?php foreach ($result1 as $row): ?>
                                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                <div class="judul"><?= $row ["nama_organisasi"]; ?></div>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center">tgl daftar :<?= $row ["tgl_daftar"]; ?></td>
                                                        <td class="text-center"><button onclick="notifyme('Pesan Informasi Masuk !','Anda Mendapat info baru silahkan cek informasi dengan menginput NIK pengurus organisasi ! Terima Kasih. ')">Informasi</button></td>
                                                    </tr>

                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </li>
                                <li class="divider"></li>
                            </ul>
                            <!-- end dropdown-messages -->


                            <!-- main dropdown -->
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-user fa-3x"></i>
                                </a>
                                <!-- dropdown user-->

                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="#login1" data-toggle="modal"><i class="fa fa-sign-out fa-fw"></i>Log-in</a>
                                    </li>
                                </ul>
                                <!-- end dropdown-user -->
                            </li>
                            <!-- end main dropdown -->
                        </ul>
                        <!-- end navbar-top-links -->
                    </nav>
                    <!-- end navbar top -->






               <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                             
                            <div class="user-info">
                                <div><strong>MENU UTAMA</strong></div>
                                <div class="user-text-online">
                                     
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li class="sidebar-search">
                        <!-- search section-->
                        <form action="" method="post">
                        <div class="input-group custom-search-form">
                            <input type="text" autocomplete="off" name="carisearch" id="cari" class="form-control" placeholder="MASUKAN NIK." >
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit" name="cari">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>

                    </form>
<?php 
if(isset($_POST['cari'])){
echo '<button type="button" class="btn btn-outline btn-danger" href="#pesan" data-toggle="modal" style="width:100%">CEK INFO TERDAFTAR</button>'; 
}
?>
                        <!--end search section-->
 
                    </li>
                    <li class="selected" >
                        <a href="f_utama.php" ><i class="fa fa-home" ></i>Home</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Informasi<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="lihat/data_organisasi.php" style="color: yellow">- Data Organisasi</a>
                            </li>
                            <li>
                                <a href="lihat/data_kegiatan.php" style="color: yellow">- Kegiatan organisasi</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                     
                    <li>
                        <a href="#"><i class="fa fa-edit"></i>Pendaftaran<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#pesan2" data-toggle="modal"  style="color: yellow">- Daftar Baru</a>
                            </li>
                            <li>
                                <a href="lihat/dt_panduan.php" style="color: yellow">- Panduan Pendaftaran</a>
                            </li>
                            <li>
                                <a href="lihat/dt_persyaratan.php" style="color: yellow">- Persyaratan Pendaftaran</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i>Profil<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#" style="color: yellow">- Tujuan & Fungsi Kesbangpol</a>
                            </li>
                            <li>
                                <a href="#" style="color: yellow">- Struktur Badan Kesbangpol</a>
                            </li>
                            <li>
                                <a href="#" style="color: yellow">- Foto Anggota Kesbangpol</a>
                            </li>  
                        </ul>
                    </li>
                    <li class="selected">
                        <i  ></i><h5><?php echo "Tanggal : " . date("d-M-Y"); ?></h5></a>
                    </li>
                </ul>
                <!-- end side-menu -->
                        </div>
                        <!-- end sidebar-collapse -->
                    </nav>
                    <!-- end navbar side -->
                    <p>&nbsp;</p> 
                    <!-- Main content -->

 

<!-- SHOW MODAL LOGIN -->
                <div class="modal fade" id="login1" role="dialog1"  >
                    <div class="modal-dialog">
                        <div class="modal-content" >
                            <div modal-header>
                                <div class="login">
                                    <marquee>
                                        <h1>LOGIN AKUN</h1>
                                    </marquee>
                                </div>
                            </div>
                            <div class="panel-body" >
                                <form action="../login/proses.php" method="post" >

                                    <table width="470" height="165" border="0">
                                        <tr>
                                            <td width="153">
                                                <div class="form-group">
                                                    <label for="username">Silahkan masukan username</label>
                                                    <input class="form-control" placeholder="Username" name="Username" type="Username" required autofocus autocomplete="off" style="width: 100%">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label for="password">Silahkan masukan password</label>
                                                    <input class="form-control" placeholder="Password" name="Password" type="password" value="" required style="width: 100%">
                                                </div>
                                            </td>
                                            <td width="76" rowspan="3">
                                                    <img src="img_login/login.png" alt="" width="125%">
                                            </td>
                                        </tr>
                                       <td>
                                           <div class="form-group">
                                            <label>Hak Akses</label>
                                            <select class="form-control" name="level_user" >
                                                <option value="0" required>--- Pilih hak akses ---</option>
                                                <option>Kepala</option>
                                                <option>Admin</option>
                                                <option>User</option>
                                            </select>
                                       </td>

                                        <tr>
                                            <td>
                                                <button type="submit" class="btn btn-lg btn-success btn-block" name="login" id="login" style="width: 54%">Login</button>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
<!-- END MODAL LOGIN -->

                    
 <!-- SHOW MODAL daftar -->
                <div class="modal fade" id="pesan2" role="dialog2"  >
                    <div class="modal-dialog">
                        <div class="modal-content" >
                            <div modal-header>
                                    <marquee> 
                                        <h4><center>Silahkan login untuk daftar baru</center></h4> 
                                    </marquee>
                            </div>
                            <div class="panel-body" >
                                <form action="" method="post" >

                                    <table width="460" height="160" border="0">
                                        <tr>
                                            <td width="150">
                                                <div class="form-group">
                                                    <label for="username">Silahkan masukan username</label>
                                                    <input class="form-control" placeholder="Username" name="Username" type="Username" required autofocus autocomplete="off" style="width: 100%">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label for="password">Silahkan masukan password</label>
                                                    <input class="form-control" placeholder="Password" name="Password" type="password" value="" required style="width: 100%">
                                                </div>
                                            </td>
                                            <td width="76" rowspan="3">
                                                    <img src="img_login/login.png" alt="" width="125%">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <button type="submit" class="btn btn-lg btn-success btn-block" name="logdaftar" id="logdaftar" style="width: 54%">Login</button>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
<!-- END MODAL daftar --> 




<section class="content"  >
                          <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <!-- <div class="col-lg-12">
                    <img src="LOGO/2.png" alt=""  height="219px">
                </div> -->
                <!-- /.col-lg-12 -->
            </div>
    <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12">
                    <div class="alert alert-info">
                        <img src="LOGO/header1.png" height="80%" width="100%">
                    </div>
                </div>
                <!--end  Welcome -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <center><h5>GRAFIK JUMLAH DAFTAR PER-TAHUN</h5></center>
                        </div>
                       
    <br>

                    
    <?php 
    $koneksi = mysqli_connect("localhost","root","","db_ormas");
    ?>

    <div style="width: 360px;margin: 0px auto;">
        <canvas id="myChart"></canvas>
    </div>

    <br/>
    <br/>


    <script>
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [ "2015" , "2016" , "2017" , "2018" , "2019" ],
                datasets: [{
                    label: '',
                    data: [
                    <?php 
                    $jumlah_bumil = mysqli_query($koneksi,"select * from tb_daftar where tgl_daftar LIKE '%15%'  ");
                    echo mysqli_num_rows($jumlah_bumil);
                    ?>,
                    <?php 
                    $jumlah_busu = mysqli_query($koneksi,"select * from tb_daftar where tgl_daftar LIKE '%16%'    ");
                    echo mysqli_num_rows($jumlah_busu);
                    ?>,
                    <?php 
                    $jumlah_bayi = mysqli_query($koneksi,"select * from tb_daftar where tgl_daftar LIKE '%17%'   ");
                    echo mysqli_num_rows($jumlah_bayi);
                    ?>,
                    <?php 
                    $jumlah_batita = mysqli_query($koneksi,"select * from tb_daftar where tgl_daftar LIKE '%18%'   ");
                    echo mysqli_num_rows($jumlah_batita);
                    ?>,
                    <?php 
                    $jumlah_balita = mysqli_query($koneksi,"select * from tb_daftar where tgl_daftar LIKE '%19%'   ");
                    echo mysqli_num_rows($jumlah_balita);
                    ?>


                  
                    



                    ],
                    backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(52, 122, 192, 0.2)'
                    ],
                    borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(52, 122, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
    </script>
 
</div>
                    

                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading" style="color: green">
                            Daftar organisasi yang telah mendaftar & Kegiatan yang telah dilaksanakan.
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                                    <thead>
                                                                        <tr>
                                                                          
                                                                            <th><center>Nama Organisasi</center></th>
                                                                            <th><center>Jenis Kegiatan</center></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php $i = 1; ?>
                                                                        <?php if(mysqli_num_rows($tabkegiatan)){ ?>
                                                                            <?php while($row=mysqli_fetch_array($tabkegiatan)){ ?>
                                                                                <tr>
                                                                                    
                                                                                    <td class="coklat"><?= $row ["nama_ormas"]; ?></td>
                                                                                    <td style="font-size: 11px" class=><?= $row ["jenis_kegiatan"]; ?></td>

                                                                                </tr>
                                                                                <?php $i++; ?>
                                                                            <?php } ?>
                                                                        <?php } ?>

                                                                    </tbody>
                                                                </table>
                             
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
<!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            GALERY
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                          <div class="col-lg-10">
<?php if(mysqli_num_rows($fotoslide)){ ?>
<?php while($row=mysqli_fetch_array($fotoslide)){ ?> 
<div class="panel-heading" style="color: #FF9900" >
<td class="panel-heading"><?= $row ["nama_ormas"]; ?></td>
</div>
 
<div class='col-md-12 col-sm-6'>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="panel-heading" style="background-color: white"  >
<marquee>Tanggal Upload :<?= $row ["tanggal_upload"]; ?></marquee>
</div>
<!-- Carousel indicators -->
  
<!-- Wrapper for carousel items -->
<div class="carousel-inner">
<div class="item active">
<td>  <?php if ($row ['foto1']==='' ){
echo "<a href='' alt='First Slide' /><img src='photo/no.png'100% " ;
}else{
echo "<a href=' '   </a><img src='../user/foto/".$row['foto1']."' alt='First Slide' />" ;}?></td> 
</div>
<div class="item">
<td>  <?php if ($row ['foto2']==='' ){
echo "<a href='' alt='First Slide' /><img src='photo/no.png'100% " ;
}else{
echo "<a href='../user/foto/".$row['foto2']."'   </a><img src='../user/foto/".$row['foto2']."'  alt='Second Slide'/>" ;}?></td> 
</div>
<div class="item">
<td>  <?php if ($row ['foto3']==='' ){
echo "<a href='' alt='First Slide' /><img src='photo/no.png'100% " ;
}else{
echo "<a href=''   </a><img src='../user/foto/".$row['foto3']."'  alt='Third Slide'/>" ;}?></td>
</div>
<div class="item">
<td>  <?php if ($row ['foto4']==='' ){
echo "<a href='' alt='First Slide' /><img src='photo/no.png'100% " ;
}else{
echo "<a href='../user/foto/".$row['foto4']."'   </a><img src='../user/foto/".$row['foto4']."'  alt='Third Slide'/>" ;}?></td>
</div>
<div class="item">
<td>  <?php if ($row ['foto5']==='' ){
echo "<a href='' alt='First Slide' /><img src='photo/no.png'100% " ;
}else{
echo "<a href='../user/foto/".$row['foto5']."'   </a><img src='../user/foto/".$row['foto5']."'  alt='Third Slide'/>" ;}?></td>
</div>
<div class="item">
<td>  <?php if ($row ['foto6']==='' ){
echo "<a href='' alt='First Slide' /><img src='photo/no.png'100% " ;
}else{
echo "<a href='../user/foto/".$row['foto6']."'   </a><img src='../user/foto/".$row['foto6']."'  alt='Third Slide'/>" ;}?></td>
</div>
<div class="item">
<td>  <?php if ($row ['foto7']==='' ){
echo "<a href='' alt='First Slide' /><img src='photo/no.png'100% " ;
}else{
echo "<a href='../user/foto/".$row['foto7']."'   </a><img src='../user/foto/".$row['foto7']."'  alt='Third Slide'/>" ;}?></td>
</div>
<div class="item">
<td>  <?php if ($row ['foto8']==='' ){
echo "<a href='' alt='First Slide' /><img src='photo/no.png'100% " ;
}else{
echo "<a href='../user/foto/".$row['foto8']."'   </a><img src='../user/foto/".$row['foto8']."'  alt='Third Slide'/>" ;}?></td>
</div>
<div class="item">
<td>  <?php if ($row ['foto9']==='' ){
echo "<a href='' alt='First Slide' /><img src='photo/no.png'100% " ;
}else{
echo "<a href='../user/foto/".$row['foto9']."'   </a><img src='../user/foto/".$row['foto9']."'  alt='Third Slide'/>" ;}?></td>
</div>
<div class="item">
<td>  <?php if ($row ['foto10']==='' ){
echo "<a href='' alt='First Slide' /><img src='photo/no.png'100% " ;
}else{
echo "<a href='../user/foto/".$row['foto10']."'   </a><img src='../user/foto/".$row['foto10']."'  alt='Third Slide'/>" ;}?></td>
</div>

</div>
 
</div>

 <div class="kegiatan">
<?= $row ["jenis_kegiatan"]; ?>
</div>
<?php } ?>
<?php } ?>             
</div>
 </div>
    </div>    
             
<p>&nbsp;</p>
<p>&nbsp;</p> 
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

                    <!-- /.panel -->
                    <div class="a3" >
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h5>GRAFIK JUMLAH KEGIATAN ORGANISASI </h5>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body" >
                              <?php 
    $koneksi = mysqli_connect("localhost","root","","db_ormas");
    ?>

    <div style="width: 360px;margin: 0px auto;">
        <canvas id="myChart2"></canvas>
    </div>

    <br/>
    <br/>


    <script>
        var ctx = document.getElementById("myChart2").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: [ "2015" , "2016" , "2017" , "2018" , "2019" ],
                datasets: [{
                    label: '',
                    data: [
                    <?php 
                    $jumlah_bumil = mysqli_query($koneksi,"select * from tb_ormas where tanggal_upload LIKE '%15%'  ");
                    echo mysqli_num_rows($jumlah_bumil);
                    ?>,
                    <?php 
                    $jumlah_busu = mysqli_query($koneksi,"select * from tb_ormas where tanggal_upload LIKE '%16%'    ");
                    echo mysqli_num_rows($jumlah_busu);
                    ?>,
                    <?php 
                    $jumlah_bayi = mysqli_query($koneksi,"select * from tb_ormas where tanggal_upload LIKE '%17%'   ");
                    echo mysqli_num_rows($jumlah_bayi);
                    ?>,
                    <?php 
                    $jumlah_batita = mysqli_query($koneksi,"select * from tb_ormas where tanggal_upload LIKE '%18%'   ");
                    echo mysqli_num_rows($jumlah_batita);
                    ?>,
                    <?php 
                    $jumlah_balita = mysqli_query($koneksi,"select * from tb_ormas where tanggal_upload LIKE '%19%'   ");
                    echo mysqli_num_rows($jumlah_balita);
                    ?>


                  
                    



                    ],
                    backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 0, 127, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(52, 122, 192, 0.2)'
                    ],
                    borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(0, 255, 1, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(111, 0, 255, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
    </script>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
</section>
    </div>
    <!-- /#wrapper -->
                         
  <!-- SHOW MODAL AKUN -->

<div class="modal fade" id="pesan" role="dialog3" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div modal-header>
                <div class="login">
                    <h1 style="text-align: center"> Bukti Pendaftaran</h1>
                </div>

            </div>
            <div class="panel-body" >
                <br>
                <!--    Context Classes  -->
                <div class="panel panel-default">
                    <?php
                    $query=$_POST['carisearch']; 
                    if($query !== '0'){
                        $info = mysqli_query($conn,"SELECT * FROM tb_akun WHERE nik_pengurus LIKE '".$query."'" );
                    }else{ 
                    }
                    ?>
                    <?php if(mysqli_num_rows($info)){ ?>
                        <?php while($row=mysqli_fetch_array($info)){ ?>
                            <div class="panel-heading">
                                <th>Nama Organisasi : <td  class=><?= $row ["nama_organisasi"]; ?></td></th>
                            </div>

                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>

                                            <tr>
                                                <th width="5%">Keterangan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="success">
                                                <td class= width="5%"><?= $row ["pesan"]; ?></td>
                                            </tr>
                                        </tbody>

                                    </table>

                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p> 
                                    <?php echo '-----------------------------------------------------------------------------------------------------------------' ?>                                          
                                    <div class="form-group">
                                        <label for="password">Username</label>
                                        <input class="form-control" placeholder="username akan diisi oleh admin =" name="text" readonly style="width: 100%">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input class="form-control" placeholder="Password akan diisi oleh admin =" name="text" readonly  style="width: 100%">
                                    </div>
                                </div>

                            </div>


                            </div>             
<?php } ?>
<?php }else{
echo '<tr><td><center><h2>MAAF ! BELUM ADA INFORMASI !!!<h2></center></td></tr>';  

}?>

                        <!--  end  Context Classes  -->
                        <form>
                            <p style="color: red">1.cetak bukti terdaftar</p>
                            <p style="color: red">2.Lengkapi Persyaratan/Berkas yang belum lengkap</p>
                            <p style="color: red">3.Tunjukan bukti terdaftar pada admin/petugas pada BAKESBANGPOL</p>
                            <p style="color: red">4.Sertakan(tunjukan)berkas yang harus dilengkapi</p>
                            <th>


                                <button type="submit" name="refresh"   style="width: 25%" class="a2" >Batal</button>


                                <?php  

                                $url = $_SERVER['REQUEST_URI'];  

                                header("Refresh: ; URL=$url");  

                                ?></button>



                                <button onclick="print()"  class="a3" style="width: 25%" >Cetak</button>

                            </th>        
                        </div>

                    </div>

                    <p>
                    </div>

                    <!-- END MODAL AKUN -->

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

                                        </html>



                                        <!-- NOTIFIKASI PESAN MASUK SAAT DIKLIK -->
                                        <script type="text/javascript">
                                            function notifyme(msg_title,msg_body,redirect_onclick){
                                                var granted=0;
//
if(!("Notification"in window)){
    alert("this browser does not support desktop notification");
}
else if (Notification.permission ==="granted"){
    granted=1;
}

//
else if (Notification.permission !=="denied"){
    Notification.requestPermission(function(permission){
//
if(permission ==="granted"){
    granted = 1;

}
});
}
if(granted ==1){
    var notification = new Notification(msg_title,{
        body:msg_body,
        icon:'img_login/notif.png'
    });
    if(redirect_onclick){
        Notification.onclick=function(){
            window.location.href=redirect_onclick;
        }
    }
}
}
</script>






