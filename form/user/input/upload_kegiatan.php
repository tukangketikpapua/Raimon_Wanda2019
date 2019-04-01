<?php 
error_reporting(0);
require'../../function/function_koneksi.php';
require'../../function/function_simpan.php';

if(isset($_POST["submit"]) ){
//cek apakah data berhasil di tambahkan
    if(upload_berkas($_POST)> 0) {
        echo "<script>
        alert('data berhasil disimpan');
        document.location.href = 'upload_kegiatan.php';
        </script>";
    } else {
        echo "<script>
        alert('data Gagal disimpan');
        document.location.href = 'upload_kegiatan.php';
        </script>";
    }
}


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
                        <li><a href="../../utama/m_utama.php" data-toggle="modal"><i class="fa fa-sign-out fa-fw"></i>Log-Out</a>
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
                        <a href="../utama.php" ><i class="fa fa-home" ></i>Home</a>
                    </li>                     
                    <li>
                        <a href="#"><i class="fa fa-edit"></i>Input Data<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="upload_kegiatan.php" style="color: yellow">- Kegiatan</a>
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
       <<div id="page-wrapper">
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
            <form action="" method="post" enctype="multipart/form-data">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <button type="submit" name="submit" class="btn btn-primary" >Simpan Data</button>
                        <button type="reset" class="btn btn-success" >Batal</button>
                    </div>

                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table">
                                <div class="form-group has-success" >
                                <label for="nik">Nik Pengurus</label>
                                <p><input type="text" class="form-control"  name="nik" placeholder="Masukan NIK pegawai" autocomplete="off"  required="" style="width: 50%" ></p>
                                </div>

                                 <div class="form-group has-success" >
                                <label for="normas">Nama Organisasi</label>
                                <p><select class="form-control" name="normas" id="normas" onchange="changeValue(this.value)" required="" style="width: 60%" >
                                                    <option value=0>-pilih-</option>
                                                    <?php
                                                    $conn       = mysqli_connect("localhost","root","","db_ormas");
                                                    $result     = mysqli_query($conn,"select * from tb_daftar ORDER BY nama_organisasi ASC");    
                                                    $jsArray    = "var dtMhs = new Array();\n";        
                                                    while ($row = mysqli_fetch_array($result)) {    
                                                        echo '<option value="'. $row['nama_organisasi'] . '">' . $row['nama_organisasi'].'</option>';    
                                                        $jsArray .= "dtMhs['" . $row['nama_organisasi'] . "'] = {nama:'" . addslashes($row['nama_organisasi']) . "',jrsn:'".addslashes($row['tgl_daftar']). "',jrsn2:'".addslashes($row['Koef'])."'};\n";    
                                                    }      
                                                    ?>
                                                </select></p>
                                </div>



<div class="form-group has-success" >
<label for="jekeg">Jenis Kegiatan</label>
<p><input class="form-control" type="text"  name="jekeg" placeholder="Masukan jenis kegiatan " style="width: 90%" ></p>
</div>

