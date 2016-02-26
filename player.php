<?php
    
    // Array that holds all of the player's names
    $playerNames = array("Anita", "Araceli", "Benito", "Christian", "Clarissa", "Daniel",
                         "Eliasar", "Gabriel", "Hugo", "Joseph", "Josie", "Juan", "Karina",
                         "Laura", "Lesly", "Martin", "Miriam", "Naelin", "Noemi", "Pearce",
                         "Pepe", "Salvador", "Samuel", "Stephen", "Yarely", "Young-Joon"
                        );
    
    // Array that holds each player's image name
    $playerPictures = array("Anita" => "Anita.jpg", "Araceli" => "Araceli.jpg", "Benito" => "Benito.jpg",
                            "Christian" => "Christian.jpg", "Clarissa" => "Clarissa.png", "Daniel" => "Daniel.jpg",
                            "Eliasar" => "Eliasar.jpg", "Gabriel" => "Gabriel.jpg", "Hugo" => "Hugo.jpg", 
                            "Joseph" => "Joseph.jpg", "Josie" => "Josie.jpg", "Juan" => "Juan.jpg",
                            "Karina" => "Karina.jpg", "Laura" => "Laura.jpg", "Lesly" => "Lesly.jpg", 
                            "Martin" => "Martin.jpg", "Miriam" => "Miriam.png", "Naelin" => "Naelin.jpg",
                            "Noemi" => "Noemi.jpg", "Pearce" => "Pearce.jpg", "Pepe" => "Pepe.jpg",
                            "Salvador" => "Salvador.jpg", "Samuel" => "Samuel.jpg", "Stephen" => "Stephen.jpg",
                            "Yarely" => "Yarely.jpg", "Young-Joon" => "Young-Joon.png"
                            );
    
    // Return the name of a random player from the player's list
    function getRandomPlayer() {
        global $playerNames;
        
        $playerName = array_pop($playerNames);
        
        return $playerName;
    }

    // Get the link the player's picture
    function getPlayerImageLink($name) {
        global $playerPictures;
        
        $imageName = $playerPictures[$name];
        
        return "players/$imageName";
    }
    
    // Returns the count of the largest hand
    function getLargestCardCount($hands) {
        $max = count($hands[0]);
        
        foreach($hands as $hand) {
            if (count($hand) > $max) {
                $max = count($hand);   
            }
        }
        
        return $max;
    }

    // Display a player's picture, hand
    function displayPlayers($hands, $scores, $names) {
        
        $maxCount = getLargestCardCount($hands);
        
        echo "<table>";
        for ($row = 0; $row < count($names); $row++) {
            echo "<tr>";
            
            // Display the player's image
            $imageLink = getPlayerImageLink($names[$row]);
            echo "<td><img src='$imageLink'></td>";
            
            // Diplay the player's hand
            for ($col = 0; $col < $maxCount; $col++) {
                if (isset($hands[$row][$col]) ) {
                    $card = $hands[$row][$col];
                    $cardLink = getCardLink($card);
                    echo "<td><img src='$cardLink' ></td>";
                }
                else {
                    echo "<td></td>";
                }
            }
            
            // Display the player's score
            echo "<td>$scores[$row]</td>";
            echo "<tr>";
        }
        echo "</table>";
    }

    shuffle($playerNames);
?>