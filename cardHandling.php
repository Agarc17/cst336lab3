<?php
    $suit = array();
    $deck = array();
    
    // Set the values of $suit to the directory names for the matching set of cards
    $suit = array("clubs", "diamonds", "hearts", "spades");

    // Fills the $deck array with the value of each card (1-52)
    function resetDeck() {
        global $deck;
        $deck = array();
        
        for ($i = 1; $i <= 52; $i++) {
            $deck[] = $i;   
        }

    }
    
    // Shuffle the $deck array so the cards are in random order
    function shuffleDeck() {
        global $deck;
        
        shuffle($deck);
    }
    
    // Get the path to the next card in the deck
    function getNextCardLink() {
        global $suit;
        global $deck;
        
        // If there is a card in the deck, a card link will be returned
        if (count($deck) > 0) {
            // Grab the last card on the deck
            $card = array_pop($deck);
            
            // Calculate the card's file number and the suit it belongs to
            $cardNumber = $card % 13;
            $suitName = $suit[$card / 13];
            
            // When the card is a multiple of 13, the $cardNumber and $suitName
            // need to be adjusted
            if ($cardNumber == 0) {
                $cardNumber = 13;
                $suitName = $suit[($card / 13) - 1];
            }
            
            return "cards/$suitName/$cardNumber.png";
        }
        // If there are no cards, an empty string will be returned
        else {
            return "";   
        }
    }
    
    
    // Display the deck of cards
    function displayDeck() {
        
        for ($i = 1; $i <= 52; $i++) {
            
            $link = getNextCardLink();
            echo "<img src='$link' >";
            
            if ($i % 13 == 0) {
                echo "<br>";   
            }
        } 
    }
    
    // Fill and shuffle the deck
    resetDeck();
    //shuffleDeck();
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Cards </title>
        <meta charset="utf-8">
    <head>
    
    <body>
        <h1> Deck of Cards </h1><br>
        <?=displayDeck()?>
    </body>
</html>