<div class="form-group has-success">
<label class="control-label" for="file1">Upload Foto kegiatan</label>
<input type="file" name="file1" id="file1" required class="form-control"  style="width: 30%" title="" ><button onclick="enable1()">+</button> 
</div>
<div class="form-group has-success">
<label class="control-label" for="file2">Upload Foto Kegiatan</label>
<input type="file" name="file2" id="file2"  required class="form-control"   style="width: 30%" title="" disabled="off"><button disabled="off" id="b1" onclick="enable2()">+</button>
</div>
<div class="form-group has-success">
<label class="control-label" for="file3">Upload Foto Kegiatan</label>
<input type="file" name="file3" id="file3" required class="form-control"   style="width: 30%" title="" disabled="off"><button disabled="off" id="b2" onclick="enable3()">+</button>
</div>
<div class="form-group has-success">
<label class="control-label" for="file4">Upload Foto Kegiatan</label>
<input type="file" name="file4" id="file4" required class="form-control"   style="width: 30%" title="" disabled="off"><button disabled="off" id="b3" onclick="enable4()">+</button>
</div>
<div class="form-group has-success">
<label class="control-label" for="file5">Upload Foto Kegiatan</label>
<input type="file" name="file5" id="file5" required class="form-control"   style="width: 30%" title="" disabled="off"><button disabled="off" id="b4" onclick="enable5()">+</button>
</div>
<div class="form-group has-success">
<label class="control-label" for="file6">Upload Foto kegiatan</label>
<input type="file" name="file6" id="file6" required class="form-control"   style="width: 30%" title="" disabled="off"><button disabled="off" id="b5" onclick="enable6()">+</button>
</div>
<div class="form-group has-success">
<label class="control-label" for="file7">Upload Foto Kegiatan</label>
<input type="file" name="file7" id="file7" required class="form-control"   style="width: 30%" title="" disabled="off"><button disabled="off" id="b6" onclick="enable7()">+</button>
</div>
<div class="form-group has-success">
<label class="control-label" for="file8">Upload Foto Kegiatan</label>
<input type="file" name="file8" id="file8" required class="form-control"   style="width: 30%" title="" disabled="off"><button disabled="off" id="b7" onclick="enable8()">+</button>
</div>
<div class="form-group has-success">
<label class="control-label" for="file9">Upload Foto Kegiatan</label>
<input type="file" name="file9" id="file9" required class="form-control"   style="width: 30%" title="" disabled="off"><button disabled="off" id="b8" onclick="enable9()">+</button>
</div>
<div class="form-group has-success" >
<label class="control-label" for="file10">Upload Foto Kegiatan</label>
<input type="file" name="file10" id="file10" required class="form-control"   style="width: 30%" title="" disabled="off"><button disabled="off" id="b9">+</button>
</div>

<div class="form-group has-success" >
<label class="control-label" for="infor">Informasi</label>
<textarea type="text" name="infor" id="infor" required class="form-control" placeholder="silahkan masukan informasi tentang kegiatan-kegiatan yang akan ditampilkan sebagai informasi pada halaman website ke pada publik........................................ " style="width: 100%" ></textarea> 
</div>

                         
                                <p><input hidden="true" type="text" name="tgl" value="<?php echo date("d-M-Y"); ?>" readonly></p>
                            </table>
                            <!-- Advanced Tables -->
                        </div>
                    </div>

<!-- TABLE DATA -->
    </section>
    <!-- /.content -->
    </div>
    <!-- end wrapper -->


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
<!-- //FUNGSI DISABLE -->

<script>
function enable1() {
    var b = document.getElementById("file2");
    var a = document.getElementById("b1");
    a.disabled = false;
    b.disabled = false;
}
function enable2() {
    var b = document.getElementById("file3");
    var a = document.getElementById("b2");
    a.disabled = false;
    b.disabled = false;
}
function enable3() {
    var b = document.getElementById("file4");
    var a = document.getElementById("b3");
    a.disabled = false;
    b.disabled = false;
}
function enable4() {
    var b = document.getElementById("file5");
    var a = document.getElementById("b4");
    a.disabled = false;
    b.disabled = false;
}
function enable5() {
    var b = document.getElementById("file6");
    var a = document.getElementById("b5");
    a.disabled = false;
    b.disabled = false;
}
function enable6() {
    var b = document.getElementById("file7");
    var a = document.getElementById("b6");
    a.disabled = false;
    b.disabled = false;
}
function enable7() {
    var b = document.getElementById("file8");
    var a = document.getElementById("b7");
    a.disabled = false;
    b.disabled = false;
}
function enable8() {
    var b = document.getElementById("file9");
    var a = document.getElementById("b8");
    a.disabled = false;
    b.disabled = false;
}

function enable9() {
    var b = document.getElementById("file10");
    var a = document.getElementById("b9");
    a.disabled = false;
    b.disabled = false;
}







</script>