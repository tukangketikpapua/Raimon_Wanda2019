<?php
 
if(isset($_POST["login_user"]) ){
   $username2 = $_POST["Username"];
   $password2 = $_POST["Password"];
                              if($username2 =='user' && $password2=='user2019'){

                                    echo "<script>
                                          alert('Login Anda berhasil !');
                                          document.location.href = '../utama/input/i_baru.php';
                                          </script>";
                              }else{

                                          echo "<script>
                                                alert('Anda GAGAL LOGIN !');
                                                document.location.href = '../utama/m_utama.php';
                                                </script>";
                                          
                                                }
                            
                            }

 ?>