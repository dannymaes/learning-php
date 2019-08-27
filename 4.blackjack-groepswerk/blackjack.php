<?php
session_start();
$_SESSION["cards"] = ['A',2,3,4,5,6,7,8,9,10,10,10,10];
class Blackjack{
    
    public $score;
    /* ********** Create Random Card  ***********  */
    public function randomCard($active){
        return $this->aceCheck($active);
    }
    /*  ********** Start Game Player   **********   */
    public function startPlayer(){
           return $this->randomCard("playerScore");
    }
    
    /*  ********** Start Game Dealer  **********   */
    public function startDealer(){
        return $this->randomCard("dealerScore");;
    }

    public function surrender() {
        while (array_sum($_SESSION["dealerScore"]) < 15){
            $_SESSION["dealerScore"][] = $this->aceCheck("dealerScore");
            if (array_sum($_SESSION["dealerScore"]) >= 15){
                echo "<div id=dealer>",print_r($_SESSION["dealerScore"],true),"</div><br/>";               
            }
        };

        $_SESSION["loser"] = true;
        $_SESSION["dealReady"] = true;
        header("Refresh:0");

        // make sure dealer hIT loop runs and shows end result.
    }

    function stand(){
        while (array_sum($_SESSION["dealerScore"]) < 15){
            $_SESSION["dealerScore"][] = $this->aceCheck("dealerScore");
            if (array_sum($_SESSION["dealerScore"]) >= 15){
                echo "<div id=dealer>",print_r($_SESSION["dealerScore"],true),"</div><br/>";               
            }
        };
        $_SESSION["dealReady"] = true;
        header("Refresh:0");

        // if ($this->score === 'A'){
        //     $this->score = "1 or 11";
        // }
    }
    
    function aceCheck($active) {
        $check = $_SESSION["cards"][mt_rand(0,count($_SESSION["cards"])-1)];
        if ($check === 'A'){
            echo "ace";
            if(array_sum($_SESSION[$active]) + 11 < 22){
                $check = 11;
                return $check;
            } else {
                $check = 1;
                return $check;
            }
        } else {
            return $check;
        }
    }
    
    function winDecider(){
        if(array_sum($_SESSION["playerScore"]) > 21 || $_SESSION["loser"] === true){
           $_SESSION["result"] = " YOU LOSE ";
        }else if(array_sum($_SESSION["playerScore"]) > array_sum($_SESSION["dealerScore"]) || array_sum($_SESSION["dealerScore"]) > 21 ){
            $_SESSION["result"] =  " YOU WIN ";
        }else if(array_sum($_SESSION["playerScore"]) < array_sum($_SESSION["dealerScore"])){
            $_SESSION["result"] = " DEALER WINS ";
        }else if(array_sum($_SESSION["playerScore"]) === array_sum($_SESSION["dealerScore"])){
            $_SESSION["result"] = " TIE ";
        }
    }
}

?>