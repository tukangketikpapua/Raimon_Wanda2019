<?php 
require'function_koneksi.php';
 

function simpan_distrik($data){
	global $conn;
	//ambil data dari tiap elemen dalam form
    $kd_distrik =htmlspecialchars($data["kd_distrik"]) ;
    $nm_distrik =htmlspecialchars($data["nm_distrik"]) ;
    $alamat =htmlspecialchars($data["alamat"]) ;

//query insert data
$query= "INSERT INTO tb_distrik 
                    VALUE ('$kd_distrik','$nm_distrik','$alamat') " ; 
mysqli_query($conn,$query);
return mysqli_affected_rows($conn);

}

function simpan_ormas($data){
	global $conn;
	//ambil data dari tiap elemen dalam form
    $kd_ormas =htmlspecialchars($data["kd_ormas"]) ;
    $j_ormas =htmlspecialchars($data["nm_ormas"]) ;

//query insert data
$query= "INSERT INTO tb_organisasi 
                    VALUE ('$kd_ormas','$j_ormas') " ; 
mysqli_query($conn,$query);
return mysqli_affected_rows($conn);
}

function simpan_syarat($data){
    global $conn;
    //ambil data dari tiap elemen dalam form
    $kd_syarat =htmlspecialchars($data["kd_syarat"]) ;
    $syarat =htmlspecialchars($data["syarat"]) ;
    
//query insert data
$query= "INSERT INTO tb_persyaratan 
                    VALUE ('$kd_syarat','$syarat') " ; 
mysqli_query($conn,$query);
return mysqli_affected_rows($conn);
}

function simpan_akun($akun){
    global $conn;
    //ambil data dari tiap elemen dalam form
    $kd_akun =htmlspecialchars($akun["kd_akun"]) ;
    $tgl =htmlspecialchars($akun["tgl_daftar"]) ;
    $nik =htmlspecialchars($akun["nik"]) ;
    $nmormas =htmlspecialchars($akun["nama_ormas"]) ;
    $user =htmlspecialchars($akun["username"]) ;
    $password =htmlspecialchars($akun["password"]) ;
    $level =htmlspecialchars($akun["level"]) ;


// SIMPAN DATA KE DALAM 2 TABEL PADA DATABASE
$query2= "INSERT INTO tb_akun2 
                    VALUE ('$kd_akun','$tgl','$nmormas','$user','$password','$level') " ;
mysqli_query($conn,$query2); 
return mysqli_affected_rows($conn);

// END SIMPAN DATA KE DALAM 2 TABEL DI DATABASE
}

