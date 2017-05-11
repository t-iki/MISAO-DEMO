<?php



          $servername    =  "localhost";
          $username      =  "root";
          $password      =  "";
          $data          = mysqli_connect($servername,$username,$password);
          $db            = mysqli_select_db($data,"MISAO_DEMO");

          $name =$_POST['n'];
          $password =$_POST['p'];
          $email =$_POST['e'];
          $gend =$_POST['g'];
          $dob =$_POST['d'];

          $mysql ="insert into user(id,username,password,email,gender,date)VALUES('','".$name."','".$password."','".$email."','".$gend."','".$dob."')";
          $name = mysqli_query($data,$mysql);

          if($name)
          {
          echo "correct create";
          }
          else {
            echo "connection as not create";

          }


        ?>
