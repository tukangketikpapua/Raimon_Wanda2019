<?php
//FUNGSI SIMPAN DATA --> 
//koneksi ke databases
require '../../function/function_autoN.php';
require '../../function/function_koneksi.php';
require '../../function/function_simpan.php';
if(isset($_POST["submit"]) ){
//cek apakah data berhasil di tambahkan
if(simpan_distrik($_POST)> 0) {
    echo "<script>
            alert('data berhasil disimpan');
            document.location.href = 'i_distrik.php';
            </script>";
} else {
    echo "<script>
            alert('data Gagal disimpan');
            document.location.href = 'i_distrik.php';
            </script>";
}
}
 ?>




 <!DOCTYPE html>
 <html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Admin</title>
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
    <div id="wrapper">
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

            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../../utama/m_utama.php"><i class="fa fa-sign-out fa-fw"></i>Log-Out</a>
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
                            <div class="user-section-inner">
                                <img src="../../../img/user.jpg" alt="">
                            </div>
                            <div class="user-info">
                                <div><strong>ADMIN</strong></div>
                                <div class="user-text-online">

                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li class="sidebar-search">
                    </li>
                    <li class="selected">
                        <a href="../index.php"><i class="fa fa-home"></i>Home</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Input Data<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="i_distrik.php"    style="color: yellow">- Distrik </a>
                            </li>
                        </ul>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="i_Jormas.php" style="color: yellow">- Jenis Ormas </a>
                            </li>
                        </ul>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="i_syarat.php" style="color: yellow">- Persyaratan </a>
                            </li>
                        </ul>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="i_panduan.php" style="color: yellow">- Panduan </a>
                            </li>
                        </ul>
<!--                         <ul class="nav nav-second-level">
                            <li>
                                <a href="../validasi/registrasi.php" style="color: yellow">- Akun </a>
                            </li>
                        </ul> -->
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="i_SKT.php" style="color: yellow">- Surat Keterangan (SKT) </a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit"></i>Lihat Data<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                            <a href="../lihat/dt_validasi.php" style="color: yellow">- Berkas di Validasi</a>
                            </li>
                            <li>
                            <a href="../lihat/akun.php" style="color: yellow">- Data Akun</a>
                            </li>
                            <li>
                                <a href="../lihat/dt_persyaratan.php" style="color: yellow">- Persyaratan Pendaftaran</a>
                            </li>
                            <li>
                                <a href="../lihat/dt_panduan.php" style="color: yellow">- Panduan Pendaftaran</a>
                            </li>  

                            <li>
                                <a href="../lihat/dt_daftarbaru.php" style="color: yellow">- Data Terdaftar</a>
                            </li> 
                            <li>
                                <a href="../lihat/dt_distrik.php " style="color: yellow">- Data Distrik</a>
                            </li>                             
                        </ul>
                        <!-- second-level-items -->
                    </li>                    
                    <li>
                    <a href="#"><i class="fa fa-files-o fa-fw"></i>Laporan<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="" style="color: yellow">- Kegiatan Organisasi</a>
                        </li>
                        <li>
                            <a href="" style="color: yellow">- Data Organisasi </a>
                        </li>
                    </ul>

    <li class="selected">
        <i class=""></i><h5><?php echo "Tanggal : " . date("d-M-Y"); ?></h5></a>
    </li>
    <!-- second-level-items -->
</li>

</ul>
<!-- end side-menu -->
</div>
<!-- end sidebar-collapse -->
</nav>
<!-- end navbar side -->
<!--  page-wrapper -->
<div id="page-wrapper">


    <div class="row">
        <!--  page header -->
        <div class="col-lg-12">
            <h1 class="page-header">INPUT DATA</h1>
        </div>
        <!-- end  page header -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <!-- Advanced Tables -->
            <form action="" method="post">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <button type="submit" name="submit" class="btn btn-primary" >Simpan Data</button>
                        <button type="reset" name="submit" class="btn btn-success" >Batal</button>
                    </div>

                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table">
                                <label for="kd_distrik">Kd_Distrik</label>
                                <p><input type="text" size="10%" name="kd_distrik" value="<?php echo $distrik;?>" readonly="true"></p>
                                <label for="nm_distrik">Nama_Distrik</label>
                                <p><input type="text" name="nm_distrik" size="35%"value="" autocomplete="off"  required></p>
                                <label for="alamat">Alamat</label>
                                <p><textarea type="text" name="alamat" style="width:50%" value="" autocomplete="off"  required></textarea></p>
                            </table>
                            <!-- Advanced Tables -->
                        </div>
                    </div>

<!-- TABLE DATA -->
<!-- Advanced Tables -->
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h2>Data Distrik</h2>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                            <thead>
                                                                <tr>
                                                                    <th width="5%" >No</th>
                                                                    <th width="15%"><center>kd distrik</center></th>
                                                                    <th width="30%"><center>Nama Distrik</center></th>
                                                                    <th width="80%"><center>Alamat</center></th>
                                                                    <th></th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $i = 1; ?>
                                                                <?php if(mysqli_num_rows($result)){ ?>
                                                                    <?php while($row=mysqli_fetch_array($result)){ ?>
                                                                        <tr>
                                                                            <td><?= $i; ?></td>
                                                                            <td class=><?= $row ["kd_distrik"]; ?></td>
                                                                            <td class=><?= $row ["nm_distrik"]; ?></td>
                                                                            <td class=><?= $row ["alamat"]; ?></td>
                                                                            
  <td style="font-size: 10px" class=><a href="../edit/edit_distrik.php?kd_distrik=<?= $row ["kd_distrik"]; ?>"" class="btn btn-primary btn-xs" onclick=" return confirm('Yakin akan edit data ?  ');">edit<a>
    <td><a  href="" class="btn btn-primary btn-xs"  onclick=" return confirm('Yakin edit Data ???');">Hapus<a></td>

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