function simpan_baru($data){
    global $conn;
    //ambil data dari tiap elemen dalam form
    $kd_berkas =htmlspecialchars($data["kd_berkas"]) ;
    $tgl_daftar =htmlspecialchars($data["tgl_daftar"]) ;
    $nm_organisasi =htmlspecialchars($data["nama_organisasi"]) ;
    $nik_ketua =htmlspecialchars($data["nik"]) ;
    $jenis_organisasi =htmlspecialchars($data["jenis_organisasi"]) ;
    $distrik =htmlspecialchars($data["nm_distrik"]) ;
    $alamat =htmlspecialchars($data["alamat"]) ;

       //ambil data dari tiap elemen dalam form
      $namaFile1        =$_FILES['file1']['name'];
      $ukuranFile       =$_FILES['file1']['size'];
      $error            =$_FILES['file1']['error'];
      $tmpName          =$_FILES['file1']['tmp_name'];

      //cek apakah gambar sudah di upload
      if ($error === 4) {
        # code...
        echo "<script>alert('berkas 1 pilih gambar terlebih dahulu')</script>";
        return false;
      }
      //cek apakaah yang diupload adalah gambar
      $ekstensiGambarValid  =['jpg','jpeg'];
      $ekstensiGambar       =explode('.', $namaFile1);
      $ekstensiGambar       =strtolower(end($ekstensiGambar));
      if ( !in_array($ekstensiGambar , $ekstensiGambarValid) ) {
        # code...
        echo "<script>alert('berkas 1 harus upload jpg / jpeg')</script>";
        return false;
      }
      //cek ukuran gambar yang diupload
      if ($ukuranFile<100) {
        # code...
        echo "<script>alert(' berkas 1 Ukuran file  terlalu kecil')</script>";
        return false;
      }
     
      move_uploaded_file($tmpName,"../foto/".$namaFile1);
        

 //ambil data dari tiap elemen dalam form
      $namaFile2        =$_FILES['file2']['name'];
      $ukuranFile       =$_FILES['file2']['size'];
      $error            =$_FILES['file2']['error'];
      $tmpName          =$_FILES['file2']['tmp_name'];

      //cek apakah gambar sudah di upload
      if ($error === 4) {
        # code...
        echo "<script>alert('berkas 2 pilih gambar terlebih dahulu')</script>";
        return false;
      }
      //cek apakaah yang diupload adalah gambar
      $ekstensiGambarValid  =['jpg','jpeg'];
      $ekstensiGambar       =explode('.', $namaFile2);
      $ekstensiGambar       =strtolower(end($ekstensiGambar));
      if ( !in_array($ekstensiGambar , $ekstensiGambarValid) ) {
        # code...
        echo "<script>alert('berkas 2 Anda harus upload jpg / jpeg')</script>";
        return false;
      }
      //cek ukuran gambar yang diupload
      if ($ukuranFile<100) {
        # code...
        echo "<script>alert('berkas 2 Ukuran file  terlalu kecil')</script>";
        return false;
      }
     
      move_uploaded_file($tmpName,"../foto/".$namaFile2);
        


//ambil data dari tiap elemen dalam form
      $namaFile3        =$_FILES['file3']['name'];
      $ukuranFile       =$_FILES['file3']['size'];
      $error            =$_FILES['file3']['error'];
      $tmpName          =$_FILES['file3']['tmp_name'];

      //cek apakah gambar sudah di upload
      if ($error === 4) {
        # code...
        echo "<script>alert('berkas 3 pilih gambar terlebih dahulu')</script>";
        return false;
      }
      //cek apakaah yang diupload adalah gambar
      $ekstensiGambarValid  =['jpg','jpeg'];
      $ekstensiGambar       =explode('.', $namaFile3);
      $ekstensiGambar       =strtolower(end($ekstensiGambar));
      if ( !in_array($ekstensiGambar , $ekstensiGambarValid) ) {
        # code...
        echo "<script>alert('berkas 3 Anda harus upload jpg / jpeg')</script>";
        return false;
      }
      //cek ukuran gambar yang diupload
      if ($ukuranFile<100) {
        # code...
        echo "<script>alert('berkas 3 Ukuran file  terlalu kecil')</script>";
        return false;
      }
     
      move_uploaded_file($tmpName,"../foto/".$namaFile3);



      //ambil data dari tiap elemen dalam form
      $namaFile4        =$_FILES['file4']['name'];
      $ukuranFile       =$_FILES['file4']['size'];
      $error            =$_FILES['file4']['error'];
      $tmpName          =$_FILES['file4']['tmp_name'];

      //cek apakah gambar sudah di upload
      if ($error === 4) {
        # code...
        echo "<script>alert('berkas 4 pilih gambar terlebih dahulu')</script>";
        return false;
      }
      //cek apakaah yang diupload adalah gambar
      $ekstensiGambarValid  =['jpg','jpeg'];
      $ekstensiGambar       =explode('.', $namaFile4);
      $ekstensiGambar       =strtolower(end($ekstensiGambar));
      if ( !in_array($ekstensiGambar , $ekstensiGambarValid) ) {
        # code...
        echo "<script>alert('berkas 4 Anda harus upload jpg / jpeg')</script>";
        return false;
      }
      //cek ukuran gambar yang diupload
      if ($ukuranFile<100) {
        # code...
        echo "<script>alert('berkas 4 Ukuran file  terlalu kecil')</script>";
        return false;
      }
     
      move_uploaded_file($tmpName,"../foto/".$namaFile4);


//ambil data dari tiap elemen dalam form
      $namaFile5        =$_FILES['file5']['name'];
      $ukuranFile       =$_FILES['file5']['size'];
      $error            =$_FILES['file5']['error'];
      $tmpName          =$_FILES['file5']['tmp_name'];

      //cek apakah gambar sudah di upload
      if ($error === 4) {
        # code...
        echo "<script>alert('berkas 5 pilih gambar terlebih dahulu')</script>";
        return false;
      }
      //cek apakaah yang diupload adalah gambar
      $ekstensiGambarValid  =['jpg','jpeg'];
      $ekstensiGambar       =explode('.', $namaFile5);
      $ekstensiGambar       =strtolower(end($ekstensiGambar));
      if ( !in_array($ekstensiGambar , $ekstensiGambarValid) ) {
        # code...
        echo "<script>alert('berkas 5 Anda harus upload jpg / jpeg')</script>";
        return false;
      }
      //cek ukuran gambar yang diupload
      if ($ukuranFile<100) {
        # code...
        echo "<script>alert('berkas 5 Ukuran file  terlalu kecil')</script>";
        return false;
      }
     
      move_uploaded_file($tmpName,"../foto/".$namaFile5);

//ambil data dari tiap elemen dalam form
      $namaFile6        =$_FILES['file6']['name'];
      $ukuranFile       =$_FILES['file6']['size'];
      $error            =$_FILES['file6']['error'];
      $tmpName          =$_FILES['file6']['tmp_name'];

      //cek apakah gambar sudah di upload
      if ($error === 4) {
        # code...
        echo "<script>alert('berkas 6 pilih gambar terlebih dahulu')</script>";
        return false;
      }
      //cek apakaah yang diupload adalah gambar
      $ekstensiGambarValid  =['jpg','jpeg'];
      $ekstensiGambar       =explode('.', $namaFile6);
      $ekstensiGambar       =strtolower(end($ekstensiGambar));
      if ( !in_array($ekstensiGambar , $ekstensiGambarValid) ) {
        # code...
        echo "<script>alert('berkas 6 Anda harus upload jpg / jpeg')</script>";
        return false;
      }
      //cek ukuran gambar yang diupload
      if ($ukuranFile<100) {
        # code...
        echo "<script>alert('berkas 6 Ukuran file  terlalu kecil')</script>";
        return false;
      }
     
      move_uploaded_file($tmpName,"../foto/".$namaFile6);
        

 //ambil data dari tiap elemen dalam form
      $namaFile7        =$_FILES['file7']['name'];
      $ukuranFile       =$_FILES['file7']['size'];
      $error            =$_FILES['file7']['error'];
      $tmpName          =$_FILES['file7']['tmp_name'];

      //cek apakah gambar sudah di upload
      if ($error === 4) {
        # code...
        echo "<script>alert('berkas 7 pilih gambar terlebih dahulu')</script>";
        return false;
      }
      //cek apakaah yang diupload adalah gambar
      $ekstensiGambarValid  =['jpg','jpeg'];
      $ekstensiGambar       =explode('.', $namaFile7);
      $ekstensiGambar       =strtolower(end($ekstensiGambar));
      if ( !in_array($ekstensiGambar , $ekstensiGambarValid) ) {
        # code...
        echo "<script>alert('berkas 7 Anda harus upload jpg / jpeg')</script>";
        return false;
      }
      //cek ukuran gambar yang diupload
      if ($ukuranFile<100) {
        # code...
        echo "<script>alert('berkas 7 Ukuran file  terlalu kecil')</script>";
        return false;
      }
     
      move_uploaded_file($tmpName,"../foto/".$namaFile7);
        


//ambil data dari tiap elemen dalam form
      $namaFile8        =$_FILES['file8']['name'];
      $ukuranFile       =$_FILES['file8']['size'];
      $error            =$_FILES['file8']['error'];
      $tmpName          =$_FILES['file8']['tmp_name'];

      //cek apakah gambar sudah di upload
      if ($error === 4) {
        # code...
        echo "<script>alert('berkas 8 pilih gambar terlebih dahulu')</script>";
        return false;
      }
      //cek apakaah yang diupload adalah gambar
      $ekstensiGambarValid  =['jpg','jpeg'];
      $ekstensiGambar       =explode('.', $namaFile8);
      $ekstensiGambar       =strtolower(end($ekstensiGambar));
      if ( !in_array($ekstensiGambar , $ekstensiGambarValid) ) {
        # code...
        echo "<script>alert('berkas 8 Anda harus upload jpg / jpeg')</script>";
        return false;
      }
      //cek ukuran gambar yang diupload
      if ($ukuranFile<100) {
        # code...
        echo "<script>alert('berkas 8 Ukuran file  terlalu kecil')</script>";
        return false;
      }
     
      move_uploaded_file($tmpName,"../foto/".$namaFile8);



      //ambil data dari tiap elemen dalam form
      $namaFile9        =$_FILES['file9']['name'];
      $ukuranFile       =$_FILES['file9']['size'];
      $error            =$_FILES['file9']['error'];
      $tmpName          =$_FILES['file9']['tmp_name'];

      //cek apakah gambar sudah di upload
      if ($error === 4) {
        # code...
        echo "<script>alert('berkas 9 pilih gambar terlebih dahulu')</script>";
        return false;
      }
      //cek apakaah yang diupload adalah gambar
      $ekstensiGambarValid  =['jpg','jpeg'];
      $ekstensiGambar       =explode('.', $namaFile9);
      $ekstensiGambar       =strtolower(end($ekstensiGambar));
      if ( !in_array($ekstensiGambar , $ekstensiGambarValid) ) {
        # code...
        echo "<script>alert('berkas 9 Anda harus upload jpg / jpeg')</script>";
        return false;
      }
      //cek ukuran gambar yang diupload
      if ($ukuranFile<100) {
        # code...
        echo "<script>alert('berkas 9 Ukuran file  terlalu kecil')</script>";
        return false;
      }
     
      move_uploaded_file($tmpName,"../foto/".$namaFile9);


//ambil data dari tiap elemen dalam form
      $namaFile10        =$_FILES['file10']['name'];
      $ukuranFile       =$_FILES['file10']['size'];
      $error            =$_FILES['file10']['error'];
      $tmpName          =$_FILES['file10']['tmp_name'];

      //cek apakah gambar sudah di upload
      if ($error === 4) {
        # code...
        echo "<script>alert('berkas 10 pilih gambar terlebih dahulu')</script>";
        return false;
      }
      //cek apakaah yang diupload adalah gambar
      $ekstensiGambarValid  =['jpg','jpeg'];
      $ekstensiGambar       =explode('.', $namaFile10);
      $ekstensiGambar       =strtolower(end($ekstensiGambar));
      if ( !in_array($ekstensiGambar , $ekstensiGambarValid) ) {
        # code...
        echo "<script>alert('berkas 10 Anda harus upload jpg / jpeg')</script>";
        return false;
      }
      //cek ukuran gambar yang diupload
      if ($ukuranFile<100) {
        # code...
        echo "<script>alert('berkas 10 Ukuran file  terlalu kecil')</script>";
        return false;
      }
     
      move_uploaded_file($tmpName,"../foto/".$namaFile10);


 
//query insert data
$query= "INSERT INTO tb_daftar 
                    VALUE ('$kd_berkas','$tgl_daftar','$nm_organisasi','$nik_ketua','$jenis_organisasi','$distrik','$alamat','$namaFile1','$namaFile2','$namaFile3','$namaFile4','$namaFile5','$namaFile6','$namaFile7','$namaFile8','$namaFile9','$namaFile10') " ; 
mysqli_query($conn,$query);
return mysqli_affected_rows($conn);
}
 
 


