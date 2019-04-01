<?php 
error_reporting(0);
// //koneksi ke databases
require '../../function/function_autoN.php';
require '../../function/function_koneksi.php';
require '../../function/function_simpan.php';
if(isset($_POST["simpan"]) ){
//cek apakah data berhasil di tambahkan
if(simpan_baru($_POST)> 0) {
    echo "<script>
            alert('data berhasil disimpan');
            document.location.href = 'i_baru.php';
            </script>";
} else {
    echo "<script>
            alert('data Gagal disimpan');
            document.location.href = 'i_baru.php';
            </script>";
}
}
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Bakesbangpol</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="../../../template/default.css" rel="stylesheet" type="text/css" />
   <!-- Core CSS - Include with every page -->
    <link href="../../../assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="../../../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="../../../assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="../../../assets/css/style.css" rel="stylesheet" />
    <link href="../../../assets/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="../../../assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- modal login -->
    <link href="../../../assets/modal.css" rel="stylesheet" />
     <link href="../../../assets/dropdown.css" rel="stylesheet" type="text/css" />

</head>
<body>
<div id="header">
 
</div>
<!-- end #header -->
<div id="menu">
  <ul>
   <li class="first"><a href="../m_utama.php" accesskey="1">Home</a></li>
    <li><a href="../lihat/l_kegiatan.php" accesskey="2">Data</a></li>
    <li><a href="../lihat/l_panduan.php" accesskey="3">Informasi</a></li>
    <li><a href="../lihat/galeri.php" accesskey="4">Galery</a></li>
    <li><a href="#" accesskey="5" data-toggle="modal" data-target="#login-modal4">Tentang Kami</a></li>
  </ul>
</div>
<!-- end #menu -->
<div id="content">
 <div class="col-lg-10">
                     <!--    Context Classes  -->
                    <div class="panel panel-default">
                       
                        <div class="panel-heading">
                            Form Daftar Baru
                        </div>
  <form action="" method="post" enctype="multipart/form-data">

                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead style="font-size: 12px">
                                        <tr>
            <div hidden="true">
              <label for="tgl_daftar" >tgl daftar</label>
            <input  type="text" name="tgl_daftar" class="form-control" value="<?php echo date("d/m/y"); ?>" style="width: 10%" hidden="true">
          </div>
        </p>


            <label for="kd_berkas">id Berkas</label>
            <input type="text" name="kd_berkas" class="form-control" readonly="true" value="<?php echo $berkas;?>" style="width: 10%"></p>

             <label for="nik">NIK pengurus organisasi</label>
            <input type="text" name="nik" class="form-control" style="width: 20%" placeholder="Silahkan masukan NIK" autocomplete="off" required="true"></p>

            <label for="nama_organisasi">Nama organisasi</label>
            <input type="text" name="nama_organisasi" class="form-control" style="width: 100%" placeholder="Silahkan masukan nama organnisasi" autocomplete="off" required="true"></p>

            <label for="kd_organisasi">id Organisasi</label>
<p><select name="kd_organisasi" id="kd_organisasi" class="form-control" onchange="changeValue1(this.value)" required="" style="width: 20%">
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
document.getElementById('jenis_organisasi').value = dtMhs1[kd_organisasi].nama;  

};  
</script>      

            <label for="jenis_organisasi">jenis organisasi</label>
            <input type="text" name="jenis_organisasi"  id="jenis_organisasi" class="form-control" style="width: 100%;" placeholder="Silahkan pilih id organisasi" readonly="true" autocomplete="off" required="true"></p>

            <label for="kd_organisasi">id Distrik</label>
<p><select name="kd_organisasi" id="kd_organisasi" class="form-control" onchange="changeValue2(this.value)" required="" style="width: 20%">
<option value=0>-pilih-</option>
<?php
$conn       = mysqli_connect("localhost","root","","db_ormas");
$result1     = mysqli_query($conn,"select * from tb_distrik ORDER BY kd_distrik ASC");    
$jsArray    = "var dtMhs2 = new Array();\n";        
while ($row = mysqli_fetch_array($result1)) {    
echo '<option value="'. $row['kd_distrik'] . '">' . $row['kd_distrik'].'</option>';    
$jsArray .= "dtMhs2['" . $row['kd_distrik'] . "'] = {nama:'" . addslashes($row['nm_distrik']) . "',jrsn:'".addslashes($row['alamat'])."'};\n";    
}      
?>
</select></p>
<script type="text/javascript">    
<?php echo $jsArray; ?>  
function changeValue2(kd_organisasi){  
document.getElementById('nm_distrik').value = dtMhs2[kd_organisasi].nama;
document.getElementById('alamat').value     = dtMhs2[kd_organisasi].jrsn;   

};  
</script>      

            <label for="nm_distrik">Nama Distrik</label>
            <input type="text" name="nm_distrik"  id="nm_distrik" class="form-control" style="width: 100%;" placeholder="Silahkan pilih id organisasi" readonly="true" autocomplete="off" required="true"></p>

            <label for="alamat">Alamat</label>
            <input type="text" name="alamat"  id="alamat" class="form-control" style="width: 100%;" placeholder="Silahkan pilih id organisasi" readonly="true" autocomplete="off" required="true"></p>

