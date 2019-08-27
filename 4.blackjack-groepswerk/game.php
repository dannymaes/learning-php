<?php
include 'blackjack.php';
$player = new Blackjack();
$dealer = new Blackjack();
$_SESSION["playerScore"];
$_SESSION["dealerScore"];
$_SESSION["result"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blackjack Game</title>
</head>

<body>
    <div>
        <?php 
        if($_SESSION["dealReady"] === true){
            $player->winDecider();
            echo ($_SESSION["result"]);
        }
        
    ?>
    </div>
    <div class="playField">
        <!-- ***************    PLAYER AREA   *****************   -->
        <div class="player" style="height:100; width:150; border: 2px solid black; overflow: auto;">
            <p>Player</p>
            <?php
          if(isset($_POST["playGame"])){
            for ($i=0;$i<2;$i++){
                $_SESSION["playerScore"][] = $player->randomCard("playerScore");
            }
            print_r($_SESSION["playerScore"]);
          }

          if(isset($_POST["hitPlayer"])){
            $_SESSION["playerScore"][] = $player->randomCard("playerScore");
            print_r($_SESSION["playerScore"]);
          }
          
          if (isset($_POST["stand"])){
            print_r($_SESSION["playerScore"]);
            var_dump( array_sum($_SESSION["playerScore"]));
          }

          if(isset($_POST["surrender"])) {
            print_r($_SESSION["playerScore"]);
          }

          if($_SESSION["dealReady"] === true){
            print_r($_SESSION["playerScore"]);
            var_dump( array_sum($_SESSION["playerScore"]));
          }

        ?>
        </div>
        <!-- ***************    AREA VOOR FUNCTIE HIT  (NOG AAN TE MAKEN ) ********** -->
        <div class="hitPlayer">
            <div class="score">
                <p>SCORE</p>
                <?php
                
            ?>
            </div>
            <!-- ***************  AREA for Surrender and Stand ***************-->
            <div class="player">
                <?php 
            ?>
            </div>
            <!-- ***************     FORM for buttons      ************* -->
            <form method="post">
                <input type="submit" value="Hit" name="hitPlayer">
                <input type="submit" name="stand" value="Stand">
                <input type="submit" name="surrender" value="surrender">              
            </form>
        </div>

        <!--  ***********************************************************************  -->
        <!--  ***************    DEALER AREA  *****************     -->

        <div class="dealer" style="height:100; width:150; border: 2px solid black; overflow: auto">
            <p>Dealer</p>

            <?php
            if(isset($_POST["playGame"])){
                $_SESSION["dealerScore"][] = $dealer->randomCard("dealerScore");
                print_r($_SESSION["dealerScore"]);
            }else if(isset($_POST["hitPlayer"])){
                print_r($_SESSION["dealerScore"]);
              }
            else  if (isset($_POST["stand"])){
                $dealer->stand();
                var_dump( array_sum($_SESSION["dealerScore"]));
            }else if (isset($_POST["surrender"])) {
                $dealer->surrender();
            }

            if($_SESSION["dealReady"] === true){
                print_r($_SESSION["dealerScore"]);
                var_dump( array_sum($_SESSION["dealerScore"]));
              }
      
        ?>
        </div>
    </div>

    <!--  ******* BUTTON OM TERUG TE GAAN NAAR HOME.PHP ( DELETE NA TESTEN !!!!)  -->

    <form action="home.php" method="post">
        <input type="submit" value="Go Back to Home" name="playGame">

    </form>
</body>

</html>