function simpan_panduan($data){
    global $conn;
    //ambil data dari tiap elemen dalam form
    $kd_panduan =htmlspecialchars($data["kd_panduan"]) ;
    $panduan =htmlspecialchars($data["panduan"]) ;
    
//query insert data
$query= "INSERT INTO tb_panduan 
                    VALUE ('$kd_panduan','$panduan') " ; 
mysqli_query($conn,$query);
return mysqli_affected_rows($conn);
}

function register($data){
    global $conn;
    //ambil data dari tiap elemen dalam form
    
 
    $kode =htmlspecialchars($data["kd_berkas"]) ;
    $tglterdaftar =htmlspecialchars($data["tglterdaftar"]) ;
    $tgl =htmlspecialchars($data["tgl_daftar"]) ;
    $nama_ormas =htmlspecialchars($data["nama_organisasi"]) ;
    $nik_pengurus =htmlspecialchars($data["nik_pengurus"]) ;
    $username =htmlspecialchars($data["username"]) ;
    $password =htmlspecialchars($data["password"]) ;
    $level =htmlspecialchars($data["level_user"]) ;
    $pesaninfo =htmlspecialchars($data["pesaninfo"]) ;
    
//query insert data
$query= "INSERT INTO tb_akun 
                    VALUE ('$kode','$tglterdaftar','$tgl','$nik_pengurus','$nama_ormas','$username','$password','$level','$pesaninfo') " ; 
mysqli_query($conn,$query);
return mysqli_affected_rows($conn);
}


