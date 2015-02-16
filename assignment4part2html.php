<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8"/>
  <title>Video Store</title>
  </head>

  <body>
    <form action = "addvideo.php" method = "POST"> 
    <p>Movie Name: <input type ="text" name = "name"> </p>
      <p>Category: <input type = "text" name = "category"> </p>
      <p>Length: <input type="number" name="length" min="1" max="500" /></p>
      <br>
      <input type = "submit" value = "Submit">
      </form>
      <form action="showvideos.php" method="POST">
      <br>
      <br>
  </form>

  <?php
    include 'showvideos.php';
    ?>
    
<form action="deletevideos.php" method="POST">
 <div align="center">
    <select name="sort">
      <option value="All">All Movies</option>
    </select>
  </div>

  <input type="submit" value="Delete All">
  <br>
</form>
  <br>
  </body>
</html>  