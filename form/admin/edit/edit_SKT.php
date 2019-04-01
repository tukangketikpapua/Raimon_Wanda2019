<?php
//koneksi ke databases
$conn = mysqli_connect("localhost","root","","db_ormas");
$kds=$_GET["kd_SKT"];
$r=mysqli_query($conn,"SELECT * FROM tb_skt WHERE kd_SKT = '$kds';");

require '../../function/function_update.php';
if(isset($_POST["submit"]) ){
//cek apakah data berhasil di tambahkan
if(edit_SKT($_POST)> 0) {
    echo "<script>
            alert('data berhasil diedit');
            document.location.href = '../input/i_SKT.php';
            </script>";
} else {
    echo "<script>
            alert('data Gagal diedit');
            document.location.href = '../input/i_SKT.php';
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
                        <li><a href="../utama/m_utama.php"><i class="fa fa-sign-out fa-fw"></i>Log-Out</a>
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
                        <!-- <ul class="nav nav-second-level">
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
<!--  page-wrapper -->
<div id="page-wrapper">


    <div class="row">
        <!--  page header -->
        <div class="col-lg-12">
            <h1 class="page-header">EDIT DATA</h1>
        </div>
        <!-- end  page header -->
    </div>
    <div class="row">
        <div class="col-lg-12">
<?php if(mysqli_num_rows($r)){ ?>
<?php while($data=mysqli_fetch_array($r)){ ?>
            <!-- Advanced Tables -->
            <form action="" method="post" enctype="multipart/form-data">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <button type="submit" name="submit" class="btn btn-primary" >edit Data</button>
                        <button type="reset" name="batal" class="btn btn-primary" >Batalkan</button>

                    </div>                
                                    <div class="panel-body">
                                        <form action="" method="post" >
                                            <br>
                                            <div class="table-responsive">

                                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                    <tr>
                                                        <th width="76%" class="text-center">Surat Keterangan Terdaftar (SKT)</th>
                                                    </tr>
                                                    <thead>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                           <td>
<div class="form-group">
<label><u>kode SKT</u></label>
<input type="text" name="kd" id="kd" class="form-control" value="<?= $data ["kd_SKT"]; ?>"  readonly="true" style="width: 20%">
</div>

<div class="form-group">
<label for="normas">Nama Organisasi</label>
                                <p><select name="normas2" id="normas2" onchange="changeValue(this.value)" required="" class="form-control" style="width: 50%" >
                                                    <option>-pilih-</option>
                                                    <?php
                                                    $conn       = mysqli_connect("localhost","root","","db_ormas");
                                                    $result     = mysqli_query($conn,"select * from tb_daftar ORDER BY nama_organisasi ASC");    
                                                    $jsArray    = "var dtMhs = new Array();\n";        
                                                    while ($row = mysqli_fetch_array($result)) {    
                                                        echo '<option value="'. $row['nama_organisasi'] . '">' . $row['nama_organisasi'].'</option>';    
                                                        $jsArray .= "dtMhs['" . $row['nama_organisasi'] . "'] = {nama:'" . addslashes($row['jenis_organisasi']) . "',jrsn:'".addslashes($row['alamat']). "',jrsn2:'".addslashes($row['nama_organisasi'])."'};\n";    
                                                    }      
                                                    ?>
                                                </select></p>
                                                 <script type="text/javascript">    
    <?php echo $jsArray; ?>  
    function changeValue(nik){  
    document.getElementById('jormas').value = dtMhs[nik].nama;  
    document.getElementById('alamatsek').value = dtMhs[nik].jrsn; 
    document.getElementById('normas').value = dtMhs[nik].jrsn2;  
  

     
    };  
      </script>

<div class="form-group" hidden>
<label><u>nama ormas</u></label>
<input type="text" name="normas" id="normas" class="form-control" value="<?= $data ["nm_ormas"]; ?>"  readonly="true" style="width: 20%">
</div>

<div class="form-group">
<label><u>Jenis organisasi</u></label>
<input type="text" name="jormas" id="jormas" class="form-control" value="<?= $data ["jenis_ormas"]; ?>" readonly="true">
</div>

<div class="form-group">
<label><u>No Surat</u></label>
<input type="text" name="nosu" id="nosu" class="form-control" value="<?= $data ["no_surat"]; ?>"  style="width: 20%" >
</div>

<div class="form-group">
<label><u>tanggal surat</u></label>
<input type="text" name="tglsu" id="tglsu" class="form-control" value="<?= $data ["tgl_surat"]; ?>"  style="width: 20%" readonly="true">
</div>

<div class="form-group">
<label><u>Nama Ketua</u></label>
<input type="text" name="namket" id="namket" class="form-control" value="<?= $data ["nm_ketua"]; ?>"  style="width: 40%" >
</div>

<div class="form-group">
<label><u>Nama Sekretaris</u></label>
<input type="text" name="namsek" id="namsek" class="form-control" value="<?= $data ["nm_sekretaris"]; ?>"  style="width: 40%" >
</div>

<div class="form-group">
<label><u>Alamat sekretariat</u></label>
<input type="text" name="alamatsek" id="alamatsek" class="form-control" value="<?= $data ["alamat"]; ?>"  style="width: 40%" readonly="true" >
</div>

<div class="form-group">
<label><u>Masa Berlaku</u></label>
<input type="text" name="masa" id="masa" class="form-control" value="<?= $data ["masa_berlaku"]; ?>"  style="width: 40%" >
</div>

<div class="form-group">
<label><u>Telp</u></label>
<input type="text" name="tlp" id="tlp" class="form-control" value="<?= $data ["tlp"]; ?>"  style="width: 40%" >
</div>

<div class="form-group">
<label><u>tebusan kepada</u></label>
<input type="text" name="tebus" id="tebus" class="form-control" value="<?= $data ["tebusan_ke"]; ?>"  style="width: 40%" >
</div>

<div class="form-group">
<label><u>Keterangan</u></label>
<input type="text" name="ket" id="ket" class="form-control" value="<?= $data ["keterangan"]; ?>" >
</div>

</div>




</td>
</tr> 
</tbody>
</table>
</form>
<?php } ?>
<?php } ?>
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