function upload_berkas($akun){
    global $conn;
    //ambil data dari tiap elemen dalam form
    $nik =htmlspecialchars($akun["nik"]) ;
    $normas =htmlspecialchars($akun["normas"]) ;
    $tgl =htmlspecialchars($akun["tgl"]) ;
    $jekeg =htmlspecialchars($akun["jekeg"]) ;

        $file1=$_FILES["file1"]["name"];
        $tmp_name=$_FILES["file1"]["tmp_name"];
        move_uploaded_file($tmp_name,"../foto/".$file1);


        $file2=$_FILES["file2"]["name"];
        $tmp_name=$_FILES["file2"]["tmp_name"];
        move_uploaded_file($tmp_name,"../foto/".$file2);

        $file3=$_FILES["file3"]["name"];
        $tmp_name=$_FILES["file3"]["tmp_name"];
        move_uploaded_file($tmp_name,"../foto/".$file3);

        $file4=$_FILES["file4"]["name"];
        $tmp_name=$_FILES["file4"]["tmp_name"];
        move_uploaded_file($tmp_name,"../foto/".$file4);

        $file5=$_FILES["file5"]["name"];
        $tmp_name=$_FILES["file5"]["tmp_name"];
        move_uploaded_file($tmp_name,"../foto/".$file5);

        $file6=$_FILES["file6"]["name"];
        $tmp_name=$_FILES["file6"]["tmp_name"];
        move_uploaded_file($tmp_name,"../foto/".$file6);


        $file7=$_FILES["file7"]["name"];
        $tmp_name=$_FILES["file7"]["tmp_name"];
        move_uploaded_file($tmp_name,"../foto/".$file7);

        $file8=$_FILES["file8"]["name"];
        $tmp_name=$_FILES["file8"]["tmp_name"];
        move_uploaded_file($tmp_name,"../foto/".$file8);

        $file9=$_FILES["file9"]["name"];
        $tmp_name=$_FILES["file9"]["tmp_name"];
        move_uploaded_file($tmp_name,"../foto/".$file9);

        $file10=$_FILES["file10"]["name"];
        $tmp_name=$_FILES["file10"]["tmp_name"];
        move_uploaded_file($tmp_name,"../foto/".$file10);


    $informasi =htmlspecialchars($akun["infor"]) ;

$query= "INSERT INTO tb_ormas 
                    VALUE ('','$nik','$normas','$tgl','$jekeg','$file1','$file2','$file3','$file4','$file5','$file6','$file7','$file8','$file9','$file10','$informasi') " ;
mysqli_query($conn,$query); 
return mysqli_affected_rows($conn);

// END SIMPAN DATA KE DALAM 2 TABEL DI DATABASE
}



