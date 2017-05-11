<!DOCTYPE html>
<!-- lyoutだけ残っている。 -->
<html>
  <head>
    <meta charset="utf-8">
    <title>FORM</title>
  </head>
  <body>
    <header style="text-align:center;">
      <h2>admini.php</h2>
    </header>
    <div class="wrapper" style="height:800px;width:100%;">
      <table style="margin:0 auto;">
        <form class="" action="admini.php" method="post" enctype="multipart/form-data">
          <tr>
            <td>NAME</td>
            <td><input type="text" name="name"></td>
          </tr>
          <tr>
            <td>IMAGE</td>
            <td><input type="file" name="file"></td>
          </tr>
          <tr>
            <td>PRICE</td>
            <td><input type="text" name="price" ></td>
          </tr>
          <tr>
            <td>DESCRIPTION</td>
            <td><input type="text" name="description" ></td>
          </tr>
          <tr>
            <td>CATEGORY_ID</td>
            <td><input type="text" name="category" ></td>
          </tr>
          <tr>
            <th><input type="submit" name="submit" value="submit"></th>
          </tr>
      </form>
    </table>
  </body>
</html>
