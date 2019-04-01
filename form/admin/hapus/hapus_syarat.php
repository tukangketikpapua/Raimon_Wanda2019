<?php

require '../../function/function_hapus.php';

$No = $_GET["id_persyaratan"];

if( hapus_syarat($No) > 0){
 echo "<script>
            alert('data berhasil dihapus');
            document.location.href = '../input/i_syarat.php';

            </script>";
} else {
    echo "<script>
            alert('data Gagal dihapus');
            document.location.href = '../input/i_syarat.php';

            </script>";

}

?>