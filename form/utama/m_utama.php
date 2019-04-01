<?php 
$conn=mysqli_connect('localhost','root','','db_ormas');
$organisasi =mysqli_query($conn," SELECT * FROM biodata GROUP BY nama_ormas"); 
$akun =mysqli_query($conn," SELECT * FROM tb_akun limit 5 "); 
$biodata =mysqli_query($conn," SELECT * FROM biodata GROUP BY nama_ormas");

 ?>


 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <style >
 .level{
  width: 100%;
  height: 80%;

 }   


 </style>

<title>Bakesbangpol</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="../../assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
<link href="../../template/default.css" rel="stylesheet" type="text/css" />
      <!-- modal login -->
 <link href="../../assets/modal.css" rel="stylesheet" />
 <link href="../../assets/dropdown.css" rel="stylesheet" type="text/css" />


</head>
<body>
<div id="header">
 
</div>
<!-- end #header -->
<div id="menu">
  <ul>
    <li class="first"><a href="m_utama.php" accesskey="1">Home</a></li>
    <li><a href="lihat/l_kegiatan.php" accesskey="2">Data</a></li>
    <li><a href="lihat/l_panduan.php" accesskey="3">Informasi</a></li>
    <li><a href="lihat/galeri.php" accesskey="4">Galery</a></li>
    <li><a href="#" accesskey="4" >cek Info terdaftar</a>
      <ul>
         <li><a href="#" accesskey="5" data-toggle="modal" data-target="#login-modal1">Registrasi</a></li>
         <li><a href="#" accesskey="5" data-toggle="modal" data-target="#login-modal2">Info Terdaftar</a></li>
         <li><a href="#" accesskey="5" data-toggle="modal" data-target="#login-modal3">Daftar Baru</a></li>
      </ul>
    </li>
    <li><a href="#" accesskey="5" data-toggle="modal" data-target="#login-modal4">Tentang Kami</a></li>
  </ul>
</div>
<!-- end #menu -->
<div id="content">
  <div id="posts">
    <div class="post">
      <h2 class="title">Selamat datang di website Badan Kesatuan bangsa dan politik kota jayapura (BAKESBANGPOL) kota jayapura.</h2>
      <div class="story">
        <p>website <strong>BAKESBANGPOL</strong> menyajikan informasi kegiatan organisasi, data organisasi , foto kegiatan organisasi dan grafik jumlah pendaftar (organisasi) pada website BAKESBANGPOL kota jayapura.  <em><strong>Enjoy :)</strong></em></p>
      </div>
    </div>
<p>&nbsp;</p>
<p>&nbsp;</p>
 

    <div class="post">
<?php if(mysqli_num_rows($biodata)){ ?>
<?php while($row=mysqli_fetch_array($biodata)){ ?>
      <h2 class="title"> <?= $row ["nama_ormas"]; ?></h2>
      <div class="story">
        <p><strong></strong> <?= $row ["info"]; ?><a href="lihat/informasi.php?nama_ormas=<?= $row ["nama_ormas"]; ?>"><em><strong> Lihat..... :)</strong></em></p></a> 
      </div>
<?php } ?>
<?php } ?>
    </div>
  </div>

  <!-- end #posts -->
  <div id="links" >
    <ul>
      <li>
        <h2 style="color:#6699CC">organisasi</h2>
        --------------------------------------
    <?php if(mysqli_num_rows($organisasi)){ ?>
    <?php while($row=mysqli_fetch_array($organisasi)){ ?>
 
        
            <li ><a href="lihat/biodata.php?nama_ormas=<?= $row ["nama_ormas"]; ?>"><?= $row ["nama_ormas"]; ?></a></li>
        
          <p>-----------------------------------------</p>
 
    <?php } ?>
    <?php } ?> 
      </li>
      <li>
        <h2 style="color:#6699CC">Info terdaftar</h2>
        <p>------------------------------------------</p>
<?php if(mysqli_num_rows($akun)){ ?>
<?php while($row=mysqli_fetch_array($akun)){ ?>
         
          <li><a href="#"  style="color:#FF0000" onclick="notifyme('Pesan Informasi Masuk !','Anda Mendapat info baru silahkan cek informasi dengan menginput NIK pengurus organisasi ! Terima Kasih. ')" ><?= $row ["nama_organisasi"]; ?></a></li>
          <p >------------------------------------------</p>
        
<?php } ?>
<?php } ?> 

   <button class="btn btn-danger" data-toggle="modal" data-target="#login-modal">Login Akun</button> 
  </div>
  <!-- end #links -->
  <div style="clear: both;">&nbsp;</div>
                      <p>&nbsp;</p>
                    <p>&nbsp;</p>
                       <h2><marquee>Selamat datang di website kesbangpol kota jayapura</marquee></h2>
</div>
<!-- end #content -->
<div id="footer">
    <p id="legal">2019 Biak. Design By <a href="">@PapuaKoding</a></p>
</div>
<!-- end #footer -->
</body>

<script src="../../assets/plugins/jquery-1.10.2.js"></script>
<script src="../../assets/plugins/bootstrap/bootstrap.min.js"></script>
                                  
                        
                           
                   


<!-- modal login -->

<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
       <div class="modal-dialog">
    <div class="loginmodal-container">
     <h1>Silahkan Masuk</h1><br>
      <form method="post" action="../login/proses.php">
            <div class="form-group has-success">
              <input type="text" class="form-control" name="Username" placeholder="Username" autofocus required>
            </div>

            <div class="form-group has-success">
              <input type="password" class="form-control" name="Password" placeholder="Password" required>
            </div>
            
          <div class="form-group has-success">
              <select type="text" name="level_user" class="form-control" required>
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