function simpan_SKT($data){
     global $conn;
    //ambil data dari tiap elemen dalam form

    $kd        =htmlspecialchars($data["kd"]) ;
    $normas    =htmlspecialchars($data["normas"]) ;
    $jormas     =htmlspecialchars($data["jormas"]) ;
    $nosu      =htmlspecialchars($data["nosu"]) ;
    $tglsu     =htmlspecialchars($data["tglsu"]) ;
    $namket    =htmlspecialchars($data["namket"]) ;
    $namsek    =htmlspecialchars($data["namsek"]) ;
    $masa      =htmlspecialchars($data["masa"]) ;
    $tebus     =htmlspecialchars($data["tebus"]) ;
    $tlp       =htmlspecialchars($data["tlp"]) ;
    $alamatsek =htmlspecialchars($data["alamatsek"]) ;
    $ket       =htmlspecialchars($data["ket"]) ;



    
//query insert data
$query= "INSERT INTO tb_SKT
                    VALUE ('$kd','$normas','$jormas','$nosu','$tglsu','$namket','$namsek','$masa','$tebus','$tlp','$alamatsek','$ket') " ; 
mysqli_query($conn,$query);
return mysqli_affected_rows($conn);
}



function validasi_data($data){
  global $conn;
  //ambil data dari tiap elemen dalam form
        
        $kd_berkas = htmlspecialchars($data["kd_berkas"]);
        $tgl = htmlspecialchars($data["tgl"]); //
        $nik = htmlspecialchars($data["nm_organisasi"]);      
        $nama = htmlspecialchars($data["nik"]);
        $berkas = htmlspecialchars($data["ket"]);

        $file1  = htmlspecialchars($data["file1"]);
        $file2  = htmlspecialchars($data["file2"]);
        $file3  = htmlspecialchars($data["file3"]);
        $file4   = htmlspecialchars($data["file4"]);
        $file5  = htmlspecialchars($data["file5"]);
        $file6  = htmlspecialchars($data["file6"]);
        $file7  = htmlspecialchars($data["file7"]);
        $file8  = htmlspecialchars($data["file8"]);
        $file9  = htmlspecialchars($data["file9"]);
        $file10 = htmlspecialchars($data["file10"]);



//query insert data
$query= "INSERT INTO tb_validasi 
                    VALUE ('kd_berkas','$tgl','$nik','$nama','$berkas','$file1','$file2','$file3','$file4','$file5','$file6','$file7','$file8','$file9','$file10') " ; 
mysqli_query($conn,$query);
return mysqli_affected_rows($conn);

}




function daftar_akun($data){
     global $conn;
    //ambil data dari tiap elemen dalam form

    $nama_ormas   =htmlspecialchars($data["nama_ormas"]) ;
    $nik          =htmlspecialchars($data["nik"]) ;
    $username     =htmlspecialchars($data["username"]) ;
    $password     =htmlspecialchars($data["password"]) ;



    
//query insert data
$query= "INSERT INTO akun_daftar
                    VALUE ('$','$nama_ormas','$nik','$username','$password') " ; 
mysqli_query($conn,$query);
return mysqli_affected_rows($conn);
}

 ?>