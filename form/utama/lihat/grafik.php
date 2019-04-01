<?php 
require'../../function/function_koneksi.php';
$result =mysqli_query($conn," SELECT * FROM tb_ormas "); 

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Bakesbangpol</title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link href="../../../assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
  <link href="../../../template/default.css" rel="stylesheet" type="text/css" />
  <!-- Core CSS - Include with every page -->

  <link href="../../../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="../../../assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
  <link href="../../../assets/css/style.css" rel="stylesheet" />
  <link href="../../../assets/css/main-style.css" rel="stylesheet" />
  <!-- Page-Level CSS -->
  <link href="../../../assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />

  <!-- GRAFIK -->
  <script type="text/javascript" src="../../../chartjs/Chart.js"></script>
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
    <li><a href="l_kegiatan.php" accesskey="2">Data</a></li>
    <li><a href="l_panduan.php" accesskey="3">Informasi</a></li>
    <li><a href="galeri.php" accesskey="4">Galery</a></li>
    <li><a href="#" accesskey="5" data-toggle="modal" data-target="#login-modal4">Tentang Kami</a></li>
    </ul>
  </div>
  <!-- end #menu -->
  <div id="content">
    <div class="col-lg-10">
      <!--    Context Classes  -->
      <div class="panel panel-default">

        <div class="panel-heading" style="font-size: 15px">
          Grafik jumlah daftar organisasi per tahun
        </div>

        <br>


        <?php 
        $koneksi = mysqli_connect("localhost","root","","db_ormas");
        ?>

        <div style="width: 40%;margin: 0px auto;">
          <canvas id="myChart"></canvas>
        </div>

        <br/>
        <br/>


        <script>
          var ctx = document.getElementById("myChart").getContext('2d');
          var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
              labels: [ "2015" , "2016" , "2017" , "2018" , "2019" ],
              datasets: [{
                label: '',
                data: [
                <?php 
                $jumlah_bumil = mysqli_query($koneksi,"select * from tb_daftar where tgl_daftar LIKE '%15%'  ");
                echo mysqli_num_rows($jumlah_bumil);
                ?>,
                <?php 
                $jumlah_busu = mysqli_query($koneksi,"select * from tb_daftar where tgl_daftar LIKE '%16%'    ");
                echo mysqli_num_rows($jumlah_busu);
                ?>,
                <?php 
                $jumlah_bayi = mysqli_query($koneksi,"select * from tb_daftar where tgl_daftar LIKE '%17%'   ");
                echo mysqli_num_rows($jumlah_bayi);
                ?>,
                <?php 
                $jumlah_batita = mysqli_query($koneksi,"select * from tb_daftar where tgl_daftar LIKE '%18%'   ");
                echo mysqli_num_rows($jumlah_batita);
                ?>,
                <?php 
                $jumlah_balita = mysqli_query($koneksi,"select * from tb_daftar where tgl_daftar LIKE '%19%'   ");
                echo mysqli_num_rows($jumlah_balita);
                ?>







                ],
                backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(52, 122, 192, 0.2)'
                ],
                borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(52, 122, 192, 1)'
                ],
                borderWidth: 1
              }]
            },
            options: {
              scales: {
                yAxes: [{
                  ticks: {
                    beginAtZero:true
                  }
                }]
              }
            }
          });
        </script>
        <?php 
        $koneksi = mysqli_connect("localhost","root","","db_ormas");
        ?>
        <div style="font-size: 13px">
          <p>Grafik diatas menunjukan bahwa jumlah pendaftaran organisasi pada Badan Kesatuan Bangsa dan Politik kota jayapura mulai dari tahun 2015 hingga 2019, dengan angka sebagai berikut :</p>
        </div>
        <div class="table-responsive">
                                <table class="table">
        <table class="table">
                                    <thead style="font-size: 12px,text-align: center" >
                                        <tr>
                                            <th style="width: 5%"></th>
                                            <th style="width: 5%">Tahun 2015</th>
                                            <th style="width: 5%">Tahun 2016</th>
                                            <th style="width: 5%">Tahun 2017</th>
                                            <th style="width: 5%">Tahun 2018</th>
                                            <th style="width: 5%">Tahun 2019</th>
                                        </tr>
                                    </thead>
                                     <?php $i = 1; ?>
                                    <tbody style="font-size: 12px">
                                        <tr class="success" style="text-align: center">
                                          <td class=>jumlah pendaftaran / tahun</td>
