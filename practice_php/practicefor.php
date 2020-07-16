


<?php

// $n = 5;
// for ($i=1;$i<=$n;$i++){
// 	echo str_repeat("*",$n);
// 	echo "<br>";
// }

// function ($k){

// }

// function ($d)
// $input  = 10; 
// $firsthalf = intval($input/2);
// $secondhalf = $input-$firsthalf;

// for ($i=1;$i<=$firsthalf;$i++){
// 	for ($k=1;$k<=$input;$k++){
// 		if ($i==1){
// 			echo "#";
// 		}
// 		else {
// 			if ($k==1 or $k==($input)){
// 				echo "#";
// 			} else {
// 				// echo "startesting, $k, $i, $input";
// 				if ($k==$i or ($input-$i) == ($k-1)){
// 				echo "#";
// 				} 
// 				else {
// 				// echo "$i,$k,";
// 				echo "&nbsp&nbsp";
// 				}
// 				// echo "$i,$k,";
// 				// echo "&nbsp";
// 			}
			
// 		}
// 	}
// 	echo "<br>"; 
// }

// for (($d=$secondhalf);$d>=1;$d--){
// 	for ($c=$input;$c>=1;$c--){
// 		if ($d==1){
// 			echo "#";
// 		} else {
// 			if ($c==1 or $c==$input){
// 				echo "#";
// 			} else {
// 				if ($c==$d or (($input-$d)+1) == ($c)){
// 				echo "#";
// 				} else {
// 					echo "&nbsp&nbsp";
// 				}
// 			}
// 		}
// 	}
// 	echo "<br>";
// }
// for (($d=$secondhalf);$d>=1;$d--){
// 	for ($c=1;$c<=$input;$c++){
// 		if ($d==1){
// 			echo "#";
// 		} else {
// 			if ($c==1 or $c==$input){
// 				echo "#";
// 			} else {
// 				if ($c==$d or (($input-$d)+1) == $c){
// 				echo "#";
// 				} else {
// 					echo "&nbsp&nbsp";
// 				}
// 			}
// 		}
// 	}
// 	echo "<br>";
// }
// $n = 4; 
// $row = ($n)+($n-1);
// $n2 = ($n-1); 
// $counter = $n; 
// for ($i=1;$i<=$n;$i++){
	// for ($k=1;$k<=$row;$k++){
	// 	if ($i==1){
	// 		echo $n;
	// 	} else {
	// 		if ($k==$row or $k==1){
	// 			// echo "this is k"; 
	// 			echo $n; 
	// 		} else {
	// 			for($e=1;$e<=$n;$e++){

	// 			}
	// 			for($f=1;$f<=$)
				
	// 		}
	// 	}
// 	$current = ($n-$i)+1;

// 	if ($i==1){
// 		for($k=1;$k<=$row;$k++){
// 			echo $n;
// 		}
// 	} else {
// 		for($d=$n;$d>$current;$d--){
// 			echo $d;
// 		}
// 		for($l=1;$l<=(($current*2)-1);$l++){
// 			echo $current;
// 		}
// 		for($s=(($current)+1);$s<=$n;$s++){
// 			echo $s;

// 		}
// 	}
// 	echo "<br>";
	


// }
// for ($h=1;$h<=$n2;$h++){
// 	$current = ($h+1);
// 	if ($h==$n2){
// 		for($k=1;$k<=$row;$k++){
// 			echo $n;
// 		}
// 	} else {
// 		for($d=$n;$d>$current;$d--){
// 			echo $d;
// 		}
// 		for($l=1;$l<=(($current*2)-1);$l++){
// 			echo $current;
// 		}
// 		for($s=(($current)+1);$s<=$n;$s++){
// 			echo $s;

// 		}
// 	}
// 	echo "<br>";
// }


// function triangle($n){
// 	for ($i=1;$i<=$n;$i++){
// 		$current_row = ($i*2)-1;
// 		for($k=1;$k<=(($n)-$i);$k++){
// 			echo "&nbsp&nbsp";
// 		}
// 		for ($d=1;$d<=$current_row;$d++){
// 			echo "*";
// 		}
// 		for ($y=1;$y<=(($n)-$i);$y++){
// 			echo "&nbsp&nbsp";
// 		}
// 		echo "<br>";
// 	}
	
// }
// echo triangle(5);


$input= "3 10 12 5"; 
$ar = explode(" ",$input);
array_unshift($ar, "0");
$counter = count($ar);
$counter2 = $counter;
print_r($ar);
echo "<br>";
$d=0;
for ($i=0;$i<$counter;$i++){
	$temp = 0;	
	$d=0;
	while ($d<=$i){
	$temp = $temp + $ar[$d];
	$d++; 
	}
	$d= 0;
	// echo $temp,"&nbsp"; 
	while ($d<=$i){
	$temp = $temp - $ar[$d];
	$d++; 
	echo $temp,"&nbsp"; 
	}
	$temp = 0; 
	while ($d<$counter2 and $d>$i){
	$temp = $temp + $ar[$d];
	echo $temp, "&nbsp";
	$d++; 
	}
	echo "<br>";
}
// else {
// 					echo (($n-$i)+1);
// 				}
?>
