
<?php
require '../function/function_hapus.php';
$No = $_GET["kd_distrik"];
if( hapus_distrik ($No) > 0){
 echo "<script>
            alert('data berhasil dihapus');
            document.location.href = '../input/i_distrik.php';
            </script>";
} else {
    echo "<script>
            alert('data Gagal dihapus');
            document.location.href = '../input/i_distrik.php';
            </script>";
}
 ?>