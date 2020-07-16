<?php
$r = 4;
$counter = 0;
$k = ($r**2);
for ($x=(-$r);$x<=$r;$x++){
	for ($y=(-$r);$y<=$r;$y++){
		$total = $x**2+$y**2;
		if ($total<=$k){
			$counter++;
		}
	}
}
echo $counter; 
?>