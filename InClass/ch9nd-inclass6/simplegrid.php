<?php 

function isDiagonal($width, $tile)
{
    $row = intdiv(($tile - 1), $width);
    $col = fmod(($tile - 1), $width);

    if ($tile >= 1 && $tile <= $width * $width) {
        if ($row == $col) {
            return 1;
        }
    }
    else {
        return ""; 
    }
}

function isEdge($width, $height, $tile)
{
    $row = intdiv(($tile - 1), $width); 
    $col = fmod(($tile - 1), $width);   
    if ($tile >= 1 && $tile <= $width * $height) {
        if ($row == 0 || $col == 0 || $col == $width-1 || $row == $height - 1) {
            return 1;
        }
    }
    else {
        return ""; 
    }
}

echo "-- Test isDiagonal(width, height, tile) function -- <br/>";

echo "isDiagonal(7, 1): " . isDiagonal(7,1) . "<br/>";        // expected 1
echo "isDiagonal(7, 25): " . isDiagonal(7,25) . "<br/>";       // expected 1
echo "isDiagonal(7, 41): " . isDiagonal(7,41) . "<br/>";       // expected 1
echo "isDiagonal(7, 42): " . isDiagonal(7,42) . "<br/>";       // expected ""
echo "isDiagonal(7, 24): " . isDiagonal(7,24) . "<br/>";       // expected ""
echo "isDiagonal(7, 26): " . isDiagonal(7,26) . "<br/>";       // expected ""
echo "isDiagonal(7, 48): " . isDiagonal(7,26) . "<br/>";       // expected ""
echo "isDiagonal(7, 50): " . isDiagonal(7,50) . "<br/>";       // expected ""
echo "isDiagonal(7, 0): " . isDiagonal(7,0) . "<br/>";         // expected ""

echo "<br/><br/>-- Test isDiagonal(width, height, tile) function -- <br/>";

echo "isDiagonal(3, 1): " . isDiagonal(3,1) . "<br/>";         // expected 1
echo "isDiagonal(3, 2): " . isDiagonal(3,2) . "<br/>";         // expected ""
echo "isDiagonal(3, 3): " . isDiagonal(3,3) . "<br/>";         // expected ""
echo "isDiagonal(3, 4): " . isDiagonal(3,4) . "<br/>";         // expected ""
echo "isDiagonal(3, 5): " . isDiagonal(3,5) . "<br/>";         // expected 1
echo "isDiagonal(3, 6): " . isDiagonal(3,6) . "<br/>";         // expected ""
echo "isDiagonal(3, 8): " . isDiagonal(3,8) . "<br/>";         // expected ""
echo "isDiagonal(3, 9): " . isDiagonal(3,9) . "<br/>";         // expected 1



echo "<br/><br/>-- Test isEdge(width, height, tile) function -- <br/>";

echo "isEdge(7, 8, 1): " . isEdge(7, 8, 1) . "<br/>";          // expected 1
echo "isEdge(7, 8, 5): " . isEdge(7, 8, 5) . "<br/>";          // expected 1
echo "isEdge(7, 8, 43): " . isEdge(7, 8, 43) . "<br/>";        // expected 1
echo "isEdge(7, 8, 50): " . isEdge(7, 8, 50) . "<br/>";        // expected 1
echo "isEdge(7, 8, 28): " . isEdge(7, 8, 28) . "<br/>";        // expected 1
echo "isEdge(7, 8, 56): " . isEdge(7, 8, 56) . "<br/>";        // expected 1
echo "isEdge(7, 8, 13): " . isEdge(7, 8, 13) . "<br/>";        // expected ""
echo "isEdge(7, 8, 25): " . isEdge(7, 8, 25) . "<br/>";        // expected ""
echo "isEdge(7, 8, 44): " . isEdge(7, 8, 44) . "<br/>";        // expected ""
echo "isEdge(7, 8, 57): " . isEdge(7, 8, 57) . "<br/>";        // expected ""
echo "isEdge(7, 8, 0): " . isEdge(7, 8, 0) . "<br/>";          // expected ""


echo "<br/><br/>-- Test isEdge(width, height, tile) function -- <br/>";

echo "isEdge(3, 3, 1): " . isEdge(3, 3, 1) . "<br/>";          // expected 1
echo "isEdge(3, 3, 2): " . isEdge(3, 3, 2) . "<br/>";          // expected 1
echo "isEdge(3, 3, 3): " . isEdge(3, 3, 3) . "<br/>";          // expected 1
echo "isEdge(3, 3, 4): " . isEdge(3, 3, 4) . "<br/>";          // expected 1
echo "isEdge(3, 3, 5): " . isEdge(3, 3, 5) . "<br/>";          // expected ""
echo "isEdge(3, 3, 6): " . isEdge(3, 3, 6) . "<br/>";          // expected 1
echo "isEdge(3, 3, 8): " . isEdge(3, 3, 8) . "<br/>";          // expected 1
echo "isEdge(3, 3, 9): " . isEdge(3, 3, 9) . "<br/>";          // expected 1

?> 