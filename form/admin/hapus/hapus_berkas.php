<?php
 
require '../../function/function_hapus.php';

$No = $_GET["kd_berkas"];

if( hapus_berkas($No) > 0){
 echo "<script>
            alert('data berhasil dihapus');
            document.location.href = '../lihat/dt_daftarbaru.php';

            </script>";
} else {
    echo "<script>
            alert('data Gagal dihapus');
            document.location.href = '../lihat/dt_daftarbaru.php';

            </script>";

}

 ?>