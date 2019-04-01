<?php
error_reporting(0);
//FUNGSI SIMPAN DATA --> 
// //koneksi ke databases
require '../../function/function_disable.php';
require '../../function/function_autoN.php';
require '../../function/function_koneksi.php';
require '../../function/function_simpan.php';
if(isset($_POST["submit"]) ){
//cek apakah data berhasil di tambahkan
if(simpan_baru($_POST)> 0) {
    echo "<script>
            alert('data berhasil disimpan');
            document.location.href = '';
            </script>";
} else {
    echo "<script>
            alert('data Gagal disimpan');
            document.location.href = '';
            </script>";
}
}
 ?>
<?php 
 
$conn =mysqli_connect("localhost","root","","db_ormas");
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
                            <div class="user-section-inner">
                                <img src="../../../img/user.jpg" alt="">
                            </div>
                            <div class="user-info">
                                <div><strong>UTAMA</strong></div>
                                <div class="user-text-online">

                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li class="sidebar-search">
                    </li>
                    </li>
                    <li class="selected">
                        <a href="../f_utama.php"><i class="fa fa-home"></i>Home</a>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Informasi<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="../lihat/data_organisasi.php" style="color: yellow">- Data Organisasi</a>
                            </li>
                            <li>
                                <a href="../lihat/data_kegiatan.php" style="color: yellow">- Kegiatan organisasi</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                     
                    <li>
                        <a href="#"><i class="fa fa-edit"></i>Pendaftaran<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="../lihat/dt_panduan.php" style="color: yellow">- Panduan Pendaftaran</a>
                            </li>
                            <li>
                                <a href="../lihat/dt_persyaratan.php" style="color: yellow">- Persyaratan Pendaftaran</a>
                            </li>
                            <li>
                                <a href="../lihat/data_kegiatan.php" style="color: yellow">- Data Organisasi</a>
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
            <form action="" method="post" enctype="multipart/form-data">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <button  name="new" onclick="enable()" class="btn btn-warning" >Baru</button>
                        <button type="submit" name="submit" class="btn btn-primary" >Simpan Data</button>
                        <button type="reset" onclick="disable()"  class="btn btn-success" >Batal</button>
                    </div>                
                                    <div class="panel-body">
                                        <form action="" method="post" enctype="multipart/form-data">
                                            <br>
                                            <div class="table-responsive">

                                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                    <tr>
                                                        <th width="76%" class="text-center">Berkas Persyaratan</th>
                                                        <th width="90%" class="text-center">Upload</th>
                                                    </tr>
                                                    <thead>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <label for="nama_ormas">kd Daftar</label>
                                                                <p><input type="text" size="10%" name="kd_berkas" value="<?php echo $berkas;?>"   readonly="true">
                                                                <input type="text" name="tgl_daftar"  id="tgl_daftar" size="9%"  value="<?php echo date("d/m/y"); ?>" hidden  > 
                                                            </p>
                                                                <label for="nm_organisasi">Nama Organisasi</label>
                                                                <p><input type="text" size="65%" name="nm_organisasi" id="nm_organisasi"  value="" placeholder="Silahkan masukan nama organisasi " autofocus="true" autocomplete="off" style="width: 100%"  required disabled="true"></p>
<label for="kd_organisasi">kd Organisasi</label>
<p><select name="kd_organisasi" id="kd_organisasi" onchange="changeValue1(this.value)" required="" >
<option value=0>-pilih-</option>
<?php
$conn       = mysqli_connect("localhost","root","","db_ormas");
$result1     = mysqli_query($conn,"select * from tb_organisasi ORDER BY kd_organisasi ASC");    
$jsArray    = "var dtMhs1 = new Array();\n";        
while ($row = mysqli_fetch_array($result1)) {    
echo '<option value="'. $row['kd_organisasi'] . '">' . $row['kd_organisasi'].'</option>';    
$jsArray .= "dtMhs1['" . $row['kd_organisasi'] . "'] = {nama:'" . addslashes($row['jenis_organisasi']) ."'};\n";    
}      
?>
</select></p>
<script type="text/javascript">    
<?php echo $jsArray; ?>  
function changeValue1(kd_organisasi){  
document.getElementById('j_ormas').value = dtMhs1[kd_organisasi].nama;  

};  
</script> 
<label for="j_ormas">Jenis Organisasi</label>
<p>
<input type="text" size="68%" name="jenis_organisasi" id="j_ormas" readonly="true"  style="width: 30%">
</p>






