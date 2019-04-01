<?php 

function upload1(){
  $gbr1     =$_FILES['file1']['name'];
  $ukuran   =$_FILES['file1']['size'];
  $error    =$_FILES['file1']['error'];
  $lokasi   =$_FILES['file1']['tmp_name'];
  //CEK APAKAH TIDAK ADA GAMBAR YANG DIUPLOAD
  if ($error ===4) {
    # code...
    echo "<script>
   alert('Pilih gambar terlebih dahulu');</script> ";
   return false;
  }
  //CEK YANG DIUPLOAD APAKAH GAMBAR
  $ekstensiGambarValid=['jpg','jpeg'];
  $ekstensiGambar     =explode('.', $gbr1);
  $ekstensiGambar     =strtolower(end($ekstensiGambar));
  
  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
    # code...
    echo "<script>
   alert('yang diupload bukan gambar');</script> ";
   return false;
  }
  //CEK UKURAN GAMBAR
  if ($ukuran>1000000) {
    # code...
    echo "<script>
   alert('Ukuran gambar terlalu Besar');</script> ";
   return false;
  }
  //JIKA LOLOS PENGECEKAN
  move_uploaded_file('$lokasi','../../foto/'.$gbr1);
  return false;
  } 

  function upload2(){
  $gbr2     =$_FILES['file2']['name'];
  $ukuran   =$_FILES['file2']['size'];
  $error    =$_FILES['file2']['error'];
  $lokasi   =$_FILES['file2']['tmp_name'];
  //CEK APAKAH TIDAK ADA GAMBAR YANG DIUPLOAD
  if ($error ===4) {
    # code...
    echo "<script>
   alert('Pilih gambar terlebih dahulu');</script> ";
   return false;
  }
  //CEK YANG DIUPLOAD APAKAH GAMBAR
  $ekstensiGambarValid=['jpg','jpeg'];
  $ekstensiGambar     =explode('.', $gbr2);
  $ekstensiGambar     =strtolower(end($ekstensiGambar));
  
  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
    # code...
    echo "<script>
   alert('yang diupload bukan gambar');</script> ";
   return false;
  }
  //CEK UKURAN GAMBAR
  if ($ukuran>1000000) {
    # code...
    echo "<script>
   alert('Ukuran gambar terlalu Besar');</script> ";
   return false;
  }
  //JIKA LOLOS PENGECEKAN
  move_uploaded_file('$lokasi','../../foto/'.$gbr2);
  return false;
  } 
 
 function upload3(){
  $gbr3     =$_FILES['file3']['name'];
  $ukuran   =$_FILES['file3']['size'];
  $error    =$_FILES['file3']['error'];
  $lokasi   =$_FILES['file3']['tmp_name'];
  //CEK APAKAH TIDAK ADA GAMBAR YANG DIUPLOAD
  if ($error ===4) {
    # code...
    echo "<script>
   alert('Pilih gambar terlebih dahulu');</script> ";
   return false;
  }
  //CEK YANG DIUPLOAD APAKAH GAMBAR
  $ekstensiGambarValid=['jpg','jpeg'];
  $ekstensiGambar     =explode('.', $gbr3);
  $ekstensiGambar     =strtolower(end($ekstensiGambar));
  
  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
    # code...
    echo "<script>
   alert('yang diupload bukan gambar');</script> ";
   return false;
  }
  //CEK UKURAN GAMBAR
  if ($ukuran>1000000) {
    # code...
    echo "<script>
   alert('Ukuran gambar terlalu Besar');</script> ";
   return false;
  }
  //JIKA LOLOS PENGECEKAN
  move_uploaded_file('$lokasi','../../foto/'.$gbr3);
  return false;
  } 
 
