
<?php

    // Each player get their own array represented by one's and zero's. 
    // One meaning that they have that card and zero meaning that they don't have it. 
    // The deck itself consist of all one's, and players have all zero's at first. 
    // Also stored their points in their respective varibales. 
    
    /*
    $deck = array();
    $player1 = array();
    $p1 = 0;
    $player2 = array();
    $p2 = 0;
    $player3 = array();
    $p3 = 0;
    $player4 = array();
    $p4 = 0;
    
    
    // 0 is false and 1 is true
    
    for ($i = 1; $i < 53; $i++) {
            $deck[$i] = 1;
            $player1[$i] = 0;
            $player2[$i] = 0;
            $player3[$i] = 0;
            $player4[$i] = 0;
    
    }
    */
    
    // give each person a there cards 
    function distribute(&$player, &$points, &$deck){
        $done = false;
        
        while (!$done)
        {   
            $card = getNextCard($deck);
            array_push($player, $card);
            
            $cardPoints = $card % 13;
            if ($cardPoints == 0) {
                $cardPoints = 13;   
            }
            
            $points += $cardPoints;
        
            // make sure that people end 
            if($points >= 35)
            {
               $done = true;
            }
        }
    }
    /*
    distribute($player1, $deck, $p1);
    //echo $p1 . "<br />". print_r($player1). "<br />";
    distribute($player2, $deck, $p2);
    //echo $p2 . "<br />". print_r($player2). "<br />";
    distribute($player3, $deck, $p3);
    //echo $p3 . "<br />". print_r($player3). "<br />";
    distribute($player4, $deck, $p4);
    //echo $p4 . "<br />". print_r($player4). "<br />";
    */

?>