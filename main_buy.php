<div class="main-wrapper">
    <div class="main-left">
      <?php
      $servername  = "localhost";
      $username    = "root";
      $password    = "";
      $connect     = mysqli_connect($servername,$username,$password);
      $db          = mysqli_select_db($connect,"MISAO_DEMO");

      if (isset($_GET['cat_id'])) {
        $id         = $_GET['cat_id'];
        $myquery    = "select * from product where id=".$id;
        $run        = mysqli_query($connect,$myquery);
        $num        = mysqli_num_rows($run);

      if($num > 0){
        while($row = mysqli_fetch_array($run)){
         echo "<div class='dis_div' >";
         echo "<img src ='image/".$row['imagename']."'><br>";
         echo "</div>";
        }
      }
      else {
        echo " not record";
      }

      }
      ?>
    </div>
    <div class="main-right"></div>



</div>