function upload4(){
  $gbr4     =$_FILES['file4']['name'];
  $ukuran   =$_FILES['file4']['size'];
  $error    =$_FILES['file4']['error'];
  $lokasi   =$_FILES['file4']['tmp_name'];
  //CEK APAKAH TIDAK ADA GAMBAR YANG DIUPLOAD
  if ($error ===4) {
    # code...
    echo "<script>
   alert('Pilih gambar terlebih dahulu');</script> ";
   return false;
  }
  //CEK YANG DIUPLOAD APAKAH GAMBAR
  $ekstensiGambarValid=['jpg','jpeg'];
  $ekstensiGambar     =explode('.', $gbr4);
  $ekstensiGambar     =strtolower(end($ekstensiGambar));
  
  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
    # code...
    echo "<script>
   alert('yang diupload bukan gambar');</script> ";
   return false;
  }
  //CEK UKURAN GAMBAR
  if ($ukuran>1000000) {
    # code...
    echo "<script>
   alert('Ukuran gambar terlalu Besar');</script> ";
   return false;
  }
  //JIKA LOLOS PENGECEKAN
  move_uploaded_file('$lokasi','../../foto/'.$gbr4);
  return false;
  } 

 function upload5(){
  $gbr5     =$_FILES['file5']['name'];
  $ukuran   =$_FILES['file5']['size'];
  $error    =$_FILES['file5']['error'];
  $lokasi   =$_FILES['file5']['tmp_name'];
  //CEK APAKAH TIDAK ADA GAMBAR YANG DIUPLOAD
  if ($error ===4) {
    # code...
    echo "<script>
   alert('Pilih gambar terlebih dahulu');</script> ";
   return false;
  }
  //CEK YANG DIUPLOAD APAKAH GAMBAR
  $ekstensiGambarValid=['jpg','jpeg'];
  $ekstensiGambar     =explode('.', $gbr5);
  $ekstensiGambar     =strtolower(end($ekstensiGambar));
  
  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
    # code...
    echo "<script>
   alert('yang diupload bukan gambar');</script> ";
   return false;
  }
  //CEK UKURAN GAMBAR
  if ($ukuran>1000000) {
    # code...
    echo "<script>
   alert('Ukuran gambar terlalu Besar');</script> ";
   return false;
  }
  //JIKA LOLOS PENGECEKAN
  move_uploaded_file('$lokasi','../../foto/'.$gbr5);
  return false;
  }

  function upload6(){
  $gbr6     =$_FILES['file6']['name'];
  $ukuran   =$_FILES['file6']['size'];
  $error    =$_FILES['file6']['error'];
  $lokasi   =$_FILES['file6']['tmp_name'];
  //CEK APAKAH TIDAK ADA GAMBAR YANG DIUPLOAD
  if ($error ===4) {
    # code...
    echo "<script>
   alert('Pilih gambar terlebih dahulu');</script> ";
   return false;
  }
  //CEK YANG DIUPLOAD APAKAH GAMBAR
  $ekstensiGambarValid=['jpg','jpeg'];
  $ekstensiGambar     =explode('.', $gbr6);
  $ekstensiGambar     =strtolower(end($ekstensiGambar));
  
  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
    # code...
    echo "<script>
   alert('yang diupload bukan gambar');</script> ";
   return false;
  }
  //CEK UKURAN GAMBAR
  if ($ukuran>1000000) {
    # code...
    echo "<script>
   alert('Ukuran gambar terlalu Besar');</script> ";
   return false;
  }
  //JIKA LOLOS PENGECEKAN
  move_uploaded_file('$lokasi','../../foto/'.$gbr6);
  return false;
  } 

