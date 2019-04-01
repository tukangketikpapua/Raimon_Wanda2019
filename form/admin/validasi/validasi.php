<?php

//koneksi ke databases
$conn = mysqli_connect("localhost","root","","db_ormas");
$kd=$_GET["kd_berkas"];
$data=mysqli_query($conn,"SELECT * FROM tb_daftar WHERE kd_berkas = '$kd';");
?>
<?php
require '../../function/function_simpan.php';
//SIMPAN DATA
if(isset($_POST["submit"]) ){
//cek apakah data berhasil di tambahkan
    if(validasi_data($_POST)> 0) {
        echo "<script>
        alert('data berhasil divalidasi');
        document.location.href = '../lihat/dt_validasi.php';
        </script>";
    } else {
        echo "<script>
        alert('data Gagal divalidasi');
        document.location.href = '../lihat/dt_validasi.php';
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
                <div class="col-lg-10">
                    <h1 class="page-header">LIHAT DATA</h1>
                </div>
                <!-- end  page header -->
            </div>
            <div class="row">
                <div class="col-lg-18">
                    <!-- Advanced Tables -->
                    <form action="" method="post" enctype="multipart/form-data">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <button type="submit" name="submit" class="btn btn-primary" >Simpan Data</button>
                                        <button type="reset"    class="btn btn-success" >Batal</button>
                                    </div>                
                                    <div class="panel-body">
<?php if(mysqli_num_rows($data)){ ?>
<?php while($row=mysqli_fetch_array($data)){ ?>
                                        <br>
                                        <div class="table-responsive">

                                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                <tr>
                                                    <th width="70%" class="text-center">Data</th>
                                                    <th width="90%" class="text-center">Berkas Persyaratan</th>
                                                </tr>
                                                <thead>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <label for="kd_berkas">kd Daftar</label>
                                                            <p><input type="text" size="10%" name="kd_berkas" value="<?= $row ["kd_berkas"]; ?>"   readonly="true"> 
                                                            </p>
                                                            <label for="tgl">Tanggal Daftar</label>
                                                            <p>
                                                                <input type="text"  name="tgl" id="tgl" value="<?= $row ["tgl_daftar"]; ?>"  >
                                                            </p>
                                                            <label for="nm_organisasi">Nama Organisasi</label>
                                                            <p><input type="text" size="65%" name="nm_organisasi" id="nm_organisasi"  value="<?= $row ["nama_organisasi"]; ?>" style="width: 75%" readonly="true"></p>
                                                            </p>
                                                            <label for="nik">Nik Pengurus</label>
                                                            <p><input type="text" size="65%" name="nik" id="nik"  value="<?= $row ["nik_pengurus"]; ?>" style="width: 75%" readonly="true"></p>

                                                            <label for="keterangan">Keterangan</label>
                                                            <p>
                                                                <textarea type="text"  " name="ket" id="ket"    style="width: 80%"  ></textarea>
                                                            </p>





                                                            <br>
                                                            <br>
                                                            <ul>
                                                                catatan penting !
                                                                <li style="color: red">Pemeriksaan berkas persyaratan akan di periksa hingga 2 tahap.</li>
                                                                <li style="color: red" >jika anda telah mengupload seluruh berkas persyaratan maka anda silahkan cek pemberitahuan kelengkapan berkas tahap I pada 6 hari setelah berkas di upload dan di periksa.</li>
                                                                <li style="color: red">jika berkas belum lengkap maka anda akan diberitahukan.</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <div class="form-group has-success">
                                                                <label class="control-label" for="file">Berkas 1</label>
                                                                <input type="text" name="file1" id="file1" class="form-control" style="width: 90%" value="<?= $row ["Surat Permohonan Pendaftaran"]; ?>" >
                                                                <select  name="file1" >
                                                                    <option value="0">pilih validasi</option>
                                                                    <option>valid</option>
                                                                    <option>tidak valid</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group has-success">
                                                                <label class="control-label" for="inputSuccess">Berkas 2</label>
                                                                <input type="text" id="file2" class="form-control"  style="width: 90%" title="Akta Pendirian yang disahkan Notaris" value="<?= $row ["akta_pendirian"]; ?>">
                                                                <select name="file2" >
                                                                    <option value="0">pilih validasi</option>
                                                                    <option>valid</option>
                                                                    <option>tidak valid</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group has-success">
                                                                <label class="control-label" for="inputSuccess">Berkas 3</label>
                                                                <input type="text"  id="file3"  class="form-control"style="width: 90%" value="<?= $row ["tujuan_program"]; ?>">  
                                                                <select name="file3">
                                                                    <option value="0">pilih validasi</option>
                                                                    <option>valid</option>
                                                                    <option>tidak valid</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group has-success">
                                                                <label class="control-label" for="inputSuccess">Berkas 4</label>
                                                                <input type="text"  id="file4"  class="form-control"   style="width: 90%" title="SK susunan Pengurus yang sesuai dengan AD ART" value="<?= $row ["SK_susunan"]; ?>">
                                                                <select name="file4">
                                                                    <option value="0">pilih validasi</option>
                                                                    <option>valid</option>
                                                                    <option>tidak valid</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group has-success">
                                                                <label class="control-label" for="inputSuccess">Berkas 5</label>
                                                                <input type="text" id="file5" class="form-control"   style="width: 90%" title="Biodata pengurus organisasi" value="<?= $row ["Biodata_pengurus"]; ?>">
                                                                <select name="file5" >
                                                                    <option value="0">pilih validasi</option>
                                                                    <option>valid</option>
                                                                    <option>tidak valid</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group has-success">
                                                                <label class="control-label" for="inputSuccess">Berkas 6</label>
                                                                <input type="text" id="file6"class="form-control"   style="width: 90%" title="Pas photo 4x6 terbaru" value="<?= $row ["Pas_photo"]; ?>">
                                                                <select  name="file6">
                                                                    <option value="0">pilih validasi</option>
                                                                    <option>valid</option>
                                                                    <option>tidak valid</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group has-success">
                                                                <label class="control-label" for="inputSuccess">Berkas 7</label>
                                                                <input type="text"id="file7"  class="form-control"   style="width: 90%" title="fotocopy KTP ketua pengurus organisasi" value="<?= $row ["fc_ktp"]; ?>">
                                                                <select  name="file7" >
                                                                    <option value="0">pilih validasi</option>
                                                                    <option>valid</option>
                                                                    <option>tidak valid</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group has-success">
                                                                <label class="control-label" for="inputSuccess">Berkas 8</label>
                                                                <input type="text" name="file8" id="file8" class="form-control"   style="width: 90%" title="Surat keterangan domisili organisasi" value="<?= $row ["SK_domisili"]; ?>">
                                                                <select name="file8">
                                                                    <option value="0">pilih validasi</option>
                                                                    <option>valid</option>
                                                                    <option>tidak valid</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group has-success">
                                                                <label class="control-label" for="inputSuccess">Berkas 9</label>
                                                                <input type="text"  id="file9"  class="form-control"  style="width: 90%" title="NPWP organisasi" value="<?= $row ["NPWP"]; ?>">
                                                                <select name="file9">
                                                                    <option value="0">pilih validasi</option>
                                                                    <option>valid</option>
                                                                    <option>tidak valid</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group has-success">
                                                                <label class="control-label" for="inputSuccess">Berkas 10</label>
                                                                <input type="text"  id="file10" class="form-control"  style="width: 90%" title="Surat pernyataan tidak terjadi konflik kepengurusan" value="<?= $row ["SP_konflik"]; ?>">
                                                                <select name="file10">
                                                                    <option value="0">pilih validasi</option>
                                                                    <option>valid</option>
                                                                    <option>tidak valid</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                    </tr> 
                                                </tbody>
                                            </table>
                                        <?php } ?>
                                    <?php } ?>
                                </form>
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