<!-- modal bukti informasi -->

<div class="modal fade" id="login-modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
       <div class="modal-dialog">
    <div class="loginmodal-container">
     <h1>Silahkan Masuk NIK pengurus organisasi</h1><br>
      <form method="post" action="lihat/info_daftar.php">
            <div class="form-group has-success">
              <input type="text" class="form-control" name="carisearch" id="cari" placeholder="Masukan NIK pengurus" autocomplete="off" autofocus required>
            </div>

     <input type="submit" name="cari" class="login loginmodal-submit" value="Cek Info">

      </form>
    </div>
   </div>
    </div>
    <!-- end modal login --> 

<!-- modal login user-->

<div class="modal fade" id="login-modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
       <div class="modal-dialog">
    <div class="loginmodal-container">
     <h1>Silahkan Masuk</h1><br>
      <form method="post" action="../login/proses2.php">
            <div class="form-group has-success">
              <input type="text" class="form-control" autofocus  name="Username" placeholder="Username" autocomplete="off" required>
            </div>

            <div class="form-group has-success">
              <input type="password" class="form-control" name="Password" placeholder="Password" required>
            </div>
            <p></p>
     <input type="submit" name="login_user" class="login loginmodal-submit" value="Login">

      </form>
    </div>
   </div>
    </div>
    <!-- end modal login user --> 


    <!-- modal tentang kami -->

<div class="modal fade" id="login-modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
       <div class="modal-dialog">
    <div class="loginmodal-container">
     <h1>Tentang Kami</h1><br>
    <div class="form-group">
                                            <div class="radio" style="font-size: 14px">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" ><a href="lihat/tupoksi.php">Tujuan Pokok dan Fungsi
                                                </a></label>
                                            </div>
                                            <div class="radio" style="font-size: 14px">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"><a href="lihat/struktur.php">Struktur Organisasi</a>
                                                </label>
                                            </div><br>
                                            <a href=""  data-toggle="modal" data-target="#login-modal5"><h1>Info Programmer.</h1></a>
                                        </div>
    </div>
   </div>
    </div>
    <!-- end modal tentang kami --> 



    <!-- Biodata Programmer-->

<div class="modal fade" id="login-modal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="loginmodal-container">
     <h1>Tentang Pembuat</h1><br>
      <div class="form-group"  style="font-size: 16px;">
          <table width="264" border="0">
  <tr>
    <td height="71" colspan="2"><img src="bio.jpg" width="45%"></td>
  </tr>
  <tr>
    <td width="114">Nama Lengkap</td>
    <td width="134">Marlon Wanggai</td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>Kompleks DPU Biak</td>
  </tr>
  <tr>
    <td>Jurusan</td>
    <td>Teknik Informatika</td>
  </tr>
  <tr>
    <td>Fakultas</td>
    <td>FIKOM</td>
  </tr>
  <tr>
    <td>Lulusan</td>
    <td>Universitas Sains dan Teknologi Jayapura</td>
  </tr>
  <tr>
    <th colspan="2" bgcolor="#6699FF"><div align="center">Info Kontak</div></th>
  </tr>
  <tr>
    <td>WA</td>
    <td>085254097520</td>
  </tr>
  <tr>
    <td>Facebook</td>
    <td>Marlon Wanggai</td>
  </tr>
  <tr>
    <td>Instagram</td>
    <td>Marlonwanggai</td>
  </tr>
</table>
      </div>
    </div>
  </div>
</div>
    <!-- end modal tentang kami --> 




<!-- modal registrasi -->

<div class="modal fade" id="login-modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
       <div class="modal-dialog">
    <div class="loginmodal-container">
     <h1>Silahkan melakukan Regisrasi !</h1><br>
     <p>&nbsp;</p>
      <form method="post" action="">
            <div class="form-group has-success">
              <label for="nik" style="color:#0066FF ">NIK PENGURUS</label>
              <input type="text" class="form-control" name="nik" id="nik" placeholder="Masukan NIK pengurus" autocomplete="off" autofocus required>
            </div>
            <div class="form-group has-success">
              <label for="nama" style="color:#0066FF ">NAMA ORGANISASI</label>
              <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan Nama organisasi" autocomplete="off" autofocus required>
            </div>
            <div class="form-group has-success">
              <label for="tlp" style="color:#0066FF ">NO.TELP</label>
              <input type="text" class="form-control" name="tlp" id="tlp" placeholder="Masukan No telp/Hp" autocomplete="off" autofocus required>
            </div>
            <div class="form-group has-success">
              <label for="email" style="color:#0066FF ">EMAIL</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Masukan Email anda/example@gmail.com" autocomplete="off" autofocus required>
            </div>           

     <input type="submit" name="cari" class="login loginmodal-submit" value="Cek Info">

      </form>
    </div>
   </div>
    </div>
    <!-- end Registrasi --> 


    <!-- PESAN INFORMASI -->

<!-- NOTIFIKASI PESAN MASUK SAAT DIKLIK -->
<script type="text/javascript" >
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
   icon:'photo/1h.png'
});
if(redirect_onclick){
Notification.onclick=function(){
  window.location.href=redirect_onclick;
}
}
}
}
</script>
