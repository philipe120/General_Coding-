<?php
$t1 = 160;
$t2 = 71;
$con = 2;
while ($t1>$t2){
	$t3 = $t1-$t2;
	$t1 = $t2;
	$t2 = $t3;
	$con++;
}
echo $con;
?>