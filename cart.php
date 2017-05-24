<?php
//後回しにする
$servername = "localhost";
$username   = "root";
$password   = "";
$connect      = mysqli_connect($servername,$username,$password);
$db         = mysqli_select_db($connect,"MISAO_DEMO");

$mysql = "select * from cart";
$NAME = mysqli_query($connect,$mysql);
$abc  = mysqli_num_rows($NAME);
 ?>
