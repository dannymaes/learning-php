<?php include 'index.php'; ?>

<?php
if(isset($_POST['submit'])){
  $comment = htmlentities($_POST['comment']);

  setcookie('comment', $comment, time()+3600);   // time the cookie will be stored

  header('Location: test.php');
};
?>
<section>
  <form  method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
    <label for="comment">Comment: </label>
    <textarea  name="comment" id="comment"></textarea>
    <input type="submit" name="submit" value="Submit">
  </form>
</section>
<section>
  <p id="cookieComment"><?php

     if(isset($_COOKIE['comment'])){
       echo  $_COOKIE['comment'];
     }else{
       echo 'No cookies ! ';
     }

   ?></p>

</section>
