<?php

require'../../function/function_koneksi.php';
//koneksi ke databases
$kds=$_GET["kd_SKT"];
$result=mysqli_query($conn,"SELECT * FROM tb_skt WHERE kd_SKT = '$kds';");
 

    // Koneksi library FPDF

require('../../../fpdf/fpdf.php');
?>
   <style type="text/css">
<!--
.fontcolor {color: #F0FFF0}
.linecolor {color: #000000}
-->
    </style>
<?php if(mysqli_num_rows($result)){ ?>
<?php while($row=mysqli_fetch_array($result)){ ?>
<table width="616" align="center">
  <tr>
    <td width="122" rowspan="3"><img src="logo/logo.png" width="118" height="79" /></td>
    <td width="398"><div align="center" class="style1">PEMERINTAH KOTA JAYAPURA</div></td>
    <td width="74" rowspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center"><strong>BADAN KESATUAN BANGSA DAN POLITIK</strong></div></td>
  </tr>
  <tr>
    <td><div align="center">jln.Walikota No.1 kota Jayapura</div></td>
  </tr>
  <tr>
    <td colspan="3" valign="top">===================================================================</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="center" class="style2"><u>SURAT KETERANGAN TERDAFTAR</u></div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="center"><span class="style4">No Surat :SKT/<?= $row ["kd_SKT"]; ?>/2019</span></div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Dasar Hukum</td>
    <td colspan="2"><span class="style4">1.UU Nomor 8 tahun 1985 tentang organisasi kemasyarakatan</span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2"><span class="style4">2.PP Nomor 18 tahun 1985 tentang pelaksanaan UU Nomor 8 tahun 1985</span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2"><span class="style4">3.KEMENDAGRI nomor 5 tahun 1985 tentang Ruang lingkup tata cara pemberitahuan organisasi kemasyarakatan kepada pemerintah</span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2"><span class="style4">4.Badan Hukum</span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2"><span class="style4">instruksi MENDAGRI nomor 8 tahun 1990 tentang pembinaan lembanga swadaya masyarakat</span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">Surat keterangan tersebut di atas dan setelah diteliti berkas persyaratan, Maka dapat diterbitkan surat keterangan terdaftar untuk keberadaan Organisasi Kemasyarakatan dari :</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td>Nama Organisasi</td>
    <td colspan="2">: <?= $row ["nm_ormas"]; ?></td>
  </tr>
  <tr>
    <td>Jenis Organisasi</td>
    <td colspan="2">: <?= $row ["jenis_ormas"]; ?></td>
  </tr>
  <tr>
    <td>Nomor Surat</td>
    <td colspan="2">: <?= $row ["no_surat"]; ?></td>
  </tr>
  <tr>
    <td>Tanggal Surat</td>
    <td colspan="2">: <?= $row ["tgl_surat"]; ?></td>
  </tr>
  <tr>
    <td>Nama Ketua</td>
    <td colspan="2">: <?= $row ["nm_ketua"]; ?></td>
  </tr>
  <tr>
    <td>Nama Sekretaris</td>
    <td colspan="2">: <?= $row ["nm_sekretaris"]; ?></td>
  </tr>
  <tr>
    <td>Alamat </td>
    <td colspan="2">: <?= $row ["alamat"]; ?></td>
  </tr>
  <tr>
    <td>Keterangan</td>
    <td colspan="2" rowspan="2">: <?= $row ["keterangan"]; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Masa berlaku</td>
    <td colspan="2">: <?= $row ["masa_berlaku"]; ?></td>
  </tr>
  <tr>
    <td colspan="3"><p>&nbsp;</p>
    <p>Demikian tanda pemberitahuan keberadaan organisasi ini diberikan untuk dipergunakan sebagaimana semestinya</p></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><div align="right">
      <p>Jayapura, <?php echo date("d-M-Y"); ?></p>
      <p>&nbsp; </p>
    </div></td>
  </tr>
  <tr>
    <td colspan="3"><table width="264" align="right">
      <tr>
        <td width="254"><p align="center">a.n WALI KOTA JAYAPURA</p>
          <p align="center">KEPALA BADAN KESBANGPOL KOTA JAYAPURA</p>
          <p align="center">&nbsp;</p>
          <p align="center"><u>BERNARD FINGKREUW</u></p></td>
      </tr>
      <tr>
        <td><div align="center">(Pembina TK.I)</div></td>
      </tr>
      <tr>
        <td><div align="center">NIP :1965030212239201292</div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="3"><div align="left">Tebusan kepada : <?= $row ["tebusan_ke"]; ?></div></td>
  </tr>
</table>
<?php } ?>
<?php } ?>
 <script>
        window.load = print_d();
        function print_d(){
            window.print();

            }
</script> 