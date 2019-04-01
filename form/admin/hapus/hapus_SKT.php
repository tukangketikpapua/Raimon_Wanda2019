<?php
require '../../function/function_hapus.php';
$No = $_GET["kd_SKT"];
if(hapus_SKT ($No) > 0){
 echo "<script>
            alert('data berhasil dihapus');
            document.location.href = '../input/i_SKT.php';
            </script>";
} else {
    echo "<script>
            alert('data Gagal dihapus');
            document.location.href = '../input/i_SKT.php';
            </script>";
}
 ?>