<td class=><?php 
$jumlah_bumil = mysqli_query($koneksi,"select * from tb_daftar where tgl_daftar LIKE '%15%'  ");
echo mysqli_num_rows($jumlah_bumil);
?></td>

<td class=><?php 
$jumlah_bumil = mysqli_query($koneksi,"select * from tb_daftar where tgl_daftar LIKE '%16%'  ");
echo mysqli_num_rows($jumlah_bumil);
?></td>

<td class=><?php 
$jumlah_bumil = mysqli_query($koneksi,"select * from tb_daftar where tgl_daftar LIKE '%17%'  ");
echo mysqli_num_rows($jumlah_bumil);
?></td>

<td class=><?php 
$jumlah_bumil = mysqli_query($koneksi,"select * from tb_daftar where tgl_daftar LIKE '%18%'  ");
echo mysqli_num_rows($jumlah_bumil);
?></td>

<td class=><?php 
$jumlah_bumil = mysqli_query($koneksi,"select * from tb_daftar where tgl_daftar LIKE '%19%'  ");
echo mysqli_num_rows($jumlah_bumil);
?></td>


                               
                                        </tr>
                                    </tbody> 
                                </table>

      </div>
    </div>
      <!--  end  Context Classes  -->
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

            <!--    Context Classes  -->
      <div class="panel panel-default">

        <div class="panel-heading" style="font-size: 15px">
          Grafik jumlah kegiatan organisasi per tahun
        </div>

        <br>


        <?php 
        $koneksi = mysqli_connect("localhost","root","","db_ormas");
        ?>

        <div style="width: 40%;margin: 0px auto;">
          <canvas id="myChart2"></canvas>
        </div>

        <br/>
        <br/>


        <script>
          var ctx = document.getElementById("myChart2").getContext('2d');
          var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
              labels: [ "2015" , "2016" , "2017" , "2018" , "2019" ],
              datasets: [{
                label: '',
                data: [
                <?php 
                $jumlah_bumil = mysqli_query($koneksi,"select * from tb_ormas where tanggal_upload LIKE '%15%'  ");
                echo mysqli_num_rows($jumlah_bumil);
                ?>,
                <?php 
                $jumlah_busu = mysqli_query($koneksi,"select * from tb_ormas where tanggal_upload LIKE '%16%'    ");
                echo mysqli_num_rows($jumlah_busu);
                ?>,
                <?php 
                $jumlah_bayi = mysqli_query($koneksi,"select * from tb_ormas where tanggal_upload LIKE '%17%'   ");
                echo mysqli_num_rows($jumlah_bayi);
                ?>,
                <?php 
                $jumlah_batita = mysqli_query($koneksi,"select * from tb_ormas where tanggal_upload LIKE '%18%'   ");
                echo mysqli_num_rows($jumlah_batita);
                ?>,
                <?php 
                $jumlah_balita = mysqli_query($koneksi,"select * from tb_ormas where tanggal_upload LIKE '%19%'   ");
                echo mysqli_num_rows($jumlah_balita);
                ?>







                ],
                backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(52, 122, 192, 0.2)'
                ],
                borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(52, 122, 192, 1)'
                ],
                borderWidth: 1
              }]
            },
            options: {
              scales: {
                yAxes: [{
                  ticks: {
                    beginAtZero:true
                  }
                }]
              }
            }
          });
        </script>
        <?php 
        $koneksi = mysqli_connect("localhost","root","","db_ormas");
        ?>
        <div style="font-size: 13px">
          <p>Grafik diatas menunjukan bahwa jumlah organisasi yang telah melakukan kegiatan mulai dari tahun 2015 hingga 2019, dengan angka sebagai berikut :</p>
        </div>
        <div class="table-responsive">
                                <table class="table">
        <table class="table">
                                    <thead style="font-size: 12px,text-align: center" >
                                        <tr>
                                            <th style="width: 5%"></th>
                                            <th style="width: 5%">Tahun 2015</th>
                                            <th style="width: 5%">Tahun 2016</th>
                                            <th style="width: 5%">Tahun 2017</th>
                                            <th style="width: 5%">Tahun 2018</th>
                                            <th style="width: 5%">Tahun 2019</th>
                                        </tr>
                                    </thead>
                                     <?php $i = 1; ?>
                                    <tbody style="font-size: 12px">
                                        <tr class="success" style="text-align: center">
                                          <td class=>jumlah pendaftaran / tahun</td>