function upload7(){
  $gbr7     =$_FILES['file7']['name'];
  $ukuran   =$_FILES['file7']['size'];
  $error    =$_FILES['file7']['error'];
  $lokasi   =$_FILES['file7']['tmp_name'];
  //CEK APAKAH TIDAK ADA GAMBAR YANG DIUPLOAD
  if ($error ===4) {
    # code...
    echo "<script>
   alert('Pilih gambar terlebih dahulu');</script> ";
   return false;
  }
  //CEK YANG DIUPLOAD APAKAH GAMBAR
  $ekstensiGambarValid=['jpg','jpeg'];
  $ekstensiGambar     =explode('.', $gbr7);
  $ekstensiGambar     =strtolower(end($ekstensiGambar));
  
  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
    # code...
    echo "<script>
   alert('yang diupload bukan gambar');</script> ";
   return false;
  }
  //CEK UKURAN GAMBAR
  if ($ukuran>1000000) {
    # code...
    echo "<script>
   alert('Ukuran gambar terlalu Besar');</script> ";
   return false;
  }
  //JIKA LOLOS PENGECEKAN
  move_uploaded_file('$lokasi','../../foto/'.$gbr7);
  return false;
  } 

  function upload8(){
  $gbr8     =$_FILES['file8']['name'];
  $ukuran   =$_FILES['file8']['size'];
  $error    =$_FILES['file8']['error'];
  $lokasi   =$_FILES['file8']['tmp_name'];
  //CEK APAKAH TIDAK ADA GAMBAR YANG DIUPLOAD
  if ($error ===4) {
    # code...
    echo "<script>
   alert('Pilih gambar terlebih dahulu');</script> ";
   return false;
  }
  //CEK YANG DIUPLOAD APAKAH GAMBAR
  $ekstensiGambarValid=['jpg','jpeg'];
  $ekstensiGambar     =explode('.', $gbr8);
  $ekstensiGambar     =strtolower(end($ekstensiGambar));
  
  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
    # code...
    echo "<script>
   alert('yang diupload bukan gambar');</script> ";
   return false;
  }
  //CEK UKURAN GAMBAR
  if ($ukuran>1000000) {
    # code...
    echo "<script>
   alert('Ukuran gambar terlalu Besar');</script> ";
   return false;
  }
  //JIKA LOLOS PENGECEKAN
  move_uploaded_file('$lokasi','../../foto/'.$gbr8);
  return false;
  }

  function upload9(){
  $gbr9     =$_FILES['file9']['name'];
  $ukuran   =$_FILES['file9']['size'];
  $error    =$_FILES['file9']['error'];
  $lokasi   =$_FILES['file9']['tmp_name'];
  //CEK APAKAH TIDAK ADA GAMBAR YANG DIUPLOAD
  if ($error ===4) {
    # code...
    echo "<script>
   alert('Pilih gambar terlebih dahulu');</script> ";
   return false;
  }
  //CEK YANG DIUPLOAD APAKAH GAMBAR
  $ekstensiGambarValid=['jpg','jpeg'];
  $ekstensiGambar     =explode('.', $gbr9);
  $ekstensiGambar     =strtolower(end($ekstensiGambar));
  
  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
    # code...
    echo "<script>
   alert('yang diupload bukan gambar');</script> ";
   return false;
  }
  //CEK UKURAN GAMBAR
  if ($ukuran>1000000) {
    # code...
    echo "<script>
   alert('Ukuran gambar terlalu Besar');</script> ";
   return false;
  }
  //JIKA LOLOS PENGECEKAN
  move_uploaded_file('$lokasi','../../foto/'.$gbr9);
  return false;
  }

   function upload10(){
  $gbr10    =$_FILES['file10']['name'];
  $ukuran   =$_FILES['file10']['size'];
  $error    =$_FILES['file10']['error'];
  $lokasi   =$_FILES['file10']['tmp_name'];
  //CEK APAKAH TIDAK ADA GAMBAR YANG DIUPLOAD
  if ($error ===4) {
    # code...
    echo "<script>
   alert('Pilih gambar terlebih dahulu');</script> ";
   return false;
  }
  //CEK YANG DIUPLOAD APAKAH GAMBAR
  $ekstensiGambarValid=['jpg','jpeg'];
  $ekstensiGambar     =explode('.', $gbr10);
  $ekstensiGambar     =strtolower(end($ekstensiGambar));
  
  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
    # code...
    echo "<script>
   alert('yang diupload bukan gambar');</script> ";
   return false;
  }
  //CEK UKURAN GAMBAR
  if ($ukuran>1000000) {
    # code...
    echo "<script>
   alert('Ukuran gambar terlalu Besar');</script> ";
   return false;
  }
  //JIKA LOLOS PENGECEKAN
  move_uploaded_file('$lokasi','../../foto/'.$gbr10);
  return false;
  }
 ?>