<p>&nbsp;</p>
<p>&nbsp;</p>
                        <div class="panel-heading">
                        <button type="submit" name="simpan" class="btn btn-primary" >Simpan Data</button>
                        <button type="reset" class="btn btn-success" >Batal</button>
                    </div> 
                                                                    <br>
                                                                    <br>
                                                                    <ul>
                                                                        catatan penting !
                                                                        <li style="color: red">Pemeriksaan berkas persyaratan akan di periksa hingga 2 tahap.</li>
                                                                        <li style="color: red" >jika anda telah mengupload seluruh berkas persyaratan maka anda silahkan cek pemberitahuan kelengkapan berkas tahap I pada 6 hari setelah berkas di upload dan di periksa.</li>
                                                                        <li style="color: red">jika berkas belum lengkap maka anda akan diberitahukan.</li>
                                                                        <li style="color: red">Cek informasi pada Info terdaftar.</li>
                                                                    </ul>

                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--  end  Context Classes  -->
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
  <div id="links">
    <ul>
      <li>
        <h2>Upload berkas</h2>
        <ul style="font-size: 12px">
<div class="form-group has-success">
<label class="control-label" for="file">Berkas 1</label>
<input type="file" name="file1" id="file1" class="form-control" style="width: 60%" required >
</div>

<div class="form-group has-success">
<label class="control-label" for="file">Berkas 2</label>
<input type="file" name="file2" id="file2" class="form-control" style="width: 60%" required >
</div>
<div class="form-group has-success">
<label class="control-label" for="file">Berkas 3</label>
<input type="file" name="file3" id="file3" class="form-control" style="width: 60%" required >
</div>

<div class="form-group has-success">
<label class="control-label" for="file">Berkas 4</label>
<input type="file" name="file4" id="file4" class="form-control"style="width: 60%" required >
</div>
<div class="form-group has-success">
<label class="control-label" for="file">Berkas 5</label>
<input type="file" name="file5" id="file5" class="form-control"style="width: 60%" required >
</div>

<div class="form-group has-success">
<label class="control-label" for="file">Berkas 6</label>
<input type="file" name="file6" id="file6" class="form-control"style="width: 60%" required >
</div>
<div class="form-group has-success">
<label class="control-label" for="file">Berkas 7</label>
<input type="file" name="file7" id="file7" class="form-control"style="width: 60%" required >
</div>

<div class="form-group has-success">
<label class="control-label" for="file">Berkas 8</label>
<input type="file" name="file8" id="file8" class="form-control"style="width: 60%" required >
</div>
<div class="form-group has-success">
<label class="control-label" for="file">Berkas 9</label>
<input type="file" name="file9" id="file9" class="form-control"style="width: 60%" required >
</div>

<div class="form-group has-success">
<label class="control-label" for="file">Berkas 10</label>
<input type="file" name="file10" id="file10" class="form-control"style="width: 60%" required >
</div>

</form>
     </ul>
      </li>

    </ul>
  </div>
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
                                    <!-- Page-Level Plugin Scripts-->
                                    <script src="../../../assets/plugins/dataTables/jquery.dataTables.js"></script>
                                    <script src="../../../assets/plugins/dataTables/dataTables.bootstrap.js"></script>
                                    <script>
                                        $(document).ready(function () {
                                            $('#dataTables-example').dataTable();
                                        });
                                    </script>
</html>


<!-- modal login -->


<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
       <div class="modal-dialog">
    <div class="loginmodal-container">
     <h1>Silahkan Masuk</h1><br>
      <form method="post" action="../../login/proses.php">
            <div class="form-group has-success">
              <input type="text" class="form-control" name="Username" placeholder="Username">
            </div>

            <div class="form-group has-success">
              <input type="password" class="form-control" name="Password" placeholder="Password">
            </div>
            
          <div class="form-group has-success">
              <select type="text" name="level_user" class="form-control">
            <option>- pilih hak akses -</option>
            <option>Kepala</option>
            <option>Admin</option>
            <option>User</option></select>
          </div>
            <p></p>
     <input type="submit" name="login" class="login loginmodal-submit" value="Login">

      </form>
    </div>
   </div>
    </div>
    <!-- end modal login -->




    <!-- modal tentang kami -->

<div class="modal fade" id="login-modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
       <div class="modal-dialog">
    <div class="loginmodal-container">
     <h1>Tentang Kami</h1><br>
    <div class="form-group">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" ><a href="../lihat/tupoksi.php">Tujuan Pokok dan Fungsi
                                                </a></label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"><a href="../lihat/struktur.php">Struktur Organisasi</a>
                                                </label>
                                            </div>
                                        </div>
    </div>
   </div>
    </div>
    <!-- end modal tentang kami --> 