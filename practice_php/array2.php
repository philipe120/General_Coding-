<?php
$ar = array(5,33,29,12,8,2,9,66,45,25); 
$c = count($ar);
$ar2 = $ar; 
for ($i=0;$i<$c;$i++){
	$pos = 0;
	for ($j=0;$j<$c;$j++){
		if ($ar[$i]>$ar[$j]){
			$pos++;
		} 
		
	}
	$ar2[$pos] = $ar[$i];
}
echo implode(",",$ar2); 
?>