<?php include 'blackjack.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Blackjack Home</title>
</head>

<body>
  <form action="game.php" method="post">
    <input type="submit" value="Play New Game" name="playGame">
  </form>
  <?php
    if(isset($_POST["playGame"])){
        session_unset();
    }
    ?>
</body>

</html>