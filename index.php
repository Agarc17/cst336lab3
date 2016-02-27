<?php
    include ("cardHandling.php");
    include ("distribution.php");
    include ("player.php");
    
    $deck = array();
    
    // These are the player's hands
    $playerOneHand = array();
    $playerTwoHand = array();
    $playerThreeHand = array();
    $playerFourHand = array();
    $playerHands = array($playerOneHand, $playerTwoHand, $playerThreeHand, $playerFourHand);
    
    // These are the player's scores for their hand
    $scoreOne = 0;
    $scoreTwo = 0;
    $scoreThree = 0;
    $scoreFour = 0;
    $playerScores = array($scoreOne, $scoreTwo, $scoreThree, $scoreFour);
    
    // These are the names of the players
    $playerOne = getRandomPlayer();
    $playerTwo = getRandomPlayer();
    $playerThree = getRandomPlayer();
    $playerFour = getRandomPlayer();
    $playerNames = array($playerOne, $playerTwo, $playerThree, $playerFour);
    
    // Create the deck of cards and distribute cards to the players (also calculates their scores)
    resetDeck($deck);
    shuffleDeck($deck);
    distribute($playerHands[0], $playerScores[0], $deck);
    distribute($playerHands[1], $playerScores[1], $deck);
    distribute($playerHands[2], $playerScores[2], $deck);
    distribute($playerHands[3], $playerScores[3], $deck);
    
    /*
    echo "testPlayer: <br>";
    var_dump($testPlayer);
    
    echo "testScore: <br>";
    var_dump($testScore);
    
    echo "deck: <br>";
    var_dump($deck);
    */

    // Display the players
    //displayPlayers($playerHands, $playerScores, $playerNames);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8" />
        <link href = "lesly.css" rel="stylesheet" />
        <title> Silverjack </title>
    </head>
    
    <body>
        <main>
            
       	<img src = "../img/silverjack.jpg" alt="Silverjack Banner" title="Silverjack Banner" />
       	<br /> <br />
       	
       	<center>
       	    <?=displayPlayers($playerHands, $playerScores, $playerNames);?>
       	</center>
       	
       	<br />
       	<figure>
       	    <img src = "../img/table.png" alt="Silverjack Table" title="Silverjack Table" />
       	</figure>
       	
       </main>
    </body>
</html>