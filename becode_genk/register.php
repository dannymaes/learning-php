<?php
   include_once 'auth.php';
   include_once 'header.php';
 ?>
     <form action="" method="post">
       <label for="first_name">First name:</label><br>
       <input type="text" name="first_name" value=<?php echo $_POST['first_name'] ?>><br>
       <label for="last_name">Last name:</label><br>
       <input type="text" name="last_name" value=<?php echo $_POST['last_name'] ?>><br>
       <label for="username">Username:</label><br>
       <input type="text" name="username" value=<?php echo $_POST['username'] ?>><br>
       <label for="linkedin">Linkedin:</label><br>
       <input type="text" name="linkedin" value=<?php echo $_POST['linkedin'] ?>><br>
       <label for="github">Github:</label><br>
       <input type="text" name="github" value=<?php echo $_POST['github'] ?>><br>
       <label for="email">E-mail:</label><br>
       <input type="email" name="email" value=<?php echo $_POST['email'] ?>><br>
       <label for="preferred_language">Language:</label><br>
       <input type="text" name="preferred_language" value=<?php echo $_POST['preferred_language'] ?>><br>
       <label for="avatar">Image:</label><br>
       <input type="text" name="avatar" value=<?php echo $_POST['avatar'] ?>><br>
       <label for="video">Video:</label><br>
       <input type="text" name="video" value=<?php echo $_POST['video'] ?>><br>
       <label for="quote">Quote:</label><br>
       <input type="text" name="quote" value=<?php echo $_POST['quote'] ?>><br>
       <label for="quote_author">Author:</label><br>
       <input type="text" name="quote_author" value=<?php echo $_POST['quote_author'] ?>><br>
       <label for="password">Password:</label><br>
       <input type="password" name="password"><br>
       <label for="$pswd-confrm">Password confirm:</label><br>
       <input type="password" name="pswd-confrm"><br>
       <input type="submit" name="submit" value="Register"><br>
     </form><br>
  <!--   button go back to Login page :  -->
     <form action="" method="post">
       <input type="submit" name="login2" value="Go to Login page">
     </form>
  <?php
     include_once 'footer.php';
   ?>
