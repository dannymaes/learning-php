<?php
   include_once 'connection.php';
   $conn = openConnection();

// validate register :

   $first = $_POST['first_name'];
   $last = $_POST['last_name'];
   $uid = $_POST['username'];
   $linkedin = $_POST['linkedin'];
   $github = $_POST['github'];
   $email = $_POST['email'];
   $language = $_POST['preferred_language'];
   $img = $_POST['avatar'];
   $video = $_POST['video'];
   $quote = $_POST['quote'];
   $quote_author = $_POST['quote_author'];
   $password = $_POST["password"] ;
   $pswdconfrm = $_POST['pswd-confrm'];
   $hash = password_hash($password, PASSWORD_DEFAULT);

   if(isset($_POST['submit'])){

     if ($password !== $pswdconfrm) {
        $error_msg[] = 'Invalid password !';
     }
     if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
        $error_msg[] = 'Invalid E-mail !';
     }

     $sql_u = "SELECT * FROM hopper_2  WHERE username ='$uid'";   // check if username already exist
     $res_u = mysqli_query($conn, $sql_u);
     if (mysqli_num_rows($res_u) > 0) {
         $error_msg[] = 'Sorry... username already taken';
     }
     if(empty($error_msg)){

         $sql = "INSERT INTO hopper_2 (first_name, last_name, username, password, linkedin, github, email, preferred_language, avatar, video, quote, quote_author) VALUES ('$first', '$last', '$uid', '$hash', '$linkedin', '$github', '$email', '$language', '$img', '$video', '$quote', '$quote_author');";
         if(mysqli_query($conn, $sql)) {
                 echo mysqli_error($conn);
                header("Location: profile.php?username=$uid");
     }
   }else{ print_r ($error_msg);}
  }
//  Login check :
    $user_log = $_POST['username_log'];
    $password_log = $_POST['password_log'];

    if(isset($_POST['login'])){
         $sql = "SELECT * FROM hopper_2 WHERE username = '$user_log'";
         $result = $conn->query($sql);
      }
     if ($result->num_rows > 0) {
        // see if user exist and password is correct :
        $row = $result->fetch_assoc();
  //       echo "id: " . $row["id"]. " - Name: " . $row["first_name"]. " " . $row["password"]. "<br>";
        }
     if($user_log == $row['username'] && password_verify($password_log, $row['password'])){
                            $_SESSION['username']= $user_log;
                            header("Location: profile.php?username=$user_log");
     }else{
       echo "user don't exist or password invalid !!!";
     }
 //  button on register page to get you to the login page :
            if(isset($_POST['login2'])){
              header("Location: login.php");
            }
    $conn->close();
?>
