<!-- ここからスタート。picのディスプレーを作る。 -->

<div class="image-wrapper">
  <?php
  $servername  = "localhost";
  $username    = "root";
  $password    = "root";
  $data        = mysqli_connect($servername,$username,$password);
  $db          = mysqli_select_db($data,"MISAO_DEMO");


  $myquery    = "select * from product";
  $NAME        = mysqli_query($data,$myquery);
  $num         = mysqli_num_rows($NAME);

  if ($num > 0) {

    while ($row = mysqli_fetch_array($NAME)) {

      $id = $row['id'];
      $cat= $row['categoryID'];


      echo "<div class='hover11' >";
      // echo "<div class='child'>";
      // echo "<h5  style='font-family:MS UI Gothic;'>".$row['name']."</h5>";
      // echo "<h5  style='float:left;padding:5px;border:1px solid black; width:85px;font-family:MS UI Gothic;'>".$row['description']."</h5>";
      // echo "</div>";

      echo "<a href='buying_page.php?cat_id=$id&cat=$cat'><img src ='image/".$row['imagename']."' alt ='image/".$row['imagename']."'></a><br>";
      echo "<h5 style='margin-left:10px;font-family:MS UI Gothic;'>".$row['name']."</h5>";
      echo "<h5 style='margin-left:10px;margin-bottom:10px;float:left;font-family:MS UI Gothic;'>Rs. ".$row['price']."</h5>";
      echo "<h5 style='margin-left:100px;margin-top:13px;padding:5px;margin-bottom:10px;border:1px solid black; width:85px;font-family:MS UI Gothic;'>".$row['description']."</h5>";

      echo "</div>";
   }
  }
  else {
    echo " not record";
  }
   ?>



</div>

<footer><h5 class="footer"><?php echo "Copyright &copy; MISAO Co.,ltd. All Rights Reserved." ?></h5></footer>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
