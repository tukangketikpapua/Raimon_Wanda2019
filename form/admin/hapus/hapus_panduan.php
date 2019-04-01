<?php 

require '../../function/function_hapus.php';

$No = $_GET["kd_panduan"];

if( hapus_panduan($No) > 0){
 echo "<script>
            alert('data berhasil dihapus');
            document.location.href = '../input/i_panduan.php';

            </script>";
} else {
    echo "<script>
            alert('data Gagal dihapus');
            document.location.href = '../input/i_panduan.php';

            </script>";

}

?>

 ?>