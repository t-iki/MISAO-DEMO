<div class="main-wrapper">
    <div class="main-left">
      <?php
      $servername  = "localhost";
      $username    = "root";
      $password    = "root";
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

        ?>

    </div>
    <div class="main-right">
      <div class="right-top">
        <div id="top-left">
         <?php echo "<h3 class='b_font'>".$row['name']."</h3>" ?>
         <?php echo "<h5 class='b_font'>RS<span id='pro_price'>".$row['price']."</span></h5>" ?>
        </div>
        <div class="top-right">
        <?php echo "<h5 class='b_description'>".$row['description']."</h5>"?>
        </div>
      </div>
      <div class="right-mid">
       <div class="right-count">
         <table>
           <tr>
             <th><h5 style="font-family:monospace;margin-top: 30px;">Quantity :</h5></th>
             <th><select id="quant" onclick="quant()" style="margin-top: 20px;">
               <option value="1">1</option>
               <option value="2">2</option>
               <option value="3">3</option>
               <option value="4">4</option>
               <option value="5">5</option>
               <option value="6">6</option>
               <option value="7">7</option>
               <option value="8">8</option>
               <option value="9">9</option>
               <option value="10">10</option>
             </select></th>
           </tr>
         </table>
       </div>
      　 <div class="right-total"><?php echo "<h5 >RS.<span id='TOTAL'>".$row['price']."</span</h5>" ?></div>
      </div>
      <div class="right-buttom">
       <button type="button" class="btn btn-warning" id="add">Add to cart</button>
      </div>

    </div>

    <?php
  }
}
else {
  echo " not record";
}

}
?>

</div>
