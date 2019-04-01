<?php

    // Koneksi library FPDF

require('../../../../fpdf/fpdf.php');
require('../../../function/function_koneksi.php');
?>
   <style type="text/css">
<!--
.fontcolor {color: #F0FFF0}
.linecolor {color: #000000}
-->
    </style>

<h1 align="center">LAPORAN VALIDASI</h1>
<h3 align="center"></h3>
<hr width="60%" height="1" align="center" class="linecolor"> 
<hr width="60%" height="1" align="center" class="linecolor"></hr>

<table border="1" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <th bgcolor="#00008B" class="fontcolor">No</th>
        <th bgcolor="#00008B" class="fontcolor">Tgl Daftar</th>
        <th bgcolor="#00008B" class="fontcolor">Nama Organisasi</th>
        <th bgcolor="#00008B" class="fontcolor">surat permohonan pendaftaran</th>
        <th bgcolor="#00008B" class="fontcolor">akta_pendirian</th>
        <th bgcolor="#00008B" class="fontcolor">tujuan program</th>
        <th bgcolor="#00008B" class="fontcolor">SK susunan</th>
        <th bgcolor="#00008B" class="fontcolor">biodata pengurus</th>
        <th bgcolor="#00008B" class="fontcolor">pas photo</th>
        <th bgcolor="#00008B" class="fontcolor">FC KTP</th>
        <th bgcolor="#00008B" class="fontcolor">SK domisili</th>
        <th bgcolor="#00008B" class="fontcolor">NPWP</th>
        <th bgcolor="#00008B" class="fontcolor">surat pernyataan non-konflik</th>
        <th bgcolor="#00008B" class="fontcolor">keterangan</th>

 
    </tr>
    <?php
    $no=1;
    $qry=mysqli_query($conn,"SELECT * FROM tb_validasi");
    while($r=mysqli_fetch_array($qry)){
    echo "
    <tr>
        <td align=center>$no</td>
        <td nowrap=nowrap align=center >$r[tgl_daftar]</td>
        <td nowrap=nowrap align=center >$r[nama_organisasi]</td>
        <td nowrap=nowrap align=center >$r[Surat_Permohonan_Pendaftaran]</td>
        <td nowrap=nowrap align=center >$r[akta_pendirian]</td>
        <td nowrap=nowrap align=center >$r[tujuan_program]</td>
        <td nowrap=nowrap align=center >$r[SK_susunan]</td>
        <td nowrap=nowrap align=center >$r[Biodata_pengurus]</td>
        <td nowrap=nowrap align=center >$r[Pas_photo]</td>
        <td nowrap=nowrap align=center >$r[fc_ktp]</td>
        <td nowrap=nowrap align=center >$r[SK_domisili]</td>
        <td nowrap=nowrap align=center >$r[NPWP]</td>
        <td nowrap=nowrap align=center >$r[SP_konflik]</td>
        <td nowrap=nowrap align=center >$r[keterangan]</td>

 
    </tr>";
  $no++;
     }
     ?>
 <script>
        window.load = print_d();
        function print_d(){
            window.print();

            }
</script> 

</table>
