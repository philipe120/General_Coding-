<?php
$x = 1;
$y = 9;
$r = 5;
$c = 15;
$i = $x;
$row1 = "                               ";
$row2 = "                               ";
$row3 = "                               ";
$row4 = "                               ";
$row5 = "                               ";
$row6 = "                               ";
$row7 = "                               ";
$row8 = "                               ";
$row9 = "                               ";
$row10 = "                               ";
$j = 1;
$rc = 1;
$cc = 4;

while ($i<=$y){
	for ($k=1;$k<=$j;$k++){
        $row = ${"row$r"};
        substr_replace($row,(string)$i,$c,2);
        if ($i>$y){
        	break; 
        }
        $i++;
        $r = $r+$rc;

	}
	for ($k=1;$k<=$j;$k++){
        $row = ${"row$r"};
        substr_replace($row,(string)$i,$c,2);
        echo $row; 
        if ($i>$y){
        	break; 
        }
        $i++;
        $c = $c+$cc;
    }
    $rc *= -1; 
    $cc *= -1;
    $j++;
}
for ($i=1;$i<=10;$i++){
	$row = ${"row$i"};
	echo $row;
	echo "<br>"; 
}
 
?>