<?php
//AUTO NUMBER DISTRIK
$conn = mysqli_connect("localhost","root","","db_ormas");
    //membaca kode barang terbesar
    $sql = "SELECT max(kd_distrik) FROM tb_distrik";
    $query = mysqli_query($conn,$sql) or die (mysqli_error());

    $kode_faktur = mysqli_fetch_array($query);

    if($kode_faktur){
        $nilai = substr($kode_faktur[0], 3);
        $kode = (int) $nilai;

        //tambahkan sebanyak + 1
        $kode = $kode + 1;
        $distrik = "KDD" .str_pad($kode, 4, "0",  STR_PAD_LEFT);
    } else {
        $distrik = "KDD0001";
    }

//AUTO NUMBER ORGANISASI
$conn = mysqli_connect("localhost","root","","db_ormas");
    //membaca kode barang terbesar
    $sql = "SELECT max(kd_organisasi) FROM tb_organisasi";
    $query = mysqli_query($conn,$sql) or die (mysqli_error());

    $kode_faktur = mysqli_fetch_array($query);

    if($kode_faktur){
        $nilai = substr($kode_faktur[0], 3);
        $kode = (int) $nilai;

        //tambahkan sebanyak + 1
        $kode = $kode + 1;
        $ormas = "KDO" .str_pad($kode, 4, "0",  STR_PAD_LEFT);
    } else {
        $ormas = "KDO0001";
    }

//AUTO NUMBER SYARAT
$conn = mysqli_connect("localhost","root","","db_ormas");
    //membaca kode barang terbesar
    $sql = "SELECT max(id_persyaratan) FROM tb_persyaratan";
    $query = mysqli_query($conn,$sql) or die (mysqli_error());

    $kode_faktur = mysqli_fetch_array($query);

    if($kode_faktur){
        $nilai = substr($kode_faktur[0], 3);
        $kode = (int) $nilai;

        //tambahkan sebanyak + 1
        $kode = $kode + 1;
        $syarat = "KDS" .str_pad($kode, 4, "0",  STR_PAD_LEFT);
    } else {
        $syarat = "KDS0001";
    }

    //AUTO NUMBER AKUN
$conn = mysqli_connect("localhost","root","","db_ormas");
    //membaca kode barang terbesar
    $sql = "SELECT max(kd_akun) FROM tb_akun2";
    $query = mysqli_query($conn,$sql) or die (mysqli_error());

    $kode_faktur = mysqli_fetch_array($query);

    if($kode_faktur){
        $nilai = substr($kode_faktur[0], 3);
        $kode = (int) $nilai;

        //tambahkan sebanyak + 1
        $kode = $kode + 1;
        $akun = "KDA" .str_pad($kode, 4, "0",  STR_PAD_LEFT);
    } else {
        $akun = "KDA0001";
    }

    //AUTO NUMBER AKUN
$conn = mysqli_connect("localhost","root","","db_ormas");
    //membaca kode barang terbesar
    $sql = "SELECT max(kd_berkas) FROM tb_daftar";
    $query = mysqli_query($conn,$sql) or die (mysqli_error());

    $kode_faktur = mysqli_fetch_array($query);

    if($kode_faktur){
        $nilai = substr($kode_faktur[0], 3);
        $kode = (int) $nilai;

        //tambahkan sebanyak + 1
        $kode = $kode + 1;
        $berkas = "KDB" .str_pad($kode, 4, "0",  STR_PAD_LEFT);
    } else {
        $berkas = "KDB0001";
    }

        //AUTO NUMBER PANDUAN
$conn = mysqli_connect("localhost","root","","db_ormas");
    //membaca kode barang terbesar
    $sql = "SELECT max(kd_panduan) FROM tb_panduan";
    $query = mysqli_query($conn,$sql) or die (mysqli_error());

    $kode_faktur = mysqli_fetch_array($query);

    if($kode_faktur){
        $nilai = substr($kode_faktur[0], 3);
        $kode = (int) $nilai;

        //tambahkan sebanyak + 1
        $kode = $kode + 1;
        $panduan = "KDP" .str_pad($kode, 4, "0",  STR_PAD_LEFT);
    } else {
        $panduan = "KDP0001";
    }

       //AUTO NUMBER AKUN
$conn = mysqli_connect("localhost","root","","db_ormas");
    //membaca kode barang terbesar
    $sql = "SELECT max(kd_berkas) FROM tb_daftar";
    $query = mysqli_query($conn,$sql) or die (mysqli_error());

    $kode_faktur = mysqli_fetch_array($query);

    if($kode_faktur){
        $nilai = substr($kode_faktur[0], 3);
        $kode = (int) $nilai;

        //tambahkan sebanyak + 1
        $kode = $kode + 1;
        $berkas = "KDB" .str_pad($kode, 4, "0",  STR_PAD_LEFT);
    } else {
        $berkas = "KDB0001";
    }

        //AUTO NUMBER PANDUAN
$conn = mysqli_connect("localhost","root","","db_ormas");
    //membaca kode barang terbesar
    $sql = "SELECT max(kd_SKT) FROM tb_SKT";
    $query = mysqli_query($conn,$sql) or die (mysqli_error());

    $kode_faktur = mysqli_fetch_array($query);

    if($kode_faktur){
        $nilai = substr($kode_faktur[0], 3);
        $kode = (int) $nilai;

        //tambahkan sebanyak + 1
        $kode = $kode + 1;
        $SKT = "SKT" .str_pad($kode, 4, "0",  STR_PAD_LEFT);
    } else {
        $SKT = "KDS0001";
}
?>
