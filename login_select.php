<?php

  $servername = "localhost";
  $username   = "root";
  $password   = "";
  $connect    = mysqli_connect($servername,$username,$password) ;
  $db         = mysqli_select_db($connect,"MISAO_DEMO");


  $name = $_POST['n'];
  $passwords = $_POST['p'];

  $mysql = "select * from user where username='".$name."' and password='".$passwords."'";
  $r = mysqli_query($connect,$mysql);
  $abc = mysqli_num_rows($r);
  if($abc>0)
  {
    echo "success";
  }
  else {
    # code...
    echo "error";
  }

 ?>
