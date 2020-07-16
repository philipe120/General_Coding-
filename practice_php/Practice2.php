<?php
$h = 5;
$l = intval($h/2)+1;
for ($i=1;$i<=$h;$i++){
	if ($i<=$l){
		$num = ($i-1)*2+1;
	} else {
		$num = $h-($i-$l)*2;
	}
	$hr1 = str_repeat("*",$num);
	$b = ($h-$num)*2;
	$hr = "";
	if ($b<1){
		$hr2 = "";
	} else {
		$hr2 = str_repeat("&nbsp&nbsp", $b);
	}
	$hr .= $hr1;
	$hr .= $hr2;
	$hr .= $hr1;
	echo $hr;
	echo "<br>"; 
}
?>