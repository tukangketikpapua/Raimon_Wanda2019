<?php
//FUNGSI SIMPAN DATA --> 
//koneksi ke databases
require '../../function/function_koneksi.php';
require '../../function/function_simpan.php';

if(isset($_POST["register"]) ){
//cek apakah data berhasil di tambahkan
if(hapus_validasi($_POST)> 0) {

    echo "<script>
            alert('Berhasil hapus data');
            document.location.href = 'dt_validasi.php';

            </script>";
} else {
    echo "<script>
            alert(' Gagal hapus data');
            document.location.href = 'dt_validasi.php';

            </script>";
}
 
}
 ?>
 

<!DOCTYPE html>
<html>
<style type="text/css">

.kuning{
    color: #0066FF
}


</style>


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
    <link href="../../../assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />


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
                                <a href="../input/i_distrik.php"    style="color: yellow">- Distrik </a>
                            </li>
                        </ul>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="../input/i_Jormas.php" style="color: yellow">- Jenis Ormas </a>
                            </li>
                        </ul>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="../input/i_syarat.php" style="color: yellow">- Persyaratan </a>
                            </li>
                        </ul>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="../input/i_panduan.php" style="color: yellow">- Panduan </a>
                            </li>
                        </ul>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="../validasi/registrasi.php" style="color: yellow">- Akun </a>
                            </li>
                        </ul>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="../input/i_SKT.php" style="color: yellow">- Surat Keterangan (SKT) </a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                                       <li>
                        <a href="#"><i class="fa fa-edit"></i>Lihat Data<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                            <a href="dt_validasi.php" style="color: yellow">- Berkas di Validasi</a>
                            </li>
                            <li>
                            <a href="akun.php" style="color: yellow">- Data Akun</a>
                            </li>
                            <li>
                                <a href="dt_persyaratan.php" style="color: yellow">- Persyaratan Pendaftaran</a>
                            </li>
                            <li>
                                <a href="dt_panduan.php" style="color: yellow">- Panduan Pendaftaran</a>
                            </li>  

                            <li>
                                <a href="dt_daftarbaru.php" style="color: yellow">- Data Terdaftar</a>
                            </li> 
                            <li>
                                <a href="dt_distrik.php " style="color: yellow">- Data Distrik</a>
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
                    <h1 class="page-header">LIHAT DATA</h1>
                </div>
                <!-- end  page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <form action="" method="post">
                        <div class="panel panel-default">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h2>Data Validasi</h2>
                                </div>
                                <div class="panel-body">
                                </p>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th width="5%" style="font-size: 10px"><center>tgl daftar</center></th>
                                                <th width="5%" style="font-size: 10px"><center>kode berkas</center></th>
                                                <th width="10%"   style="font-size: 10px"><center>nama Organisasi</center></th>
                                                <th width="5%" style="font-size: 10px" title="Surat_Permohonan_Pendaftaran"><center>berkas 1</center></th>
                                                <th width="5%" style="font-size: 10px" title="akta_pendirian"><center>berkas 2</center></th>
                                                <th width="5%" style="font-size: 10px" title="tujuan_program"><center>berkas 3</center></th>
                                                <th width="5%" style="font-size: 10px" title="SK_susunan"><center>berkas 4</center></th>
                                                <th width="5%" style="font-size: 10px" title="Biodata_pengurus"><center>berkas 5</center></th>
                                                <th width="5%" style="font-size: 10px" title="Pas_photo"><center>berkas 6</center></th>
                                                <th width="5%" style="font-size: 10px" title="fc_ktp"><center>berkas 7</center></th>
                                                <th width="5%" style="font-size: 10px" title="SK_domisili"><center>berkas 8</center></th>
                                                <th width="5%" style="font-size: 10px" title="NPWP"><center>berkas 9</center></th>
                                                <th width="5%" style="font-size: 10px" title="SP_konflik"><center>berkas 10</center></th>
                                                <th width="2%"></th>
                                                <th width="2%"></th>
                                                 
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            <?php if(mysqli_num_rows($result7)){ ?>
                                                <?php while($row=mysqli_fetch_array($result7)){ ?>
                                                    <tr>
                                                        <td style="font-size: 10px" class=><?= $row ["tgl_daftar"]; ?></td>
                                                        <td style="font-size: 10px" class=><?= $row ["kd_berkas"]; ?></td>
                                                        <td style="font-size: 10px" class=><?= $row ["nama_organisasi"]; ?></td>
                                                        <?php if ($row ['Surat_Permohonan_Pendaftaran']==='valid' ){
                                                            echo '<td title="Surat_Permohonan_Pendaftaran" class="kuning" align="center">Valid</td>' ;
                                                        }else{
                                                            echo '<td     style="color:#FF0000"  align="center">Tidak Valid</td>';
                                                        }

                                                        ?>
                                                        <?php if ($row ['akta_pendirian']=='valid' ){
                                                            echo '<td title="akta_pendirian"    class="kuning" align="center">Valid</td>' ;
                                                        }else{
                                                            echo '<td    style="color:#FF0000"  align="center">Tidak Valid</td>';
                                                        }


                                                        ?>
                                                        <?php if ($row ['tujuan_program']=='valid' ){
                                                            echo '<td title="tujuan_program"    class="kuning" align="center">Valid</td>' ;
                                                        }else{
                                                            echo '<td    style="color:#FF0000"  align="center">Tidak Valid</td>';
                                                        }

                                                        ?>
                                                        <?php if ($row ['SK_susunan']=='valid' ){
                                                            echo '<td title="SK_susunan"    class="kuning" align="center">Valid</td>' ;
                                                        }else{
                                                            echo '<td   style="color:#FF0000"  align="center">Tidak Valid</td>';
                                                        }

                                                        ?>

                                                        <?php if ($row ['Biodata_pengurus']=='valid' ){
                                                            echo '<td title="Biodata_pengurus"    class="kuning" align="center">Valid</td>' ;
                                                        }else{
                                                            echo '<td    style="color:#FF0000"  align="center">Tidak Valid</td>';
                                                        }

                                                        ?>
                                                        <?php if ($row ['Pas_photo']=='valid' ){
                                                            echo '<td   title="Pas_photo" class="kuning" align="center">Valid</td>' ;
                                                        }else{
                                                            echo '<td   style="color:#FF0000" align="center">Tidak Valid</td>';
                                                        }
                                                        ?>
                                                        <?php if ($row ['fc_ktp']=='valid' ){
                                                            echo '<td    title="fc_ktp"  class="kuning" align="center">Valid</td>' ;
                                                        }else{
                                                            echo '<td     style="color:#FF0000"  align="center">Tidak Valid</td>';
                                                        }

                                                        ?>
                                                        <?php if ($row ['SK_domisili']=='valid' ){
                                                            echo '<td   title="SK_domisili"  class="kuning" align="center">Valid</td>' ;
                                                        }else{
                                                            echo '<td     style="color:#FF0000"  align="center">Tidak Valid</td>';
                                                        }

                                                        ?>
                                                        <?php if ($row ['NPWP']=='valid' ){
                                                            echo '<td   title="NPWP"  class="kuning" align="center">Valid</td>' ;
                                                        }else{
                                                            echo '<td     style="color:#FF0000"  align="center">Tidak Valid</td>';
                                                        }

                                                        ?>
                                                        <?php if ($row ['SP_konflik']=='valid' ){
                                                            echo '<td   title="SP_konflik"  class="kuning" align="center">Valid</td>' ;
                                                        }else{
                                                            echo '<td    style="color:#FF0000"  align="center">Tidak Valid</td>';
                                                        }

                                                        ?>


    <td style="font-size: 10px" class=><a href="../../function/function_hapus.php?kd_distrik=<?= $row ["kd_distrik"]; ?>" class="btn btn-primary btn-xs" onclick=" return confirm('Yakin akan hapus data ?  ');">hapus<a>
    <td><a  href="../validasi/registrasi.php" class="btn btn-primary btn-xs"  onclick=" return confirm('Registrasi Data ???');">Registrasi<a></td>



                                                                </tr>
                                                                <?php $i++; ?>
                                                            <?php } ?>
                                                        <?php } ?>


                                                    </tbody>
                                                </table>
                                            </div>         
                                        </div>
                                    </form>
                                    </div>
                                    <!--End Advanced Tables --> 
                                    <!-- Core Scripts - Include with every page -->
                                    <script src="../../../assets/plugins/jquery-1.10.2.js"></script>
                                    <script src="../../../assets/plugins/bootstrap/bootstrap.min.js"></script>
                                    <script src="../../../assets/plugins/metisMenu/jquery.metisMenu.js"></script>
                                    <script src="../../../assets/plugins/pace/pace.js"></script>
                                    <script src="../../../assets/scripts/siminta.js"></script>
                                    <!-- Page-Level Plugin Scripts-->
                                    <script src="../../../assets/plugins/dataTables/jquery.dataTables.js"></script>
                                    <script src="../../../assets/plugins/dataTables/dataTables.bootstrap.js"></script>
                                    <script>
                                        $(document).ready(function () {
                                            $('#dataTables-example').dataTable();
                                        });
                                    </script>


                                </body>

                                </html>




                                <!-- INFORMASI TERDAFTAR -->
<!-- Advanced Tables -->
                    <form action="" method="post">
                                <body class="body-Login-back">
                                    <div class="row">
                                        <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
                                        </div>                  
                                        <div class="modal fade" id="pesan1" role="dialog"  >
                                            <div class="modal-dialog">
                                                <div class="modal-content" >
                                                    <div modal-header>
                                                        <marquee>
                                                            <h1>Informasi</h1>
                                                        </marquee>
                                                    </div>
                                                    <div class="panel-body" >
                                                        <table>

                                                            <textarea name="info"   cols="80%" rows="5"></textarea>
                                                            <button class="btn btn-primary btn-xs" width="20%" height="50%">Kirim Informasi</button>
                                                            <a>
                                                                <button type="reset" class="btn btn-primary btn-xs">Batal</button>

                                                            </table>
                                                        </form>
                                                    </div>
                                                    <div modal-footer>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </body>
                                <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->]



                              