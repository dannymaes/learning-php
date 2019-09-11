<?php
  include_once 'header.php';
  include_once 'auth.php';
?>
  <form class="login" action="" method="post">
      <label for="username_log">E-mail / username: </label>
      <input type="text" name="username_log"><br><br>
      <label for="password_log">Password: </label>
      <input type="password" name="password_log"><br><br>
      <input type="submit" name="login" value="submit">
  </form>
      <p>
            Not registered ?
        <a href="register.php">Click here to register</a>
     </p>

 <?php
include_once 'footer.php';
  ?>
