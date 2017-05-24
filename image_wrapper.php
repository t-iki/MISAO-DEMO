<!-- ここからスタート。picのディスプレーを作る。 -->

<div class="image-wrapper" style="height: 25%;width:100%;background-color: #EEEEEE;border-radius: 8px;">
  <h4 style="margin-bottom:30px; margin-left:20px;">Recommended for you</h4>
  <?php
$servername = "localhost";
$username   = "root";
$password   = "root";
$connect    =mysqli_connect($servername,$username,$password);
$db         =mysqli_select_db($connect,"MISAO_DEMO");

if(isset($_GET['cat'])){
  $id      =$_GET['cat'];
  $myquery ="select * from product where categoryID='".$id."'limit 3";
  // $myquery ="select * from product where categoryID=".$id;
  $run     =mysqli_query($connect,$myquery);
  $num         = mysqli_num_rows($run);

  if($num > 0){
    while($row = mysqli_fetch_array($run)){
      echo "<div style='height:100px; width:350px;margin:10px 10px 80px 10px;float:left;'>";
      echo "<img src ='image/".$row['imagename']."' style='width:45%; height:100%;float:left;'>";
      echo "<h5 style='margin-left:5px;font-family:MS UI Gothic;'>".$row['name']."</h5>";
      echo "<h5 style='margin-left:5px;margin-top:15px;float:left;font-family:MS UI Gothic;'>Rs. ".$row['price']."</h5>";
      echo "<h5 style='margin-left:20px;float:left;padding:3px;border:1px solid black; width:85px;font-family:MS UI Gothic;'>".$row['description']."</h5>";

      echo "</div>";
    }
  }
  else {
    echo " not recored";
  }
}
   ?>
</div>

<footer><h5 class="footer"><?php echo "Copyright &copy; MISAO Co.,ltd. All Rights Reserved." ?></h5></footer>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
