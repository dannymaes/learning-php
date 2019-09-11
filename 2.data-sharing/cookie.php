<?php include 'index.php'; ?>

 <section>
    <form  method="post "action="" onsubmit="setMessage()">
        <label for="message">Message:</label>
        <textarea id="message" name="message"></textarea>
        <input type="submit" name="submit"  value ="Set Message">
    </form>
</section>
<section>
      <form  method="post" action=""  onsubmit="">
        <input type="submit" name="submit" value="Get Message">
      </form>
        <p>
          <?php
          if(isset($_COOKIE['message'])){
            echo $_COOKIE['message'];
          }
          ?>
       </p>
</section>
<script>
    function setMessage(){
        document.cookie = "message="+document.getElementById("message").value;
    };
</script>
