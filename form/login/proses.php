<?php

error_reporting(0); 
require 'koneksi.php';

if(isset($_POST["login"]) ){
	 $username2 = $_POST["Username"];
	 $password2 = $_POST["Password"];
   $hak_akses2 = $_POST["level_user"];
$query2= mysqli_query($conn,"SELECT * FROM tb_akun WHERE Username='".$username2."' AND Password='".$password2."'AND level_user='".$hak_akses2."'" );

        $data2 = mysqli_fetch_array($query2);
        $username_pelogin2=$data2['username'];
        $hak_akses2 = $data2['level_user'];
                  if(mysqli_num_rows($query2)==1){
                              if($hak_akses2 =='kepala'){

                                    echo "<script>
                                          alert('Anda berhasil login sebagai KEPALA !');
                                          document.location.href = '../kepala/utama.php';
                                          </script>";
                              }else if($hak_akses2 =='admin'){

                                          echo "<script>
                                          alert('Anda berhasil login sebagai ADMIN !');
                                          document.location.href = '../admin/index.php';
                                          </script>";
            
                              }else if($hak_akses2 =='user'){

                                          echo "<script>
                                          alert('Anda berhasil login sebagai USER !');
                                          document.location.href = '../user/utama.php';
                                          </script>";
                                    }
                              }else{

                                          echo "<script>
                                                alert('Anda GAGAL LOGIN !');
                                                document.location.href = '../utama/m_utama.php';
                                                </script>";
                                          
                                                }
                        
                          }
                                    

 ?>