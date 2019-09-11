<?php include 'index.php'; ?>
<?php
  $name =  htmlentities($_POST['username']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>POST PHP</title>
</head>
<body>
   <form  method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
     <label for="username">Username: </label>
     <input type="text" name="username" id="username" required>
     <input type="submit" value="Submit">
   </form>
   <?php
   if( isset($_POST['username'])){
     echo "<h1> Welcome $name</h1>";
   }else{
   }
   ?>
</body>
</html>