<td class=><?php 
$jumlah_bumil = mysqli_query($koneksi,"select * from tb_daftar where tgl_daftar LIKE '%15%'  ");
echo mysqli_num_rows($jumlah_bumil);
?></td>

<td class=><?php 
$jumlah_bumil = mysqli_query($koneksi,"select * from tb_daftar where tgl_daftar LIKE '%16%'  ");
echo mysqli_num_rows($jumlah_bumil);
?></td>

<td class=><?php 
$jumlah_bumil = mysqli_query($koneksi,"select * from tb_daftar where tgl_daftar LIKE '%17%'  ");
echo mysqli_num_rows($jumlah_bumil);
?></td>

<td class=><?php 
$jumlah_bumil = mysqli_query($koneksi,"select * from tb_daftar where tgl_daftar LIKE '%18%'  ");
echo mysqli_num_rows($jumlah_bumil);
?></td>

<td class=><?php 
$jumlah_bumil = mysqli_query($koneksi,"select * from tb_daftar where tgl_daftar LIKE '%19%'  ");
echo mysqli_num_rows($jumlah_bumil);
?></td>


                               
                                        </tr>
                                    </tbody> 
                                </table>

      </div>
    </div>
      <!--  end  Context Classes  -->
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <h2><marquee>Selamat datang di website kesbangpol kota jayapura</marquee></h2>
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
          <h2>Data</h2>
          <ul style="font-size: 12px">
            <li><a href="l_kegiatan.php">Data kegiatan organisasi</a> </li>
          <li><a href="l_organisasi.php">Data Organisasi</a></li>
          <li><a href="grafik.php">Grafik</a></li>
          </ul>
        </li>
        <li>
          <button class="btn btn-danger" data-toggle="modal" data-target="#login-modal">Login Akun</button>
          <ul>

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

<!-- Flot Charts JavaScript -->
<script src="../../../vendor/flot/excanvas.min.js"></script>
<script src="../../../vendor/flot/jquery.flot.js"></script>
<script src="../../../vendor/flot/jquery.flot.pie.js"></script>
<script src="../../../vendor/flot/jquery.flot.resize.js"></script>
<script src="../../../vendor/flot/jquery.flot.time.js"></script>
<script src="../../../vendor/flot-tooltip/jquery.flot.tooltip.min.js"></script>
<script src="../../../data/flot-data.js"></script>
</html>


<!-- modal login -->


<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
       <div class="modal-dialog">
    <div class="loginmodal-container">
     <h1>Silahkan Masuk</h1><br>
      <form method="post" action="../../login/proses.php">
            <div class="form-group has-success">
              <input type="text" class="form-control" name="Username" placeholder="Username" required>
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



    
       <!-- modal tentang kami -->

<div class="modal fade" id="login-modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
       <div class="modal-dialog">
    <div class="loginmodal-container">
     <h1>Tentang Kami</h1><br>
    <div class="form-group">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" ><a href="tupoksi.php">Tujuan Pokok dan Fungsi
                                                </a></label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"><a href="struktur.php">Struktur Organisasi</a>
                                                </label>
                                            </div>
                                            <br>
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
    <td height="71" colspan="2"><img src="../bio.jpg" width="45%"></td>
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
