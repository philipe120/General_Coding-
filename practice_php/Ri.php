<?php
$l = 5; 
for ($i=1;$i<=$l;$i++){
	for ($k=1;$k<=$l;$k++){
		if ($k<=$i){
			echo "*&nbsp";
		} else {
			echo "&nbsp";
		}
		
	}
	echo "<br>"; 
}


?> 


<?php 

$s = 1; 
$hl = 5;
for ($i=1;$i<=$hl and $i>=1;$i+=$s){
	for ($k=1;$k<=$i;$k++){
		echo "*&nbsp";
		if ($i == $hl){
			echo "*&nbsp";
		}
	}
	if($i == $hl){
		$s=-$s;
	}
	echo "<br>"; 
}

?>


<?php
$f = 4;
$num = 1; 
for ($i=$f;$i>=1;$i--){
	if ($i>1){
		echo "$i*";
		$num = $i * $num;
	} else {
		echo "$i";
	}
}
echo "=$num"; 
?> 


<?php
echo "<br>"; 
?>




<?php
for ($i=0;$i<=9;$i++){
	for ($k=0;$k<=9;$k++){
		$num = $i.$k;
		echo "$num,";
		if ($num == 20){
			echo "<br>"; 
		}
		elseif ($num == 41){
			echo "<br>";
		} 
		elseif ($num == 62){
			echo "<br>";
		}
		elseif ($num == 83){
			echo "<br>";
		}
	}
}


?>

<?php
echo "<br>"; 
?> 



<?php 
echo substr_count("w3resource", "r"); 
?> 


<?php
$testscore = 90; 
if ($testscore <= 59 and $testscore >= 0){
	echo "F";
}
elseif($testscore <= 69){
	echo "D";
}
elseif($testscore <= 79){
	echo "C";
}
elseif($testscore <= 89){
	echo "B";
}
elseif($testscore <= 100){
	echo "A";
}
?>

<?php
$num = 9;
if ($num%3 == 0){
	echo "divisible by 3"; 
}
?>

<?php
$num = 35;
if ($num%5 == 0 and $num%7 == 0){
	echo "multiple of 5 and 7";
}
?>


<?php
echo "<br>"; 
?>




<?php 

for ($i=1;$i<=10;$i++){
	if ($i<=5){
		$k = $i; 
	} 
	else {
		$k = ($i - 1) - ($i-6)*2;
	}
	for ($j=1;$j<=$k;$j++){
			echo "*&nbsp";
		}
	echo "<br>"; 
}
?> 