<p>
<label for="nama_ormas">kd Distrik</label>
<p><select   id="distrik" onchange="changeValue2(this.value)" required="" >
<option value=0>-pilih-</option>
<?php
$conn       = mysqli_connect("localhost","root","","db_ormas");
$result2     = mysqli_query($conn,"select * from tb_distrik ORDER BY kd_distrik ASC");    
$jsArray    = "var dtMhs2 = new Array();\n";        
while ($row = mysqli_fetch_array($result2)) {    
echo '<option value="'. $row['kd_distrik'] . '">' . $row['kd_distrik'].'</option>';    
$jsArray .= "dtMhs2['" . $row['kd_distrik'] . "'] = {nama:'" . addslashes($row['nm_distrik']) . "',jrsn:'".addslashes($row['alamat'])."'};\n";    
}      
?>
</select></p>
<script type="text/javascript">    
<?php echo $jsArray; ?>  
function changeValue2(distrik){  
document.getElementById('nm_distrik').value = dtMhs2[distrik].nama;  
document.getElementById('alamat').value = dtMhs2[distrik].jrsn; 

};  
</script> 

<p>
<label for="nm_distrik">Distrik</label>
<input type="text" size="68%" name="distrik" id="nm_distrik" readonly="true"  style="width: 30%">
</p>
<p>
<label for="nm_distrik">Alamat</label>
<input type="text" size="68%" name="alamat"     id="alamat"     readonly="true"   style="width: 100%">
</p>

                                                                                                                        
</p>
<label for="nik_ketua">NIK Ketua Organisasi</label>
<p>
<input type="number" size="68%" name="nik_ketua" id="NIK"  value="" placeholder="Silahkan masukan NIK " autofocus="true" autocomplete="off" disabled="true" required style="width: 30%">
<div class="infonik">*dapat ketikan nomor pada kolom NIK</div>
</p>
 

                               

                                                                    <br>
                                                                    <br>
                                                                    <ul>
                                                                        catatan penting !
                                                                        <li style="color: red">Pemeriksaan berkas persyaratan akan di periksa hingga 2 tahap.</li>
                                                                        <li style="color: red" >jika anda telah mengupload seluruh berkas persyaratan maka anda silahkan cek pemberitahuan kelengkapan berkas tahap I pada 6 hari setelah berkas di upload dan di periksa.</li>
                                                                        <li style="color: red">jika berkas belum lengkap maka anda akan diberitahukan.</li>
                                                                        <li style="color: red">Cek informasi pada icon pesan pada sudut kanan atas website.</li>
                                                                    </ul>
                                                                </td>
<td>
<div class="form-group has-success">
    <label class="control-label" for="file">Berkas 1</label>
    <input type="file" name="file1" id="file1"   required class="form-control"  disabled="off" style="width: 90%" >
</div>
<div class="form-group has-success">
    <label class="control-label" for="inputSuccess">Berkas 2</label>
    <input type="file" name="file2" id="file2" disabled="true" required class="form-control"  style="width: 90%" title="Akta Pendirian yang disahkan Notaris" value="data kosong">
</div>
<div class="form-group has-success">
    <label class="control-label" for="inputSuccess">Berkas 3</label>
    <input type="file" name="file3" id="file3" disabled="true" required class="form-control"  
</div>
<div class="form-group has-success">
    <label class="control-label" for="inputSuccess">Berkas 4</label>
    <input type="file" name="file4" id="file4" disabled="true" required class="form-control"   style="width: 90%" title="SK susunan Pengurus yang sesuai dengan AD ART" >
</div>
<div class="form-group has-success">
    <label class="control-label" for="inputSuccess">Berkas 5</label>
    <input type="file" name="file5" id="file5" disabled="true" required class="form-control"   style="width: 90%" title="Biodata pengurus organisasi">
</div>
<div class="form-group has-success">
    <label class="control-label" for="inputSuccess">Berkas 6</label>
    <input type="file" name="file6" id="file6" disabled="true" required class="form-control"   style="width: 90%" title="Pas photo 4x6 terbaru">
</div>
<div class="form-group has-success">
    <label class="control-label" for="inputSuccess">Berkas 7</label>
    <input type="file" name="file7" id="file7" disabled="true" required class="form-control"   style="width: 90%" title="fotocopy KTP ketua pengurus organisasi">
</div>
<div class="form-group has-success">
    <label class="control-label" for="inputSuccess">Berkas 8</label>
    <input type="file" name="file8" id="file8" disabled="true" required class="form-control"   style="width: 90%" title="Surat keterangan domisili organisasi">
</div>
<div class="form-group has-success">
    <label class="control-label" for="inputSuccess">Berkas 9</label>
    <input type="file" name="file9" id="file9" disabled="true" required class="form-control"  style="width: 90%" title="NPWP organisasi">
</div>
<div class="form-group has-success">
    <label class="control-label" for="inputSuccess">Berkas 10</label>
    <input type="file" name="file10" id="file10" disabled="true" required class="form-control"  style="width: 90%" title="Surat pernyataan tidak terjadi konflik kepengurusan">
</div>
                                                                </td>
                                                            </tr> 
                                                        </tbody>
                                                    </table>
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
                    <script src="../../../assets/plugins/morris/raphael-2.1.0.min.js"></script>
                    <script src="../../../assets/plugins/morris/morris.js"></script>
                    <script src="../../../assets/scripts/dashboard-demo.js"></script>

                </body>
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
