<?php

function computeAvg($score1, $score2, $score3, $score4, $score5, $score6, $drop) {
    $score1_change = ($score1/30)*100;
    $score5_change = ($score5/50)*100; 
    if ($drop == false) {
        $answer = ($score1_change + $score2 + $score3 + $score4 + $score5_change + $score6)/6; 
        return $answer;
    }
    else {
        $lowest = $score1_change; 
        if ($lowest > $score2) {
            $lowest = $score2;
        }
        if ($lowest > $score3) {
            $lowest = $score3;
        }
        if ($lowest > $score4) {
            $lowest = $score4;
        }
        if ($lowest > $score5_change) {
            $lowest = $score5;
        }
        if ($lowest > $score6) {
            $lowest = $score6;
        }
        $answer = ($score1_change + $score2 + $score3 + $score4 + $score5_change + $score6 - $lowest)/5; 
        return $answer; 
    }
}


/*
 * Note: Previously, you solved this problem in JavaScript.
 *       Observe your implementation in JavaScript and in PHP. 
 *       What are different? What are common?  
 */


echo "computeAvg(15, 55, 55, 55, 25, 55, true) = " . computeAvg(15, 55, 55, 55, 25, 55, true) . "<br/>";      // expected 54
echo "computeAvg(15, 55, 55, 55, 25, 55, false) = " . computeAvg(15, 55, 55, 55, 25, 55, false) . "<br/>";    // expected 53.33 
echo "computeAvg(15, 55, 55, 55, 27.5, 50, true) = " . computeAvg(15, 55, 55, 55, 25, 55, true) . "<br/>";      // expected 54
echo "computeAvg(15, 55, 55, 55, 27.5, 50, false) = " . computeAvg(15, 55, 55, 55, 25, 55, false) . "<br/>";    // expected 53.33

?> 