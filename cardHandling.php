<?php
    
    // Set the values of $suit to the directory names for the matching set of cards
    $suit = array("clubs", "diamonds", "hearts", "spades");

    // Fills the $deck array with the value of each card (1-52)
    function resetDeck(&$deck) {
        $deck = array();
        
        for ($i = 1; $i <= 52; $i++) {
            $deck[] = $i;   
        }

    }
    
    // Shuffle the $deck array so the cards are in random order
    function shuffleDeck(&$deck) {
        
        shuffle($deck);
    }
    
    // Gets a card from the deck (1 - 52)
    function getNextCard(&$deck) {
        $card = -1;
        
        // If there is a card in the deck, the next card will be chosen
        if (count($deck) > 0) {
            // Grab the last card on the deck
            $card = array_pop($deck);
        }
        
        // Returns the next card, -1 if the deck was empty 
        return $card;
    }
    
    // Get the path to the next card in the deck
    function getCardLink($card) {
        global $suit;
        
        // If the card is in the range (1 - 52), a card link will be returned
        if ($card >= 0 && $card <= 52) {
            
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
        // If the card number is out of range, an empty string will be returned
        else {
            return "";   
        }
    }
    
    // Display the deck of cards
    function displayDeck(&$deck) {
        
        for ($i = 1; $i <= 52; $i++) {
            
            $card = getNextCard($deck);
            $link = getCardLink($card);
            echo "<img src='$link' >";
            
            if ($i % 13 == 0) {
                echo "<br>";   
            }
        } 
    }
    
    /*
    $deck = array();
    resetDeck($deck);
    //shuffleDeck($deck);
    displayDeck($deck);
    */
?>