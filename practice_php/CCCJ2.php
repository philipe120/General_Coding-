<?php 
// Done by Philip Zhu // 
// Original Values // 
$trout = 1;
$pike = 2; 
$pickerel = 3;
// Total number of points // 
$totalP = 2;
$currentP = 0;
$combination = 0; 
$numtrout = 0;
// incrementing number of trout last // 
while ($numtrout <= $totalP){
	$numpike = 0; 
	// incrementing number of pike second // 
	while ($numpike <= $totalP){
		$numpickerel = 0;
		// incrementing number of pickerel first// 
		while ($numpickerel <= $totalP){
			// formula to calculate the current number of points for each combination // 
			$currentP = ($numtrout * $trout) + ($numpike * $pike) + ($numpickerel * $pickerel);
			// if statement to check if the current number of points is smaller or equal to the total number of points //
			// current number of points has to be bigger than 0 //
			if ($currentP <= $totalP and $currentP>0){
				$combination++;
				echo "$numtrout&nbsp Brown Trout, $numpike&nbsp Northern Pike, $numpickerel&nbsp Yellow Pickerel<br/>"; 
			}
			$numpickerel++;
		}
		$numpike++;
	}
	$numtrout++;
}
echo "Number of ways to catch fish: $combination";  




?>