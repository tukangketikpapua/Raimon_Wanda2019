<?php
//FUNGSI SIMPAN DATA --> 
//koneksi ke databases
require '../../function/function_koneksi.php';
require '../../function/function_simpan.php';

if(isset($_POST["register"]) ){
//cek apakah data berhasil di tambahkan
if(register($_POST)> 0) {

    echo "<script>
            alert('Berhasil Registrasi');
            document.location.href = 'registrasi.php';

            </script>";
} else {
    echo "<script>
            alert(' Gagal Registrasi');
            document.location.href = 'registrasi.php';

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
<!--                         <ul class="nav nav-second-level">
                            <li>
                                <a href="../validasi/registrasi.php" style="color: yellow">- Akun </a>
                            </li>
                        </ul> -->
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
                    <h1 class="page-header">LIHAT DATA</h1>
                </div>
                <!-- end  page header -->
            </div>
            <div class="row">
        <div class="col-lg-12">
            <!-- Advanced Tables -->
            <form action="" method="post">
<?php if(mysqli_num_rows($result8)){ ?>
<?php while($row=mysqli_fetch_array($result8)){ ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <button type="submit" name="register" class="btn btn-primary" >Simpan Data</button>
                        <button type="reset" name="batal" class="btn btn-success" >Batal</button>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table">
                                <label for="kd_berkas">Kode</label>
                                <p><input type="text" size="10%" name="kd_berkas" value="<?= $row ["kd_berkas"]; ?>" readonly="true"></p>
                                <label for="tgl_daftar">tgl daftar</label>
                                <p><input type="text" name="tgl_daftar" size="35%" value="<?= $row ["tgl_daftar"]; ?>"   readonly></p>
                                <label for="nama_organisasi">nama organisasi</label>
                                <p><input type="text" name="nama_organisasi" size="35%" value="<?= $row ["nama_organisasi"]; ?>"  readonly></p>
                                <label for="nik_pengurus">nik pengurus</label>
                                <p><input type="text" name="nik_pengurus" size="35%" value="<?= $row ["nik_pengurus"]; ?>"  readonly></p>
                                <label for="username">username</label>
                                <p><input type="text" name="username" size="35%" value="" autocomplete="off"  required></p>
                                <label for="password">password</label>
                                <p><input type="text" name="password" size="35%" value="" autocomplete="off"  required></p>
                                <label for="level_user">level user</label>
                                <p><select type="text" name="level_user"   required>
                                    <option value="0">pilih level</option>
                                    <option>kepala</option>
                                    <option>admin</option>
                                    <option>user</option>
                                </p>
                                <label for="tgl terdaftar">tgl terdaftar</label>
                                <p><input type="text" name="tglterdaftar" hidden="true" value="<?php echo   date("d-M-Y"); ?>" > </p>
                                <textarea  type="text" name="pesaninfo" id="pesaninfo"   cols="50" rows="5"></textarea>
                            </table>
                            <!-- Advanced Tables -->
                        </div>
                    </div>
<?php } ?>
<?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </form>
                                                    </div>         
                                                </div>
                                            </div>
                                            <!--End Advanced Tables -->

                                            <!-- Advanced Tables -->

            <form action="" method="post">
                <div class="panel panel-default">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h2>Data Akun</h2>
                                                </div>
                                                <div class="panel-body">                
                                                    <div class="table-responsive">
                                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                            <thead>
                                                                <tr>
                                                                    <th width="2%" >No</th>
                                                                     <th width="7%"><center>tanggal daftar</center></th>
                                                                    <th width="5%"><center>NIK pengurus</center></th>
                                                                    <th width=""><center>Nama Organisasi</center></th>
                                                                    <th width=""><center>Username</center></th>
                                                                    <th width="7%"><center>Password</center></th>
                                                                    <th width="5%"><center>Level User</center></th>
                                                                    <th width="5%"><center>Tanggal Terdaftar</center></th>
                                                                    <th width="1%"></th>
                                                                    <th></th>
 

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $i = 1; ?>
                                                                <?php if(mysqli_num_rows($result9)){ ?>
                                                                    <?php while($row=mysqli_fetch_array($result9)){ ?>
                                                                        <tr style="font-size: 11px">
                                                                            <td><?= $i; ?></td>
                                                                            <td class=><?= $row ["tgl_daftar"]; ?></td>
                                                                            <td class=><?= $row ["nama_organisasi"]; ?></td>
                                                                            <td class=><?= $row ["nik_pengurus"]; ?></td>
                                                                            <td class=><?= $row ["username"]; ?></td>
                                                                            <td class=><?= $row ["password"]; ?></td>
                                                                            <td class=><?= $row ["level_user"]; ?></td>
                                                                            <td class=><?= $row ["tgl_terdaftar"]; ?></td>
 
<td class=><a href=" " class="btn btn-primary btn-xs" onclick=" return confirm(' Yakin ingin hapus data ?');">hapus<a>
    <td class=><a href="" class="btn btn-primary btn-xs" onclick=" return confirm(' Yakin ingin edit data ?');">edit<a>


         
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
                                    <script src="../../../assets/plugins/dataTables/jquery.dataTables.js"></script>
                                    <script src="../../../assets/plugins/dataTables/dataTables.bootstrap.js"></script>
                                    <script>
                                        $(document).ready(function () {
                                            $('#dataTables-example').dataTable();
                                        });
                                    </script>


                                </body>

                                </html>





                              