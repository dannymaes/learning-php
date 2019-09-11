<?php
   include_once 'connection.php';
   include_once 'header.php';
   $conn = openConnection();
 ?>

    <table>
<?php
    $sql = "SELECT first_name, last_name, username, email, preferred_language, github FROM hopper_2";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

      switch ($row["preferred_language"]){
        case 'nl':
           $row["preferred_language"]= '<img src="images/belgium.svg">';
        break;
        case 'NL':
           $row["preferred_language"]= '<img src="images/belgium.svg">';
        break;
        case 'en':
           $row["preferred_language"]= '<img src="images/english.svg">';
        break;
        case 'EN':
           $row["preferred_language"]= '<img src="images/english.svg">';
        break;
        case 'fr':
           $row["preferred_language"]= '<img src="images/france.svg">';
        break;
        default :

      }
        $git = $row["github"];
        $frstName = $row["username"];
        echo "<tr><td><a href='profile.php?username=$frstName'> " . $row["first_name"]. " </a></td><td> " . $row["last_name"]. "</td><td> " . $row["username"] . "</td><td>" . $row["email"]. "</td><td> " . $row["preferred_language"]. "</td><td><a href='$git'> " .$row["github"]. "</a></td></tr>";
    }
  } else {
      echo "0 results";
  }

     if(isset($_SESSION['username'])){
       $sql_user ="SELECT * FROM hopper_2 WHERE username ='$user_log'";
       echo "<tr><td>" . $_SESSION['username'] . "</td></tr>";
     }else {
       header("Location: login.php");
     }
 ?>
   </table>

  <?php
        closeConnection($conn);
        include_once 'footer.php';
  ?>
