# cst336lab3

cardHandling.php 
  - resetDeck(&$deck)
    + Sets the cards values (1 - 52) in $deck back to a the (1-52) in ascending deck
    
  - shuffleDeck(&$deck) 
    + Randomizes the order of the cards in the deck
    
  - getNextCard(&$deck) 
    + Returns the value of the next card in the deck (value is from range 1 - 52), 
    + Also removes the card from the deck
    + Returns -1 if there is no more cards in the deck
    
  - getCardLink($card) 
    + Returns the path of the card that has value $card(numerical)
    + Returns an empty string if the card is not in the valid range (1 -52)
    
  - displayDeck(&$deck) 
    + Displays all of the cards in the deck
    + Used for testing purposes
    
distribution.php
  - distribute(&$player, &$points, &$deck)
    + Distributes cards to the player and adds to their points