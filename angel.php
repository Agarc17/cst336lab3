<?php
    function displayWinner($playerScores, $playerNames)
    {
        $max = 0;
        for($i = 0; $i < sizeof($playerScores); $i++)
        {
            if($playerScores[$i] > $max)
            {
                $max = $playerScores[$i];
            }
        }
        for($i = 0; $i < sizeof($playerScores); $i++)
        {
            if($playerScores[$i] == $max)
            {
                echo $playerNames[$i]." wins ".$playerScores[$i]." points!!!";
            }
        }
    }
?>