<?php
   include_once 'connection.php';
   include_once 'header.php';
   $conn = openConnection();

        $name = $_GET['username'];
        $sql = "SELECT * FROM hopper_2 WHERE username = '$name'";
        $result = $conn->query($sql);
    // check if user is same in database
?>
   <div class="profile">
    <?php
    $row = $result->fetch_array($sql);

  $row = mysqli_fetch_array($result);

            echo "<p>" . $row['first_name'] . "</p>";
            echo "<p>" . $row['last_name'] . "</p>";
            echo "<p>" . $row['username'] . "</p>";
            echo "<p>" . $row['email'] . "</p>";
            echo "<p>" . $row["preferred_language"] . "</p>";
            echo "<p>" . $row["github"] . "</p>";
            echo "<p>" . $row["avatar"] . "</p>";
            echo "<p>" . $row["quote"] . "</p>";
        //    $username_test = $row['username'];

    if($_SESSION['username'] == $row['username']){
      // edit and delete button
      echo '
            <form action="" method="post">
            <input type="submit" name="logout" value="Log out">
            </form><br>
            <form action="" method="post">
            <input type="submit" name="edits" value="Edit profile">
            </form><br>
            <form action="" method="post">
            <input type="submit" name="delete" value="Delete profile"><br>
            </form>
            ';
    }
    if(isset($_POST['logout'])){
      session_destroy();
      header("Location: login.php");
    }
    if(isset($_POST['edits'])){
      header("Location: edit.php");
    }
    if(isset($_POST['delete'])){
       echo '<p> Are you sure you want to delete your profile ?</p><br>
             <form action="" method="post">
               <input type="submit" name="delete_yes" value="Yes">
             </form><br>
             <form action="" method="post">
               <input type="submit" name="delete_no" value="No">
             </form>
             ';
    }
    if(isset($_POST['delete_yes'])){
      $sql = "DELETE FROM hopper_2 WHERE first_name = '$name'";
      $conn->query($sql);
      session_destroy();
      header("Location: register.php");
    }
    if(isset($_POST['delete_no'])){
      header("Location: index.php");
    }

  //  echo $_SESSION['username'];
    ?>
      <img src="https://belikebill.ga/billgen-API.php?default=1&name=<?php echo $name ?>&sex=<?php echo $img ?>" />
   </div>

<?php
   closeConnection($conn);
    include_once 'footer.php';
  ?>
