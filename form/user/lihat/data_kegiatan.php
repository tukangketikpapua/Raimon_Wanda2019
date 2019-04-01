<?php 
require'../../function/function_koneksi.php';
 ?>

<!DOCTYPE html>
<html>
<style>

    .jalan{
        font-size: 18px;
        color: white;
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
                        <li><a href="../../utama/f_utama.php" data-toggle="modal"><i class="fa fa-sign-out fa-fw"></i>Log-Out</a>
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
                                <div><strong>ORGANISASI</strong></div>
                                <div class="user-text-online">
                                     
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li class="sidebar-search">
                        <!-- search section-->
                        <form action="" method="post">
                    </form>
                        <!--end search section-->
                    </li>
                    <li class="selected" >
                        <a href="utama.php" ><i class="fa fa-home" ></i>Home</a>
                    </li>                     
                    <li>
                        <a href="#"><i class="fa fa-edit"></i>Input Data<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="" style="color: yellow">- Foto Kegiatan</a>
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
   <!--  page-wrapper -->
        <div id="page-wrapper">
            <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">LIHAT DATA</h1>
                </div>
                 <!-- end  page header -->
                 <form action="" method="post">
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Distrik
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                                                <tr>
                                                                    <th width="2%" >No</th>
                                                                    <th width="50%"><center>Nama Organisasi</center></th>
                                                                    <th width="10%"><center>Tanggal Upload</center></th>
                                                                    <th width="100%"><center>Jenis Kegiatan</center></th>
                                                                    <th></th>
                                                            
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php $i = 1; ?>
                                                            <?php if(mysqli_num_rows($result10)){ ?>
                                                            <?php while($row=mysqli_fetch_array($result10)){ ?>
                                                                        <tr>
                                                                            <td><?= $i; ?></td>
                                                                            <td class=><?= $row ["nama_ormas"]; ?></td>
                                                                            <td class=><?= $row ["tanggal_upload"]; ?></td>
                                                                            <td class=><?= $row ["jenis_kegiatan"]; ?></td>
    <td style="font-size: 10px" class=><a href="foto_kegiatan.php?nama_ormas=<?= $row ["nama_ormas"]; ?>" class="btn btn-primary btn-xs" onclick=" return confirm('Tampilkan foto kegiatan ??  ');">lihat Foto<a>

                                                                        </tr>
                                                            <?php $i++; ?>
                                                            <?php } ?>
                                                            <?php } ?>


                                                            </tbody>
                                                        </table>
                                                    </div>         
                                                </div>
                                            </div>
                                            <!--End Advanced Tables --> 


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

