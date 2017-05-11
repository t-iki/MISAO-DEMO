<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
     $name =$a =$_GET['name'];
     $pass =$_GET['password'];
     $email =$_GET['email'];
     $gender =$_GET['gender'];
     $dob =$_GET['dob'];
     ?>

     <form  action="" method="POST">
       <table class="mainform" >
         <tr>
           <th><h4>Name</h4></th>
           <th  class="toplogin"><h4 style="padding:10px;"><?php echo $name ."<br>"; ?></h4></th>
         </tr>
         <tr>
           <th><h4>Password</h4></th>
           <th class="toplogin"><h4 style="padding:10px;"><?php echo $pass ."<br>"; ?></h4></th>
         </tr>
         <tr>
           <th><h4>E-mail</h4></th>
           <th  class="toplogin"><h4 style="padding:10px;"><?php echo $email."<br>"; ?></h4></th>
         </tr>
         <tr>
           <th><h4>Gender</h4></th>
           <th  class="toplogin"><h4 style="padding:10px;"><?php echo $gender."<br>"; ?></h4></th>
         </tr>
         <tr>
           <th><h4>Dob</h4></th>
           <th  class="toplogin"><h4 style="padding:10px;"><?php echo $dob."<br>"; ?></h4></th>
         </tr>
       </table>
      <input type="submit" name="submit" value="SUBMIT" class="submit">
     </form>

  </body>
</html>
