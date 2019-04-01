<?php
 
if(isset($_POST["logdaftar"]) ){
   $username2 = $_POST["Username"];
   $password2 = $_POST["Password"];
                              if($username2 =='user' && $password2=='user2019'){

                                    echo "<script>
                                          alert('Login Anda berhasil !');
                                          document.location.href = 'input/daftar_baru.php';
                                          </script>";
                              }else{

                                          echo "<script>
                                                alert('Anda GAGAL LOGIN !');
                                                document.location.href = 'f_utama.php';
                                                </script>";
                                          
                                                }
                            
                            }

 ?>