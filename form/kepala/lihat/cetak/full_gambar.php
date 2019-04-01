 <?php 
require'../../../../fpdf/fpdf.php';
require'../../../function/function_cetak.php';

error_reporting(0);
//koneksi ke databases
$conn = mysqli_connect("localhost","root","","db_ormas");
$kd=$_GET["nama_ormas"];
$query=mysqli_query($conn,"SELECT * FROM tb_ormas WHERE nama_ormas = '$kd'; ");
?>
 
  <link href="../../../../assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="../../../../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="../../../../assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="../../../../assets/css/style.css" rel="stylesheet" />
    <link href="../../../../assets/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="../../../../assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
    


  <style type="text/css">
<!--
.fontcolor {color: #F0FFF0}
.linecolor {color: #000000}
 
 @media print{
    .hiden{
        display: none;
    }
 }
 
-->
    </style>


                    <div class="panel panel-default">
                        <div class="panel-body">
<div class="hiden">
<a href="../lap_dt_kegiatan.php"><button class="btn btn-outline btn-success" ><i class="fa fa-arrow-left"></i>Kembali </button></a>

<button type="submit" name="submit" class="btn btn-outline btn-success" onclick="print_d()"><i class="fa fa-print  "></i> Cetak</button>
</div>
                                                            
                                <p></p>
                                <?php $i = 1; ?>
<?php if(mysqli_num_rows($query)){ ?>
<?php while($row=mysqli_fetch_array($query)){ ?>
 <!-- Advanced Tables -->
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                                                <tr style="font-size: 11px">
                                                                    <th width="2%" >No</th>
                                                                    <th>Nama organisasi</th>
                                                                    <th><center>foto 1</center></th>
                                                                    <th><center>foto 2</center></th>
                                                                    <th><center>foto 3</center></th>
                                                                    <th><center>foto 4</center></th>
                                                                    <th><center>foto 5</center></th>
                                                                    <th><center>foto 6</center></th>
                                                                    <th><center>foto 7</center></th>
                                                                    <th><center>foto 8</center></th>
                                                                    <th><center>foto 9</center></th>
                                                                    <th><center>foto 10</center></th>
                                                                    
                                                                   
                                                            
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                           
                                                                        <tr>
                                                            <td><?= $i; ?></td>
            <td><?= $row ["nama_ormas"]; ?></td>
            <td>  <img src="../../../foto/<?= $row ["foto1"]; ?>" width="75px"></a></td>   
            <td>  <img src="../../../foto/<?= $row ["foto2"]; ?>" width="75px"></a></td>
            <td>  <img src="../../../foto/<?= $row ["foto3"]; ?>" width="75px"></a></td>
            <td>  <img src="../../../foto/<?= $row ["foto4"]; ?>" width="75px"></a></td>
            <td>  <img src="../../../foto/<?= $row ["foto5"]; ?>" width="75px"></a></td>
            <td>  <img src="../../../foto/<?= $row ["foto6"]; ?>" width="75px"></a></td>
            <td>  <img src="../../../foto/<?= $row ["foto7"]; ?>" width="75px"></a></td>
            <td>  <img src="../../../foto/<?= $row ["foto8"]; ?>" width="75px"></a></td>
            <td>  <img src="../../../foto/<?= $row ["foto9"]; ?>" width="75px"></a></td>
            <td>  <img src="../../../foto/<?= $row ["foto10"];?>" width="75px"></a></td>



                                                                        </tr>
                                                            <?php $i++; ?>
                                                            <?php } ?>
                                                            <?php } ?>
                                                               

                                                            </tbody>
                                                        </table>
                                                    
                                                    </div>         
                                                </div>
                                            
                                            <!--End Advanced Tables --> 

</table>
    <!-- Core Scripts - Include with every page -->
    <script src="../../../../assets/plugins/jquery-1.10.2.js"></script>
    <script src="../../../../assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="../../../../assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../../../../assets/plugins/pace/pace.js"></script>
    <script src="../../../../assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="../../../../assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="../../../../assets/plugins/morris/morris.js"></script>
    <script src="../../../../assets/scripts/dashboard-demo.js"></script>
 
 