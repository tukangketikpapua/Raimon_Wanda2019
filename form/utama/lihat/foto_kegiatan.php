<?php

error_reporting(0);
require'../../function/function_login.php';  
require'../../function/function_koneksi.php';
$kd=$_GET["nik_pengurus"];
$result=mysqli_query($conn,"SELECT * FROM tb_ormas WHERE nik_pengurus = '$kd' limit 1;");


$result1 =mysqli_query($conn," SELECT * FROM tb_akun LIMIT 0,5 ");
$num=mysqli_num_rows($result1);


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
@media print {
    .a1,.a2,.a3{
        display: none;

    }


</style>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEM INFORMASI</title>
    <!-- Core CSS - Include with every page -->
    <link href="../../../assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="../../../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="../../../assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="../../../assets/css/style.css" rel="stylesheet" />
    <link href="../../../assets/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="../../../assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />


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
                                    <li><a href="#login" data-toggle="modal"><i class="fa fa-sign-out fa-fw"></i>Log-in</a>
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
                                    <a href="../m_utama.php" ><i class="fa fa-home" ></i>Home</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Informasi<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="data_organisasi.php" style="color: yellow">- Data Organisasi</a>
                                        </li>
                                        <li>
                                            <a href="data_kegiatan.php" style="color: yellow">- Data Kegiatan organisasi</a>
                                         </li>
                                    </ul>
                                    <!-- second-level-items -->
                                </li>

                                <li>
                                    <a href="#"><i class="fa fa-edit"></i>Pendaftaran<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="#pesan2" data-toggle="modal" style="color: yellow">- Daftar Baru</a>
                                        </li>
                                        <li>
                                            <a href="dt_panduan.php" style="color: yellow">- Panduan Pendaftaran</a>
                                        </li>
                                        <li>
                                            <a href="dt_persyaratan.php" style="color: yellow">- Persyaratan Pendaftaran</a>
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
                                    <i class=""></i><h5><?php echo "Tanggal : " . date("d-M-Y"); ?></h5></a>
                                </li>
                            </ul>
                            <!-- end side-menu -->
                        </div>
                        <!-- end sidebar-collapse -->
                    </nav>
                    <!-- end navbar side -->
                    <!-- Main content -->
                    <section class="content">
                        <div class="row">
                        </div>
                        <div id="page-wrapper" >
                            <div id="page-inner">
                                <div class="row">             
                                    <div class="col-sm-16">              
                                        <div class=" 12">                              
                                            <!-- Advanced Tables -->
                                           
                                                <div class="panel panel-default">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h2>Gambar Kegiatan Organisasi</h2>
                                                        </div>
                                                        <div class="panel-body">
<?php $i = 1; ?>
<?php if(mysqli_num_rows($result)){ ?>
<?php while($row=mysqli_fetch_array($result)){ ?>                
                                                            <div class="table-responsive">

 <!-- Advanced Tables -->

                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
 
  <tr>
    <td width="151">Nama Organisasi</td>
    <td ><?= $row ['nama_ormas']; ?></td>
  </tr>
  <tr>
    <td>Jenis Kegiatan</td>
    <td><?= $row ['jenis_kegiatan']; ?></td>
  </tr>
 
                                                            <tbody>
                                                           
<tr>
<td><?= $i; ?></td>

<td>  <?php if ($row ['foto1']==='' ){
echo '<td align="center">Foto 1 tidak diupload</td>' ;
}else{
echo "<a href='../../user/foto/".$row['foto1']."' width='75px' </a><img src='../../user/foto/".$row['foto1']."' width='75px'/>" ;}?></td> 

<td> <?php if ($row ['foto2']==='' ){
echo '<td align="center">Foto 2 tidak diupload</td>' ;
}else{
echo "<a href='../../user/foto/".$row['foto2']."' width='75px' </a><img src='../../user/foto/".$row['foto2']."' width='75px'/>";
} ?> </td>

<td> <?php if ($row ['foto3']==='' ){
echo '<td align="center">Foto 3 tidak diupload</td>' ;
}else{
echo "<a href='../../user/foto/".$row['foto3']."' width='75px' </a><img src='../../user/foto/".$row['foto3']."' width='75px'/>";
} ?> </td>

<td> <?php if ($row ['foto4']==='' ){
echo '<td align="center">Foto 4 tidak diupload</td>' ;
}else{
echo "<a href='../../user/foto/".$row['foto4']."' width='75px' </a><img src='../../user/foto/".$row['foto4']."' width='75px'/>";
} ?> </td>

<td> <?php if ($row ['foto5']==='' ){
echo '<td align="center">Foto 5 tidak diupload</td>' ;
}else{
echo "<a href='../../user/foto/".$row['foto5']."' width='75px' </a><img src='../../user/foto/".$row['foto5']."' width='75px'/>";
} ?> </td>

<td> <?php if ($row ['foto6']==='' ){
echo '<td align="center">Foto 6 tidak diupload</td>' ;
}else{
echo "<a href='../../user/foto/".$row['foto6']."' width='75px' </a><img src='../../user/foto/".$row['foto6']."' width='75px'/>";
} ?> </td>

<td> <?php if ($row ['foto7']==='' ){
echo '<td align="center">Foto 7 tidak diupload</td>' ;
}else{
echo "<a href='../../user/foto/".$row['foto7']."' width='75px' </a><img src='../../user/foto/".$row['foto7']."' width='75px'/>";
} ?> </td>

<td> <?php if ($row ['foto8']==='' ){
echo '<td align="center">Foto 8 tidak diupload</td>' ;
}else{
echo "<a href='../../user/foto/".$row['foto8']."' width='75px' </a><img src='../../user/foto/".$row['foto8']."' width='75px'/>";
} ?> </td>

<td> <?php if ($row ['foto9']==='' ){
echo '<td align="center">Foto 9 tidak diupload</td>' ;
}else{
echo "<a href='../../user/foto/".$row['foto9']."' width='75px' </a><img src='../../user/foto/".$row['foto9']."' width='75px'/>";
} ?> </td>

<td> <?php if ($row ['foto10']==='' ){
echo '<td align="center">Foto 10 tidak diupload</td>' ;
}else{
echo "<a href='../../user/foto/".$row['foto10']."' width='75px' </a><img src='../../user/foto/".$row['foto10']."' width='75px'/>";
} ?> </td>



                                                                        </tr>
                                                            <?php $i++; ?>
                                                            <?php } ?>
                                                            <?php } ?>
                                                               
                                                            </tbody>
                                                        </table>
<h4 style="color: red">* klik pada gambar untuk melihat gambar</h4>
                                                    
                                                            </div>         
                                                        </div>
                                                    </div>
                                                    <!--End Advanced Tables --> 
                                                </div>
                                                <!-- -->
                                            </div>
                                        </div> 
                                    </div>
                                </div>



                            </section>
                            <!-- /.content -->

                        </div>
                        <!-- end wrapper -->


<!-- SHOW MODAL daftar -->
                <div class="modal fade" id="pesan2" role="dialog"  >
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
                                                    <img src="../../img_login/login.png" alt="" width="125%">
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


                        

<!-- SHOW MODAL LOGIN -->
                <div class="modal fade" id="login" role="dialog"  >
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
                                <form action="../../login/proses.php" method="post" >

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
                                                    <img src="../img_login/login.png" alt="" width="125%">
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






                            <!-- SHOW MODAL AKUN -->

                            <div class="modal fade" id="pesan" role="dialog" >
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div modal-header>
                                            <div class="login">
                                                <h1 style="text-align: center;"> Bukti Pendaftaran</h1>
                                            </div>
                                        </div>
                                        <div class="panel-body" >
                                            <br>
                                            <!--    Context Classes  -->
                                            <div class="panel panel-default">
                                                <?php
                                                $query=$_POST['carisearch']; 
                                                if($query !== '0'){
                                                    $result1 = mysqli_query($conn,"SELECT * FROM tb_akun WHERE nik_pengurus LIKE '".$query."'" );
                                                }else{ 
                                                }
                                                ?>
                                                <?php if(mysqli_num_rows($result1)){ ?>
                                                    <?php while($row=mysqli_fetch_array($result1)){ ?>
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


                                                        </div>              <?php } ?>
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


                                                            <button type="submit" name="refresh" class="a1" style="width: 25%" class="a2" >Batal</button>


                                                            <?php  

                                                            $url = $_SERVER['REQUEST_URI'];  

                                                            header("Refresh: ; URL=$url");  

                                                            ?></button>



                                                            <button onclick="print()"  class="a2" style="width: 25%" >Cetak</button>

                                                            <!-- <button type="submit" name="cetak" class="btn btn-outline btn-primary btn-sm" style="width: 25%">Cetak</button> -->
                                                        </form>
                                                    </th>        
                                                </div>

                                            </div>

                                            <p>
                                            </div>


                                            <!-- END MODAL AKUN -->






                                            <!-- Core Scripts - Include with every page -->
                                            <script src="../../../assets/plugins/jquery-1.10.2.js"></script>
                                            <script src="../../../assets/plugins/bootstrap/bootstrap.min.js"></script>
                                            <script src="../../../assets/plugins/metisMenu/jquery.metisMenu.js"></script>
                                            <script src="../../../assets/plugins/pace/pace.js"></script>
                                            <script src="../../../assets/scripts/siminta.js"></script>
                                            <!-- Page-Level Plugin Scripts-->
                                            <script src="../../../assets/plugins/morris/raphael-2.1.0.min.js"></script>
                                            <script src="../../../assets/plugins/morris/morris.js"></script>
                                            <script src="../../../assets/scripts/dashboard-demo.js"></script>


                                        </body>

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
        icon:'../img_login/notif.png'
    });
    if(redirect_onclick){
        Notification.onclick=function(){
            window.location.href=redirect_onclick;
        }
    }
}
}
</script>



<!-- CETAK LAPORAN -->



