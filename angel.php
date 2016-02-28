<?php
    function displayWinner($playerScores, $playerNames)
    {
        $max = 0;
        for($i = 0; $i < sizeof($playerScores); $i++)
        {
            if($playerScores[$i] > $max && $playerScores[$i] <= 42)
            {
                $max = $playerScores[$i];
            }
        }
        $sum = 0;
        $numWinners = 0;
        for($i = 0; $i < sizeof($playerScores); $i++)
        {
            if($playerScores[$i] != $max)
            {
                $sum += $playerScores[$i];
            }
            else
                $numWinners++;
        }
        for($i = 0; $i <sizeof($playerScores); $i++)
        {
            if($playerScores[$i] == $max)
            {
                 echo $playerNames[$i], " wins ",  $sum/$numWinners, " points!!!<br/>";
            }
        }
    }
?>