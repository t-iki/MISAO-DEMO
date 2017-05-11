<?php
$servername    =  "localhost";
$username      =  "root";
$password      =  "";
$data          = mysqli_connect($servername,$username,$password);
$db            = mysqli_select_db($data,"MISAO_DEMO");


$NAME = $_POST['name'];

$IMAGE_a = $_FILES['file']['name'];
$IMAGE_b = $_FILES['file']['size'];
$IMAGE_c = $_FILES['file']['type'];
$IMAGE_d = $_FILES['file']['tmp_name'];

$PRICE = $_POST['price'];
$DESCRIPTION = $_POST['description'];
$CATEGORY = $_POST['category'];

if (empty($NAME)) {
  echo "enter the name";
}elseif (!preg_match('/^[a-zA-Z]+$/',$NAME)) {
echo "enter the charater";
}elseif (empty($PRICE)) {
  echo "enter the price";
}elseif (!preg_match('/^[0-9]+$/',$PRICE)) {
  echo "select the correct price";
}elseif (empty($DESCRIPTION)) {
  echo "enter the description";
}elseif (empty($CATEGORY)) {
  echo "enter the category";
}elseif (!preg_match('/^[0-6]+$/',$CATEGORY)) {
  echo "select the correct category";
}else{
  if (isset($_FILES['file']) && $IMAGE_a != "" ) {

    if($IMAGE_c == 'image/jpeg' || $IMAGE_c == 'image/png' || $IMAGE_c == 'image/jpg' || $IMAGE_c == 'image/gif' )
    {

      if($IMAGE_b<=2000000)
      {
        if(file_exists("image/".$IMAGE_a))
        {
          $rand = rand(0,99999);
          $IMAGE_a = $rand."_".$IMAGE_a;
          move_uploaded_file($_FILES['file']['tmp_name'],"image/".$IMAGE_a);
          $mysql ="insert into product(id,name,imagename,price,description,categoryID)VALUES('','".$NAME."','".$IMAGE_a."','".$PRICE."','".$DESCRIPTION."','".$CATEGORY."')";
          $name =mysqli_query($data,$mysql);
        }
        else {
          # code...
          move_uploaded_file($_FILES['file']['tmp_name'],"image/".$IMAGE_a);
          $mysql ="insert into product(id,name,imagename,password,price,description,categoryID)VALUES('','".$NAME."','".$IMAGE_a."','".$PRICE."','".$DESCRIPTION."','".$CATEGORY."')";
          $name =mysqli_query($data,$mysql);
        }

      }else {
        echo "cheaking the size";
      }
    }

    else
    {
      echo "not corect choosing onther image type";
    }

  }

  else {
    echo "choosing file";
  }
}







 ?>
