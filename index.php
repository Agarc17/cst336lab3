<?php
    include ("distribution.php");
    
    $deck = array();
    $testPlayer = array();
    $testScore = 0;
    
    resetDeck($deck);
    shuffleDeck($deck);
    distribute($testPlayer, $testScore, $deck);
    
    /*
    echo "testPlayer: <br>";
    var_dump($testPlayer);
    
    echo "testScore: <br>";
    var_dump($testScore);
    
    echo "deck: <br>";
    var_dump($deck);
    */

?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>

    </body>
</html>