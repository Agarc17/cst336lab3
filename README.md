# cst336lab3

cardHandling.php 
  - resetDeck()
    + Sets the cards values (1 - 52) in the deck back to a full ascending deck
    
  - shuffleDeck() 
    + Randomizes the order of the cards in the deck
    
  - getNextCard() 
    + Returns the value of the next card in the deck (value is from range 1 - 52)
    + Returns -1 if there is no more cards in the deck
    
  - getCardLink($card) 
    + Returns the path of the card that has value $card(numerical)
    + Returns an empty string if the card is not in the valid range (1 -52)
    
  - displayDeck() 
    + Displays all of the cards in the deck
    + Used for testing purposes
    
  
