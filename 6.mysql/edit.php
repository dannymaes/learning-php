<?php
  include_once 'auth.php';
  include_once 'header.php';
  $conn = openConnection();
  $username = $_SESSION['username'];
  $sql_e = "SELECT * FROM hopper_2 WHERE username='$username'";
  $result = $conn->query($sql_e);
  $exist = $result->fetch_array();

//  echo $exist["username"];
?>

 <form action="" method="post">
   <label for="first_name">First name:</label><br>
   <input type="text" name="first_name" value="<?php echo $exist['first_name'] ?>"><br>
   <label for="last_name">Last name:</label><br>
   <input type="text" name="last_name" value="<?php echo $exist['last_name'] ?>"><br>
   <label for="username">Username:</label><br>
   <input type="text" name="username" value="<?php echo $exist['username'] ?>"><br>
   <label for="linkedin">Linkedin:</label><br>
   <input type="text" name="linkedin" value="<?php echo $exist['linkedin'] ?>"><br>
   <label for="github">Github:</label><br>
   <input type="text" name="github" value="<?php echo $exist['github'] ?>"><br>
   <label for="email">E-mail:</label><br>
   <input type="email" name="email" value="<?php echo $exist['email'] ?>"><br>
   <label for="preferred_language">Language:</label><br>
   <input type="text" name="preferred_language" value="<?php echo $exist['preferred_language'] ?>"><br>
   <label for="avatar">Image:</label><br>
   <input type="text" name="avatar" value="<?php echo $exist['avatar'] ?>"><br>
   <label for="video">Video:</label><br>
   <input type="text" name="video" value="<?php echo $exist['video'] ?>"><br>
   <label for="quote">Quote:</label><br>
   <input type="text" name="quote" value="<?php echo $exist['quote'] ?>"><br>
   <label for="quote_author">Author:</label><br>
   <input type="text" name="quote_author" value="<?php echo $exist['quote_author'] ?>"><br>
   <input type="submit" name="edit" value="Upload data"><br>
 </form>

 <?php

   if(isset($_POST['edit'])){
      $update_sql = "UPDATE hopper_2 set first_name = '$first', last_name = '$last', username = '$uid', linkedin = '$linkedin', github = '$github', email = '$email', preferred_language = '$language', avatar = '$img', video = '$video', quote = '$quote', quote_author = '$quote_author' WHERE username='$username'";
      $conn->query($update_sql);
       header("Location: index.php");
   }

  closeConnection($conn);
  include_once 'footer.php';
?>
